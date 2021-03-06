<?php

namespace App\Http\Controllers;

use App\User; 
use App\Client; 
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        //
        // $clients = auth()->user();
        $projects = auth()->user()->projects()->get();

        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $clients = Client::all();

        // dd(auth()->user()->clients()->projects());

        $clients = auth()->user()->clients()->get();
        $projects = [];
        
        foreach ($clients as $client) {
            // $client->projects();
            array_push($projects, $client->projects());
        }
        return view('projects.create', ['clients' => $clients, 'projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'project_name' => 'required',
            'project_description' => 'required',
            'project_description' => 'required',
            'company' => 'required',
            'project_price' => 'required',
        ]);

        $client = auth()->user()->clients()->projects()->create($data);
        
        // dd(request()->all());
        // dd(auth()->user());

        // to be modified with the individual client view
        // return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
