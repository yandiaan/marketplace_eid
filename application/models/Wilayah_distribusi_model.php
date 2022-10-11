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
}
