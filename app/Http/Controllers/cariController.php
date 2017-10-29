<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;


class cariController extends Controller
{

	public function search(Request $ request)
	{
		$query = $request->get ('q');
		$hasil = pesawat::where('asalPesawat','LIKE','%'.$query.'%')->paginate(10);

		return view('result',compact('hasil','query'));
	}
}