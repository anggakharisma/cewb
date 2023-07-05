<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
	public function index()
	{
		return Inertia::render('Cart', [
			'cartItems' => \Cart::getContent()
		]);
	}

	public function addItemToCart()
	{
		$cartItem = request()->all();
		$cartItem['product']['quantity'] = 1;
		\Cart::add($cartItem);

		return redirect()->back()->with("message", "Item added to cart");
	}
}
