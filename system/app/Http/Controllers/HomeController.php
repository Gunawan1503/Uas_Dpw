<?php 

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller{

	function index(){
		$data['list_produk'] = Produk::paginate(6);
		return view('home', $data);
	}
	
	function showHome(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('Home');
	}
	function showDashboard(){
		return view('dashboard');
	}

	function showKategori(){
		return view('kategori');
	}

	function filter(){
		$nama = request('nama');
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

		return view('home', $data);
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('show', $data);
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
	}

	function pesan(){
		$data['list_provinsi'] = Provinsi::all();
		return view('pesan', $data);
	}
}