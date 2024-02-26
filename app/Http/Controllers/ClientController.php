<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Client::all());
        return Inertia::render('Dashboard', [
            'clients' => Client::all(),
            'index' => true
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return Inertia::render('Client/CreateClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $clientRequest)
    {
        $data = $clientRequest->all();
        $client = Client::create($data);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        // dd($client);
        return Inertia::render('Dashboard', [
            'client' => $client,
            'index' => false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        Client::destroy($client);
        return redirect('/');
    }
}
