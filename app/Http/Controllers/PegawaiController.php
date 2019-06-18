<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
	public function index()
	{
    	        // mengambil data dari table pegawai
		$products = DB::table('products')->paginate(10);

    	        // mengirim data pegawai ke view index
		return view('welcome',['products' => $products]);

	}


}