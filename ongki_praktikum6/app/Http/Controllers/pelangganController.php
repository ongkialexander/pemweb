<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class pelangganController extends Controller

{
	public function dataPelanggan()
	{
		$pelanggan = ['Made','Aulia','Mudo','Ichsan', 'Ongki', 'Harlis', 'Renaldi'];
		return $pelanggan;
	}
	public function index()
	{
		$pelanggan = $this->dataPelanggan();
		return view('pelanggan/index',compact('pelanggan'));
	}
	
	
}