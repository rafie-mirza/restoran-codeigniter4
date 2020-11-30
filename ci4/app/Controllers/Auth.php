<?php

namespace App\Controllers;



use App\Models\Kategori_M;
use App\Models\Menu_M;
use App\Models\Pelanggan_M;

class Auth extends BaseController
{
    public function authregister()
    {
        $model = new Pelanggan_M();

        if (isset($_POST['password'])) {
            $data = [
                'pelanggan'  => $_POST['pelanggan'],
                'alamat'    => $_POST['alamat'],
                'telp'    => $_POST['telp'],
                'email'  => $_POST['email'],
                'password'  => password_hash($_POST['password'],PASSWORD_DEFAULT),
                'aktif' => 1
            ];

            if ($model->insert($data) === false) {
                $error = $model->errors();
                session()->setFlashdata('info', $error['email']);
                return redirect()->to(base_url("/login"));
            } else {
                session()->setFlashdata('message', 'Registrasi Anda Berhasil !');
                return redirect()->to(base_url('login'));
            }
        }
        
    }

    public function viewlogin()
    {
        $model = new Kategori_M();
		$kategori = $model->findAll();
		$modelmenu = new Menu_M();
		$menu = $modelmenu->findAll();
        $cart = \Config\Services::cart();
        
        $data = [
            'kategori' => $kategori,
			'menu'	=> $menu,
            'cart'    => $cart->contents(),
            'total' => $cart->total(),
            'judul' => "LOGIN PELANGGAN"
        ];

        return view('front/login', $data);
    }

   

    public function authlogin()
    {
        if ($this->request->getMethod() == 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $passworda = password_verify($password, PASSWORD_DEFAULT);

            $model = new Pelanggan_M();
            if ($pelanggan = $model->where(['email' => $email, 'password' => $passworda, 'aktif' => 1])->first()) {
                $this->setSession($pelanggan);
                return redirect()->to(base_url());
            } else {
                session()->setFlashdata('error', 'Email atau Password Anda Salah !!');
                return redirect()->to(base_url('/login'));
            }
        }
    }

    public function setSession($pelanggan)
    {
        $data = [
            'idpelanggan'    => $pelanggan['idpelanggan'],
            'namapelanggan' => $pelanggan['pelanggan'],
            'emailpelanggan' => $pelanggan['email'],
            'alamatpelanggan' => $pelanggan['alamat'],
            'telppelanggan' => $pelanggan['telp'],
            'loggedIn' => true
        ];

        session()->set($data);
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->remove('idpelanggan');
        $session->remove('namapelanggan');
        $session->remove('emailpelanggan');
        $session->remove('alamatpelanggan');
        $session->remove('telppelanggan');

        return redirect()->to(base_url());
    }

}