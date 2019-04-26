<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class produkController extends Controller
{
	public function index()
	{
		$produk = DB::table('barangs')
		->join('kategori','barangs.id_kategori','=','kategori.id')
		->get();
		return view('produk/index',compact('produk'));
	}
	public function store()
	{
		DB::table('barangs')
		->insert([
			'nama' => 'Lampu',
			'id_kategori' => 1,
			'qty' => 14,
			'harga_beli' => 40000,
			'harga_jual' => 60000,
	]);
		echo "Data Berhasil Ditambah";
	}

	public function update()
	{
		DB::table('barangs')->where('id',3)
		->update([
			'nama' => 'Bola Lampu',
			'qty' => 20,
			'harga_beli' => 45000,
			'harga_jual' => 55000,
		]);
		echo "Data Berhasil Diperbaharui";
	}
	public function delete()
	{
	DB::table('barangs')->where('id',3)->delete();
	echo "Data Berhasil Dihapus";
	}
}