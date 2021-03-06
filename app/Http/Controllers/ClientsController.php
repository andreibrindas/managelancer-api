<?php

namespace App\Http\Controllers;

use App\User; 
use App\Client; 
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('clients.index', ['user' => $user]);
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));    
    }

    public function create()  
    {
        return view('clients.create');
    }

    public function store()
    {
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required',
        ]);

        auth()->user()->clients()->create($data);
        
        // dd(request()->all());

        // to be modified with the individual client view
        return redirect('/clients');
    }
}
