<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
use Midtrans\Config;
use Midtrans\Snap;

class Transaksi extends RestController
{
    public $token_session;
    public function __construct()
    {
        parent::__construct();
        $header = $this->input->request_headers()['Authorization'];

        if (!$header) return $this->response(['message' => ' Token required'], 404);

        try {
            $this->token_session = decode_jwt($header);
        } catch (\Throwable $th) {
            $this->response(['message' => 'Invalid Token'], 404);
        }
        
        $this->load->model('Keranjang_model', 'cart');
    }

    public function checkout_post() {
        $id_pengguna = $this->token_session->id_pengguna;
        // $id_alamat_pengiriman = '';
        // $kode_voucer = '' ;
        // $catatan = $this->input->post('pesan');
        
        // var_dump((int) $this->cart->get_item($id_pengguna)['grand_total']);
        // die;

        $whare = [
            'id_pengguna' => $id_pengguna,
            'is_checked'  => 1
        ];

        $items = $this->db->where($whare)->get('keranjang')->result_array();

        if(count($items) < 1) {
            $this->response([
                'errors'  => 'Keranjang kosong',
                'message' => 'Anda belum memilih barang untuk checkout',
            ], 404);
        }

        
        $data = [
                'id_pengguna'           => $id_pengguna,
                'id_alamat_pengguna'    => 1,
                'kode_unik'             => 'ESTM283747824',
                'total_transaksi'       => $this->cart->get_item($id_pengguna)['grand_total'],
                'payment_url'           => 'url midtrans',
                'catatan'               => $catatan ?? null,
                'kode_voucher'           => 'code voucer',
                'created_at'            => date('Y-m-d h:i:s'),
                'updated_at'            => date('Y-m-d h:i:s'),
        ];

        // var_dump($data);
        // die;

        $this->db->insert('transaksi', $data);
        $get_id_transaksi_after_checkout = $this->db->get_where('transaksi', ['id_transaksi' => $this->db->insert_id()])->row_array();
        

        foreach($items as $item) {
            $this->db->insert('detail_transaksi', [
                'id_transaksi' => $get_id_transaksi_after_checkout['id_transaksi'],
                'id_produk'    => $item['id_produk'], 
                'jumlah'       => $item['jumlah'] , 
                'id_variasi'   => $item['id_variasi'] ?? null,
                'created_at'   => date('Y-m-d h:i:s'),
                'updated_at'   => date('Y-m-d h:i:s'),
            ]);
            // $this->db->delete('keranjang', ['id_keranjang' => $item['id_keranjang']]);
        }

        // Set your Merchant Server Key
        Config::$serverKey = 'SB-Mid-server-fU65aSIePqfEL_orhm8yemO5';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;
        
        $midtrans = array(
            'transaction_details' => array(
                'order_id' => $get_id_transaksi_after_checkout['id_transaksi'],
                'gross_amount' => (int) $get_id_transaksi_after_checkout['total_transaksi']
            ),
            'customer_details' => array(
                'first_name'    => $this->token_session->nama_pengguna,
                'email'         => 'email@dummy.com'
            ),
            'enabled_payments' => array('gopay','shopeepay','indomaret','bank_transfer'),
            'vtweb' => array()
        );
        

         try {
            // Ambil halaman payment midtrans
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            // echo "url = $paymentUrl";
            // die;
            $query = $this->db->set('payment_url',$paymentUrl)->where('id_transaksi', $get_id_transaksi_after_checkout['id_transaksi']);
            $query->update('transaksi');

            // Redirect ke halaman midtrans
           $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Berhasil memberi penilaian dan rating produk'
                ],

                'data' => [
                    'payment_url' => $paymentUrl
                ]
            ], 200);

            redirect($paymentUrl,'reflesh');
        }
        catch (Exception $e) {
            echo $e;
        }

        
    }

}