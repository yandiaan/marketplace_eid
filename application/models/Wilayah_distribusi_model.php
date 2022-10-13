<?php

class Wilayah_distribusi_model extends CI_Model
{

    public function rules($params)
    {
        $validation = [
            'add_wilayah_distribusi' => [
                [
                    'field' => 'provinsi',
                    'label' => 'Provinsi',
                    'rules' => 'required'
                ],
                [
                    'field' => 'kota',
                    'label' => 'Kota',
                    'rules' => 'required'
                ],
            ]
        ];

        return $validation[$params];
    }


    public function get_one($id)
    {
        $query = $this->db->get_where('wilayah_distribusi', ['id_wilayah_distribusi' => $id])->row_array();

        return $query;
    }

    public function get_all($id)
    {
        $query = $this->db->get_where('wilayah_distribusi', ['id_suplier' => $id])->result_array();

        return $query;
    }
}
