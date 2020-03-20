<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Order;

class OrderController extends Controller
{
    //
	public function submit(OrderRequest $req)
	{
		$order = new Order();
		$order->status = $req->input('status');
		$order->client_email = $req->input('email');
		$order->partner_id = $req->input('partner');
		$order->save();
		
		return redirect()->route('home')->with('success', 'Заказ добавлен');
		//$validation = $req->validate([
									//'email' => 'required|email'
								//	]);
		//dd($req->input('email'));
	}
}
