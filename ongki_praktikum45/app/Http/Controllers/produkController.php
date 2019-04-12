<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
	public function dataproduk()
	{
		$produk =['Meja', 'Kursi', 'Buku', 'Lampu'];
		return $produk;
	}
	public function index()
	{
		$produk = $this -> dataproduk();
		return view('produk/index',compact('produk'));
	}
}