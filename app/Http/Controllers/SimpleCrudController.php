<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SimpleCrudController extends Controller
{
    //
    public function show() {
    	return view('SimpleCRUD.body');
    }

    public function process(\App\Http\Requests\SimpleCRUDRequest $request) {
        $validator = $request->validated();

        $name = $request->get('name');
        $mail = $request->get('mail');
        $date = $request->get('dateofbirth');
        $addr = $request->get('address');

        date_default_timezone_set("Asia/Jakarta");
        $filename = strtolower(strtok($name, " "))."-".date("dmYHis").".txt";

        $content = $name.",".$mail.",".$date.",".$addr;
        Storage::disk('public')->put($filename, $content);

        \DB::insert('insert into users (filename, name, email, date_of_birth, address) values (?, ?, ?, ?, ?)', [$filename, $name, $mail, $date, $addr]);

        return 'Terima kasih telah mengisi form';
    }

    public function get_details(String $file) {
        if ($file == null) {
            # code...
            return Redirect::to('/');
        }
        else {
            try {
                $content = Storage::disk('public')->get($file.".txt");
                $data = explode(",", $content);
                return view('SimpleCRUD.details')->with(['name'=>$data[0], 'mail'=>$data[1], 'date'=>$data[2], 'addr'=>$data[3]]);
            } catch (Exception $e) {
                return Redirect::to('/');
            }
        }
    }
}
