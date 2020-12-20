<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class HedgeController extends Controller
{
	public function buy(){
		$url = "https://finnhub.io/api/v1/quote?symbol=";
		$apikey = "&token=bve1ac748v6qmf0gufcg";
		$test = file_get_contents($url . "AMZN" . $apikey);
		$test2 = json_decode($test);
		$thing = $test2->c;

		return view('hedge-purchase', ['thing' => $thing]);

	}

	public function submit_order(Request $request){
	//	$thing = "Test";
		$url = "https://finnhub.io/api/v1/quote?symbol=AMZN&token=bve1ac748v6qmf0gufcg";
		$getter = file_get_contents($url);
		$decoder = json_decode($getter);
		$price = $decoder->c;	
		$amount = $request->input("stock");
	//	$total = $price*$amount;
	//	$thing = ( "You have purchased " . $amount . " AMZN stock at $" . $price . " for a total of $" . $total);
		$total = $amount/$price;
		$thing = ( "You have purchased " . $total . " AMZN stock at $" . $price . " for a total of $" . $amount);
		return view('hedge-purchase', ['thing' => $thing]);



	}


	public function login(){
	
	return view('hedge-login');
	
	}

	public function register(){

		return view('hedge-register');
	
	}

}
