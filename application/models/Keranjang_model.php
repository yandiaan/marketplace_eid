<?php

class Keranjang_model extends CI_Model
{

    public function rules($params)
    {
        $rules = array(
            'add_item' => array(
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
            'check_item'  => array(
                array(
                    'field' => 'id_keranjang',
                    'label' => 'ID Keranjang',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'is_checked',
                    'label' => 'Is Checked',
                    'rules' => 'required'
                ),
            ),
            'check_all_item'  => array(
                array(
                    'field' => 'id_suplier',
                    'label' => 'ID Suplier',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'is_checked',
                    'label' => 'Is Checked',
                    'rules' => 'required'
                ),
            )
        );

        return $rules[$params];
    }

    public function get_item($id_pengguna)
    {
        $suplier = $this->db->select('s.id_suplier, s.nama_toko, SUM(k.is_checked) as items_checked')
            ->from('keranjang as k')
            ->join('produk as p', 'p.id_produk = k.id_produk', 'left')
            ->join('suplier as s', 's.id_suplier = p.id_suplier', 'left')
            ->where('id_pengguna', $id_pengguna)
            ->group_by('s.id_suplier')
            ->get()->result_array();

        $items = $this->db->select('k.id_keranjang, k.id_pengguna, k.id_produk, k.id_variasi, k.jumlah, k.is_checked, p.id_suplier, p.nama_produk, p.harga as harga_satuan, (p.harga * k.jumlah) as harga_total')
            ->from('keranjang as k')
            ->join('produk as p', 'p.id_produk = k.id_produk', 'left')
            ->join('variasi as v', 'v.id_variasi = k.id_variasi', 'left')
            ->where('id_pengguna', $id_pengguna)
            ->get()->result_array();

        foreach ($items as $key => &$value) {
            $where = [
                'id_produk'     => $value['id_produk'],
                'id_variasi'    => $value['id_variasi']
            ];

            // Get variant of product
            $items[$key]['variasi'] = $this->db->select('model_variasi as model, harga as harga_satuan, (harga * ' . $value['jumlah'] . ') as harga_total')
                ->get_where('variasi', $where)->row_array();

            if ($value['variasi'] != null) {
                $items[$key]['harga_satuan'] = $value['variasi']['harga_satuan'];
                $items[$key]['harga_total'] = $value['variasi']['harga_total'];

                // Remove harga_satuan & harga_total on variasi array
                unset($items[$key]['variasi']['harga_satuan']);
                unset($items[$key]['variasi']['harga_total']);
            }

            // Get image of product
            $items[$key]['image_path'] = $this->db->select('image_path as path')
                ->get_where('galeri_produk', $where)->row_array()['path'];

            if ($value['is_checked'] == '1') {
                $total_harga[]  = $value['harga_total'];
                $total_items_checked[] = $value['jumlah'];
            } else {
                $total_harga[] = ['0'];
                $total_items_checked[] = ['0'];
            }

            $jumlah_barang[]  = $value['jumlah'];
        }

        if (count($items) < 1) {
            $grand_total            = '0';
            $total_items            = '0';
            $total_items_checked    = '0';
        } else {
            $grand_total            = sprintf('%s', array_sum($total_harga));
            $total_items            = sprintf('%s', array_sum($jumlah_barang));
            $total_items_checked    = sprintf('%s', array_sum($total_items_checked));
        }

        $query = [
            'suplier'               => $suplier,
            'items'                 => $items,
            'total_items'           => $total_items,
            'total_items_checked'   => $total_items_checked,
            'grand_total'           => $grand_total,
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
        if ($item_exist) {
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

    public function update_quantity($data, $where)
    {
        $this->db->set($data)->where($where)->update('keranjang');
        return $this->db->affected_rows() < 1 ? false : true;
    }

    public function delete_item($id_pengguna, $where)
    {
        $this->db->where('id_pengguna', $id_pengguna)
            ->where_in('id_keranjang', $where)->delete('keranjang');
        return $this->db->affected_rows() < 1 ? false : true;
    }

    public function delete_checked_item($id_pengguna, $id_suplier)
    {
        // get data produk by suplier
        $produk = $this->db->get_where('produk', ['id_suplier' => $id_suplier])->result_array();

        foreach ($produk as $key => $value) {
            $id_produk[] = $value['id_produk'];
        }

        $this->db->where('id_pengguna', $id_pengguna)
            ->where('is_checked', '1')->where_in('id_produk', $id_produk)->delete('keranjang');
        return $this->db->affected_rows() < 1 ? false : true;
    }

    public function empty_cart($id_pengguna)
    {
        $this->db->delete('keranjang', ['id_pengguna' => $id_pengguna]);
        return $this->db->affected_rows() < 1 ? false : true;
    }

    public function check_item($data, $where)
    {
        $this->db->set($data)->where($where)->update('keranjang');
        return $this->db->affected_rows() < 1 ? false : true;
    }

    public function check_all_item($data, $where)
    {
        // get data produk by suplier
        $produk = $this->db->get_where('produk', ['id_suplier' => $where['id_suplier']])->result_array();

        foreach ($produk as $key => $value) {
            $id_produk[] = $value['id_produk'];
        }

        // Update data on keranjang
        $this->db->set($data)
            ->where_in('id_produk', $id_produk)
            ->where('id_pengguna', $where['id_pengguna'])
            ->update('keranjang');

        return $this->db->affected_rows() < 1 ? false : true;
    }
}
