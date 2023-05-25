<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect() {
        $usertype = Auth::user()->usertype;
        if($usertype == '1') {
            $totalCategories = Category::count();
            $totalProducts = Product::count();
            $totalOrders = Order::count();
            $totalUsers = User::count();
            $totalUser = User::count('usertype', '0')->count();
            $totalAdmin = User::count('usertype', '1')->count();
            return view('admin.home', compact('totalCategories', 'totalProducts', 'totalOrders', 'totalUsers', 'totalUser', 'totalAdmin'));
        } else {
            $product = Product::paginate(2);
            $category = Category::all();
            $user = auth()->user();
            $count = Cart::where('email', $user->email)->count();
            return view('user.home', compact('product', 'category', 'count'));
        }
    }

    public function index(Request $request) {
        $product = Product::paginate(2);
        $category = Category::all();
        return view('user.home', compact('product', 'category'));
    }


    public function productdetail(Request $request) {
        $product = Product::all();
        $user = auth()->user();
        $count = Cart::where('email', $user->email)->count();
        return view('user.product', compact('product', 'count'));
    }

    public function categorydetail() {
        $category = Category::all();
        $user = auth()->user();
        $count = Cart::where('email', $user->email)->count();
        return view('user.category', compact('category', 'count'));
    }

    public function addcart(Request $request, $id) {
        if(Auth::id()) {
            $user = auth()->user();
            $product = Product::find($id);
            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->product_title = $product->name;
            $cart->price = $product->price;

            $cart->save();

            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function showcart() {
        $user = auth()->user();
        $cart = Cart::where('email', $user->email)->get();
        $count = Cart::where('email', $user->email)->count();
        return view('user.showcart', compact('cart', 'count'));
    }

    public function deletecart($id) {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function confirmorder(Request $request) {
        $user = auth()->user();
        $name = $user->name;
        $email = $user->email;

        foreach($request->productname as $key=>$productname) {
            $order = new Order;
            $order->product_name = $request->productname[$key];
            $order->price = $request->price[$key];
            $order->name = $name;
            $order->email = $email;

            $order->save();
        }
        DB::table('carts')->where('email', $email)->delete();
        return redirect()->back();
    }

    public function product_category($name) {
        // if(Category::where('name', $name)->exists()) {

        // } else {
        //     return redirect()->back();
        // }
        $category = Category::where('name', $name)->first();
        $product = Product::where('category', $category->name)->get();
        return view('user.product_category', compact('category', 'product'));
    }
}