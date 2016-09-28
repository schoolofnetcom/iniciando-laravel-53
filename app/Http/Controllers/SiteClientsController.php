<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteClientsController extends Controller
{
    public function create(){
        return view('site.client');
    }

    public function store(Request $request) {
        return $request->get('value');
    }
}
