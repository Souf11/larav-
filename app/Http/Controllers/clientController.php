<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $listOfClients = Client::paginate(5);
        return view('clients', compact('listOfClients'));
    }
    public function show(Request $request)
{
    $idClient = $request->id;
    $selectedClient = Client::find($idClient);
    return view('showClient', compact('selectedClient'));
}
public function store(Request $request)
{
    $client = new Client;
    $client->firstName = $request->input('firstName');
    $client->lastName = $request->input('lastName');
    $client->email = $request->input('email');
    $client->password = $request->input('password');
    $client->city_id = $request->input('cities');
    
    $client->save();
    
    return redirect('/clients')->with('successMsg', 'Client created successfully');
}


}
