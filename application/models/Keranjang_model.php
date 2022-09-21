<?php

class Keranjang_model extends CI_Model
{

    public function rules($params)
    {
        $rules = array(
            'add_item' => array(
                array(
                        'field' => 'id_pengguna',
                        'label' => 'ID Pengguna',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'id_produk',
                        'label' => 'ID Produk',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'jumlah',
                        'label' => 'Jumlah',
                        'rules' => 'required'
                ),
            ),
            'update_quantity' => array(
                array(
                        'field' => 'id_pengguna',
                        'label' => 'ID Pengguna',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'id_produk',
                        'label' => 'ID Produk',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'jumlah',
                        'label' => 'Jumlah',
                        'rules' => 'required'
                ),
            )
        );

        return $rules[$params];
    }

    public function get_item($id_pengguna)
    {
        $items = $this->db->select('k.id_keranjang, k.id_pengguna, k.id_produk, k.id_variasi, k.jumlah, p.nama_produk, p.harga as harga_satuan, (p.harga * k.jumlah) as harga_total')
             ->from('keranjang as k')
             ->join('produk as p', 'p.id_produk = k.id_produk', 'left')
             ->join('variasi as v', 'v.id_variasi = k.id_variasi', 'left')
             ->where('id_pengguna', $id_pengguna)
             ->get()->result_array();

        foreach($items as $key => &$value) {
            $where = [
                'id_produk'     => $value['id_produk'],
                'id_variasi'    => $value['id_variasi']
            ];
            
            // Get variant of product
            $items[$key]['variasi'] = $this->db->select('model_variasi as model, harga as harga_satuan, (harga * '.$value['jumlah'].') as harga_total')
                ->get_where('variasi', $where)->row_array();
        
            if($value['variasi'] != null) {
                $items[$key]['harga_satuan'] = $value['variasi']['harga_satuan'];
                $items[$key]['harga_total'] = $value['variasi']['harga_total'];

                // Remove harga_satuan & harga_total on variasi array
                unset($items[$key]['variasi']['harga_satuan']);
                unset($items[$key]['variasi']['harga_total']);
            }
        
            $total_harga[]  = $value['harga_total'];
            $jumlah_barang[]  = $value['jumlah'];
        }

        if(count($items) < 1) {
            $grand_total    = '0';
            $total_items    = '0';
        } else {
            $grand_total    = sprintf('%s', array_sum($total_harga));
            $total_items    = sprintf('%s', array_sum($jumlah_barang));
        }

        $query = [
            'items'         => $items,
            'total_items'   => $total_items,
            'grand_total'   => $grand_total,
        ];

        return $query;
    }

    public function add_item($data)
    {
        $where = [
            'id_pengguna'   => $data['id_pengguna'],
            'id_produk'     => $data['id_produk'],
            'id_variasi'    => $data['id_variasi']
        ];
        
        // Check if item was existed
        $item_exist = $this->db->get_where('keranjang', $where)->row_array();

        // if item was existed, then the quantity increases
        if($item_exist) {
            $data = [
                'jumlah'        => $item_exist['jumlah'] + $data['jumlah'],
                'updated_at'    => date('Y-m-d h:i:s'),
            ];

            $query = $this->update_quantity($data, $where);
            return $query; 
        } else {
            $query = $this->db->set($data)->insert('keranjang');
            return $this->db->affected_rows() < 1 ? false : true; 
        }
    }

    public function update_quantity($data, $where, $method = '')
    {
        switch($method) {
            case 'increment':
                $query = $this->db->set('jumlah', 'jumlah+1', false)
                    ->set('updated_at', $data['updated_at'])
                    ->where($where);
                break;
            case 'decrement':
                $query = $this->db->set('jumlah', 'jumlah-1', false)
                    ->set('updated_at', $data['updated_at'])
                    ->where($where);
                break;
            default:
                $query = $this->db->set($data)->where($where);
                break;
        }
        
        $query->update('keranjang');
        return $this->db->affected_rows() < 1 ? false : true;
    }

    public function delete_item($where)
    {
        $this->db->where_in('id_keranjang', $where)->delete('keranjang');
        return $this->db->affected_rows() < 1 ? false : true;
    }

    public function empty_cart($id_pengguna)
    {
        $this->db->delete('keranjang', ['id_pengguna' => $id_pengguna]);
        return $this->db->affected_rows() < 1 ? false : true;
    }
}