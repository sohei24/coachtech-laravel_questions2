<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function add()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $this->validate($request, Inquiry::$rules);
        $form = $request->all();
        Inquiry::create($form);
        return view('thanks');
    }
}

