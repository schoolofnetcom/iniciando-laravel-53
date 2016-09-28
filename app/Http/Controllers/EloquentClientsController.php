<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

use App\Http\Requests;

class EloquentClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('eloquent.index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return view('eloquent.create');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->create($request->all());

        return redirect()->route('eloquent.client.list');
    }
}
