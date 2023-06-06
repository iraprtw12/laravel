<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function admin()
    {
        $products = Produk::all();
        return view('toko/admin',compact('products'));
    }
    
    public function customer()
    {
        $customers = Customer::all();
        return view('toko/customer',compact('customers'));
    }
}
