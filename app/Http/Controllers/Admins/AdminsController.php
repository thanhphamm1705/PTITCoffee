<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use App\Models\Product\Product;
use App\Models\Product\Booking;
use App\Models\Product\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AdminsController extends Controller
{

    public function viewLogin() {

        return view('admins.login');
    }

    public function checkLogin(Request $request) {

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function index() {

        $productsCount = Product::select()->count();
        $ordersCount = Order::select()->count();
        $bookingsCount = Booking::select()->count();
        $adminsCount = Admin::select()->count();

        return view('admins.index', compact('productsCount', 'ordersCount', 'bookingsCount', 'adminsCount'));
    }

    public function displayAllAdmins() {

        $allAdmins = Admin::select()->orderBy('id', 'desc')->get();

        return view('admins.alladmins', compact('allAdmins'));
    }

    public function createAdmins() {

        return view('admins.createadmins');
    }

    public function storeAdmins(Request $request) {

        Request()->validate([
            "name" => "required|max:40",
            "email" => "required|max:40",
            "password" => "required|max:40",
        ]);

        $storeAdmins = Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        if($storeAdmins) {
            return Redirect::route('all.admins')->with( ['success' => "admin created successfully"] );

        }
    }

    public function displayAllOrders() {

        $allOrders = Order::select()->orderBy('id', 'desc')->get();

        return view('admins.allorders', compact('allOrders'));
    }

    public function editOrders($id) {

        $order = Order::find($id);

        return view('admins.editorders', compact('order'));
    }

    public function UpdateOrders(Request $request, $id) {

        $order = Order::find($id);

        $order->update(($request->all()));

        if($order) {
            return Redirect::route('all.orders')->with( ['update' => "order status updated successfully"] );
        }
    }

    public function deleteOrders($id) {

        $order = Order::find($id);

        $order->delete();

        if($order) {
            return Redirect::route('all.orders')->with( ['delete' => "order status deleted successfully"] );
        }
    }

    public function displayProducts() {

        $products = Product::select()->orderBy('id', 'desc')->get();

        return view('admins.allproducts', compact('products'));
    }

    public function createProducts() {

        return view('admins.createproducts');
    }

    public function storeProducts(Request $request) {

        $destinationPath = 'assets/images/';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path($destinationPath), $imageName);
        }

        $storeProducts = Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "image" => $imageName, // Lưu tên của hình ảnh vào cơ sở dữ liệu
            "description" => $request->description,
            "type" => $request->type,
        ]);

        if ($storeProducts) {
            return redirect()->route('all.products')->with('success', 'Product created successfully');
        }
    }

    public function deleteProducts($id) {

        $product = Product::find($id);

        if(File::exists(public_path('assets/images/' . $product->image))){
            File::delete(public_path('assets/images/' . $product->image));
        }else{
            //dd('File does not exists.');
        }

        $product->delete();

        if($product) {
            return Redirect::route('all.products')->with( ['delete' => "product deleted successfully"] );
        }
    }

    public function displayBookings() {

        $bookings = Booking::select()->orderBy('id', 'desc')->get();

        return view('admins.allbookings', compact('bookings'));
    }

    public function editBooking($id) {

        $booking = Booking::find($id);

        return view('admins.editbooking', compact('booking'));
    }

    public function UpdateBooking(Request $request, $id) {

        $booking = Booking::find($id);

        $booking->update(($request->all()));

        if($booking) {
            return Redirect::route('all.bookings')->with( ['update' => "booking status updated successfully"] );
        }
    }

    public function deleteBooking($id) {

        $booking = Booking::find($id);

        $booking->delete();

        if($booking) {
            return Redirect::route('all.bookings')->with( ['delete' => "booking deleted successfully"] );
        }
    }
}
