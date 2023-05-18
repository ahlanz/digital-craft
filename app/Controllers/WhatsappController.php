<?php 

// app/Controllers/WhatsappController.php

namespace App\Controllers;

use CodeIgniter\Controller;

class WhatsappController extends Controller
{
    public function index()
    {
        // Tampilkan view form pesan WhatsApp
        return view('contuct-us');
    }

    public function sendMessage()
    {
        // Ambil nomor telepon dan pesan dari form
        $name = $this->request->getPost('name');
        // $phoneNumber = $this->request->getPost('no_hp');
        $message = $this->request->getPost('message');

        // Lakukan proses pengiriman pesan ke WhatsApp di sini
        // Contoh: Mengirim pesan menggunakan library atau API WhatsApp
        $whatsappUrl = 'https://api.whatsapp.com/send?phone=6285975382151' . '&text=' .$name. '+' .  urlencode($message);
        // Redirect ke halaman sukses atau halaman form kembali
        return  redirect()->to($whatsappUrl);
    }
}




?>
