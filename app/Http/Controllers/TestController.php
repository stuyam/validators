<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\EmailFormRequest;
use App\Http\Requests\PhoneFormRequest;

class TestController extends Controller
{
    public function email(EmailFormRequest $request){
      return view('email');
    }

    public function phone(PhoneFormRequest $request){
      return view('email');
    }
}
