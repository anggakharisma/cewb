<?php

namespace App\Http\Controllers;

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
		$cartItem['quantity'] = 1;
		$cartItem['attributes']['imagePath'] = request()->image_path;


		\Cart::add($cartItem);

		return redirect()->back()->with("message", "Item added to cart");
	}
}
