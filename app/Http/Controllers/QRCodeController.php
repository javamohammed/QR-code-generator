<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    //

    public function index(){
        return \view("index");
    }
    public function generate_QRCode(Request $request){
        /*
        //if you want to create a image with your text
            \QrCode::size(500)
                ->format('png')
                ->generate('Mohammed Aoulad Bouchta', public_path('images/qrcode.png'));
        */
        $request->validate([
            'your_text' => 'required',
        ]);
        $your_text = $request->input('your_text');
        
        return \Redirect::route('home')->with('your_text' , $your_text);
    }
}
