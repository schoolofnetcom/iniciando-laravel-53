<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientsController extends Controller
{
    public function create(){
        return view('admin.client.client');
    }

    public function store(Request $request) {
        return $request->get('value');
    }
}
