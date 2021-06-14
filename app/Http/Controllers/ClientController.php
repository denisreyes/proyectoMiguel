<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request){
        $query= trim($request->get('search'));
        $users= Client::where ('name','LIKE', '%'. $query.'%')
        ->orderBy('id','asc')

       // ->get();
       ->simplePaginate(3);
        return view ('client.index',['user' => $users, 'search'=>$query]);
    }}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Client();

        $cliente->name = request('name');
        $cliente->email = request('email');
        $cliente->phonenumber = request('phonenumber');

        $cliente->save();

        return redirect('/client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('client.show',['client'=> Client::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('client.edit',['client'=> Client::findOrFail($id)]);
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
        $cliente = Client::findOrFail($id);

        $cliente->name = $request->get('name');
        $cliente->email = $request->get('email');
        $cliente->phonenumber = $request->get('phonenumber');

        $cliente->update();

        return redirect('/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Client::findOrFail($id);

        $cliente->delete();
        return redirect('/client');
    }
}
