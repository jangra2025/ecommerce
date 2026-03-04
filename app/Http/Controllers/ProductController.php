<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    public function login()
    {
        return view('login');
    }
    function details($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    public function show($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    public function addToCart(Request $request)
    {
        $cart = new Cart;
        $cart->user_id = $request->session()->get('user')['id'];
        $cart->product_id = $request->product_id;
        $cart->save();

        return redirect('/Cart');
    }
    function carlist()
    {
        if (!Session::has('user')) {
            return redirect('login');
        }

        $userId = Session::get('user')['id'];

        $data = DB::table('cart')
            ->join('product', 'cart.product_id', 'product.id')
            ->select('product.*')
            ->where('cart.user_id', $userId)
            ->get();

        return view('cartlist', ['product' => $data]);
    }
}
