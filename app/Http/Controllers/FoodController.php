<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function cart()
    {
        return view('user.cart');
    }

    public function addToCart($id)
    {
        $food = Food::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "category" => $food->category_id,
                "name" => $food->name,
                "quantity" => 1,
                "price" => $food->price,
                "price_promotion" => $food->price,
                "image" => $food->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Food added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success', 'Food remove from cart!');
        }
    }

    public function checkout($id)
    {
        return view('user.checkout',compact('id'));
    }
}
