<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SimpleCrudController extends Controller
{
    //
    public function show() {
    	return view('SimpleCRUD.form');
    }

    public function process(Request $request) {
    	$name = $request->input('name');
    	$mail = $request->input('mail');
    	$date = $request->input('dateofbirth');
    	$addr = $request->input('address');

    	date_default_timezone_set("Asia/Jakarta");
    	$filename = strtolower(strtok($name, " "))."-".date("dmYHis").".txt";

        $content = $name.",".$mail.",".$date.",".$addr;
        Storage::disk('public')->put($filename, $content);

    	return 'Terima kasih telah mengisi form';
    }
}
