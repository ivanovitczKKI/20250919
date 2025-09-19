<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function example(Request $request, $id)
	{
		$type = $request->type;
		// return 'ini adalah index dengan id ' . $id . ' dan type ' . $type;
		// dd($id);
		return view('example', [
			'id' => $id,
			'type' => $type
		]);
	}
}
