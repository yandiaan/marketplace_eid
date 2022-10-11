<?php

class Suplier_model extends CI_Model
{
    public function rules($params)
    {
        $rules = array(
            'profile' => array(
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'nama_toko',
                        'label' => 'Nama Toko',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'deskripsi',
                        'label' => 'Deskripsi Toko',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'lokasi',
                        'label' => 'Lokasi',
                        'rules' => 'required'
                ),
            ),
            'password' => array(
                array(
                        'field' => 'old_password',
                        'label' => 'Password Lama',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'new_password',
                        'label' => 'Password Baru',
                        'rules' => 'required'
                ),
            )
        );

        return $rules[$params];
    }

    public function get_one($id)
    {
        $this->db->select('suplier.id_suplier,suplier.nama_toko,suplier.deskripsi,suplier.lokasi,suplier.banner,suplier.logo,suplier.updated_at');
        $query = $this->db->get_where('suplier', ['id_suplier' => $id])->row_array();

        // Loop through the products array
        $this->db->where('id_suplier', $query['id_suplier']);
        $produks = $this->db->get('produk')->result_array();
        $query['produks'] = $produks;

        foreach ($produks as $j => $produk) {
            $this->db->where('id_produk', $produk['id_produk']);
            $images_query = $this->db->get('galeri_produk')->result_array();

            $query['produks'][$j]['images'] = $images_query;
        }

        return $query;
    }
    
    public function filter_all($data)
    {
        $this->db->select('suplier.id_suplier,suplier.nama_toko,suplier.deskripsi,suplier.lokasi,suplier.banner,suplier.logo,suplier.updated_at');
        $this->db->like('suplier.nama_toko', $data['nama_toko']);
        $query = $this->db->get('suplier')->result_array();

        // Loop through the products array
        foreach ($query as $i => $suplier) {

            $this->db->where('id_suplier', $suplier['id_suplier']);
            $produks = $this->db->get('produk')->result_array();
            $query[$i]['produks'] = $produks;
            
            foreach($produks as $j => $produk) {
                $this->db->where('id_produk', $produk['id_produk']);
                $images_query = $this->db->get('galeri_produk')->result_array();

                $query[$i]['produks'][$j]['images'] = $images_query;
                
            }
        }
        
        return $query;
    }


    //  ======================================= Admin =========================================
    public function get_suplier($id){
        $this->db->select('suplier.id_suplier,suplier.nama_toko,suplier.deskripsi,suplier.lokasi,suplier.banner,suplier.logo,suplier.join_at');
        return $this->db->get_where('suplier', ['id_suplier' => $id])->row_array();
    }

    public function update_profile($id, $data)
    {
        $query = $this->db->set($data)
            ->where('id_suplier', $id);

        return $query->update('suplier');
    }

    public function check_password($id, $old_password)
    {
        $user = $this->db->select('password')
            ->where('id_suplier', $id)
            ->get('suplier')->row();

        $verification = password_verify($old_password, $user->password);

        return $verification;
    }

}