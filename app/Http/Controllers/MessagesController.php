<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function submitOffer(Request $request){
        $this->validate($request, [
            'Company_name' => 'required',
            'country' => 'required',
            'slogan' => 'required',
            'region' => 'required',
            'slogan' => 'required',
            'starts_in' => 'required',
            'period' => 'required',
            'slogan' => 'required',
            'ends_in' => 'required',
            'valid_period' => 'required'
        ]);
        /*$user = DB::select('insert into user where user_id=?', [123431]);*/

        /*return $user[0]->fullname;*/

        return redirect('/')->with('success','Offer published successfully');
    }
}
