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
                        'rules' => 'required'
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
        $query = $this->db->get_where('suplier', ['id_suplier' => $id]);
        return $query->result();
    }

    public function get_all()
    {
        $query = $this->db->get('suplier');
        return $query->result();
    }

    public function get_products($id)
    {
        $query = $this->db->get_where('produk', ['id_suplier' => $id]);
        return $query->result();
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