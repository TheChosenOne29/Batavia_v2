<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CartController extends Controller
{
    public function shop()
    {
        $products = Menu::all();
        // dd($products);
        return view('user.shop')->withTitle('Batavia Restaurant & Cafe')->with(['products' => $products]);
    }

    public function index()
    {            
        $dataMenu1 = Menu::all()->where('category', 'light_bites');
        $dataMenu2 = Menu::all()->where('category', 'appetizer');
        $dataMenu3 = Menu::all()->where('category', 'main_course');
        $dataMenu4 = Menu::all()->where('category', 'desserts');
        $dataMenu5 = Menu::all()->where('category', 'drinks');

        return view('user.shop')->withTitle('Batavia Restaurant & Cafe')->with([
            'dataMenu1' => $dataMenu1,
            'dataMenu2' => $dataMenu2,
            'dataMenu3' => $dataMenu3,
            'dataMenu4' => $dataMenu4,
            'dataMenu5' => $dataMenu5
        ]);
    }

    public function cart()
    {
        $userId = auth()->user()->id;
        $cartCollection = \Cart::session($userId)->getContent();
        // dd($cartCollection);
        return view('user.cart')->withTitle('Batavia Restaurant & Cafe')->with(['cartCollection' => $cartCollection]);
    }

    public function add(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'desc' => $request->desc,
            'quantity' =>$request->quantity
        ]);

        return redirect()->route('cart.index')->with('success_msg', 'Item is added to cart!');
    }

    public function remove(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->remove($request->id);

        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->update($request->id,[
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ]
        ]);

        return redirect()->route('cart.index')->with('success_msg', 'Cart is updated!');
    }

    public function clear(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->clear();

        return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
    }

    public function checkout(Request $request)
    {
        $cartItems = Cart::getContent();
        $order = new Order();
        $order->cart = serialize($cartItems);
        $order->user_id = Auth::user()->id;
        $order->address_id = $request->input('address_id');
        $order->payment_id = $request->input('payment_id');
        $order->orderstatus_id = $request->input('orderstatus_id');
  
        Auth::user()->orders()->save($order);
        Cart::clear();
        return redirect()->route('ordersindex');
    }
}
