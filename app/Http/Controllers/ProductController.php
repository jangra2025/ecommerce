<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    // Show all products on homepage
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    // Product details page
    public function details($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect('/')->with('error', 'Product not found');
        }

        return view('details', compact('product'));
    }

    // Search products
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")
            ->orWhere('category', 'like', "%$query%")
            ->get();

        return view('search', compact('products'));
    }

    // User login
    public function login(Request $req)
    {
        $user = User::where('email', $req->email)
            ->where('password', $req->password) // Plain text (for now)
            ->first();

        if ($user) {
            // Store as object in session
            Session::put('user', $user);
            return redirect('/');
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }

    // Add product to cart
    public function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $userId = $request->session()->get('user')->id;
            $productId = $request->product_id;
            $qty = $request->quantity ?? 1;

            $existingCart = Cart::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();

            if ($existingCart) {
                $existingCart->quantity += $qty;
                $existingCart->save();
            } else {
                Cart::create([
                    'user_id' => $userId,
                    'product_id' => $productId,
                    'quantity' => $qty
                ]);
            }
            return redirect('/cartlist');
        } else {
            return redirect('/login');
        }
    }

    // Count items in cart
    public static function cartItem()
    {
        if (Session::has('user')) {
            $userId = Session::get('user')->id;
            return Cart::where('user_id', $userId)->sum('quantity');
        }
        return 0;
    }

    // Show cart list
    public function cartlist()
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $userId = Session::get('user')->id;
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->select('products.*', 'cart.quantity', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();

        return view('cartlist', compact('data'));
    }

    // Remove cart item
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    // Order now page
    public function orderNow()
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $userId = Session::get('user')->id;
        $total = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum(DB::raw('products.price * cart.quantity'));

        return view('ordernow', compact('total'));
    }

    // Place order
    public function orderPlace(Request $request)
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $userId = Session::get('user')->id;
        $allCart = Cart::where('user_id', $userId)->get();

        foreach ($allCart as $cart) {
            $order = new Order();
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->address = $request->address;
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->save();
        }

        Cart::where('user_id', $userId)->delete();
        return redirect('/myorder');
    }

    // User orders
    public function myOrder()
    {
        if (!Session::has('user')) {
            return redirect('/login');
        }

        $userId = Session::get('user')->id;
        $data = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->select('orders.*', 'products.name', 'products.gallery', 'products.price', 'products.description')
            ->get();

        return view('myorder', compact('data'));
    }
}