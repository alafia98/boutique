<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Notification;
use PDF;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function showcategory() {
        $data = Category::all();
        return view('admin.category.show', compact('data'));
    }

    public function createcategory() {
        return view('admin.category.create');
    }

    public function uploadcategory(Request $request) {
        $data = new Category;
        $data->name = $request->name;
        $data->save();
        return redirect()->back()->with('message', 'Product Created Successfully');
    }

    public function editcategory($id) {
        $data=Category::find($id);
        return view('admin.category.edit', compact('data'));
    }
    
    public function updatecategory(Request $request, $id) {
        $data=Category::find($id);
        $data->name=$request->name;
        $data->save();
        return redirect()->back()->with('message', 'Product Edited Successfully');
    }

    public function deletecategory($id) {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
 
    public function showproduct() {
        $data = Product::all();
        return view('admin.product.show', compact('data'));
    }

    public function searchproduct(Request $request) {
        $searchText = $request->search;
        $data = Product::where('name', 'like', '%'.$searchText.'%')->orWhere('price', 'like', '%'.$searchText.'%')->get();
        return view('admin.product.show', compact('data'));
    }

    public function createproduct() {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    public function uploadproduct(Request $request) {
        $data = new Product;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage', $imagename);
        $data->image = $imagename;

        $data->name = $request->name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;

        $data->save();
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function editproduct($id) {
        $data=Product::find($id);
        $category=Category::all();
        return view('admin.product.edit', compact('data', 'category'));
    }
    
    public function updateproduct(Request $request, $id) {
        $data=Product::find($id);

        $image=$request->file;
        if($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage', $imagename);
            $data->image=$imagename;
        }

        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->category=$request->category;
        $data->save();
        return redirect()->back()->with('message', 'Product Edited Successfully');
    }

    public function deleteproduct($id) {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function showorder() {
        $order = Order::all();
        return view('admin.showorder', compact('order'));
    }

    public function updatestatus($id) {
        $order = Order::find($id);
        $order->status = 'delivered';
        $order->save();
        return redirect()->back();
    }

    public function detailorder($id) {
        $order = Order::find($id);
        return view('admin.detailorder', compact('order'));
    }

    public function send_email(Request $request, $id) {
        $order = Order::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'button' => $request->button,
            'url' => $request->url
        ];

        Notification::send($order, new SendEmailNotification($details));

        return redirect()->back();
    }

    // public function pdf($id) {
    //     $order = Order::find($id);
    //     return view('admin.pdf', compact('order'));
    // }

    public function pdf($id) {
        $order = Order::find($id);
        view()->share('order', $order);
        $pdf = PDF::loadView('pdf', $order);
        return $pdf->download('order_details.pdf');
    }

    public function detailuser() {
        $user = User::all();
        return view('admin.detailuser', compact('user'));
    }
}