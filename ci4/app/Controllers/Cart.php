<?php namespace App\Controllers;

use App\Models\Kategori_M;
use App\Models\Menu_M;
 
class Cart extends BaseController
{
 
    public function index()
	{
        $cart = \Config\Services::cart();
        $model = new Kategori_M();
		$kategori = $model->findAll();
		$modelmenu = new Menu_M();
        $menu = $modelmenu->findAll();
        
        $data = [
            'kategori' => $kategori,
			'menu'	=> $menu,
            'totalitem' => $cart->totalItems(),
            'cart' => $cart->contents(),
            'total' => $cart->total(),
            'judul' => "KERANJANG"
        ];
		return view('front/cart',$data);
	}
 
    public function tambah_ke_keranjang($id = null)
	{
		$modelmenu = new Menu_M();
        $menu = $modelmenu->getProduct($id);
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $menu['idmenu'],
            'qty'     => 1,
            'price'   => $menu['harga'],
            'name'    => $menu['menu'],
            'gambar' => $menu['gambar']
        ));
        $nama = $menu['menu'];
        session()->setFlashdata('pesan', "Berhasil memasukan {$nama} ke keranjang");
        return redirect()->to(base_url('menu'));
    }

    public function hapus($rowid = null)
    {
        $cart = \Config\Services::cart();

        $cart->remove($rowid);
        return redirect()->to(base_url('/keranjang'));
    }

    public function plus($qty, $rowid)
    {
        $cart = \Config\Services::cart();
        $jumlah = $qty + 1;
        $data = array(
            'rowid' => $rowid,
            'qty' => $jumlah
        );
        $cart->update($data);
        return redirect()->to(base_url('/keranjang'));
    }
    public function minus($qty, $rowid)
    {
        $cart = \Config\Services::cart();
        $jumlah = $qty - 1;
        $data = array(
            'rowid' => $rowid,
            'qty' => $jumlah
        );

        if ($jumlah == 0) {
            $cart->remove($rowid);
        } else {
            $cart->update($data);
        }

        return redirect()->to(base_url('/keranjang'));
    }

    public function insertorder()
    {
        $db = \Config\Database::connect();
        $cart = \Config\Services::cart();

        date_default_timezone_set('Asia/Jakarta');
        $pelanggan = session()->get('idpelanggan');
        $order = array(
            'idpelanggan' => $pelanggan,
            'tglorder' => date('Y-m-d'),
            'total' => $cart->total(),
            'bayar' => 0,
            'kembali' => 0,
            'status' => 0,
        );
        $db->table('tblorder')->insert($order);
        $row = $db->query('SELECT idorder FROM tblorder ORDER BY idorder DESC')->getRowArray();

        foreach ($cart->contents() as $item) {
            $data = array(
                'idorder' => $row['idorder'],
                'idmenu' => $item['id'],
                'jumlah'  => $item['qty'],
                'hargajual' => $item['price'],
            );

            $db->table('tblorderdetail')->insert($data);
        }

        $cart->destroy();
        return redirect()->to(base_url('success'));
    }
 
}