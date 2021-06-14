<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use Illuminate\Support\Facades\Hash;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request){
        $query= trim($request->get('search'));
        $sales=Sales::where ('date','LIKE', '%'. $query.'%')
        ->orderBy('id','asc')
       // ->get();
       ->simplePaginate(3);
        return view ('sales.index',['sales' => $sales, 'search'=>$query]);
    }}

   /* public function index(){
        $users = User::all();
        return view('usuarios.index',['users' => $users]);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sales = new Sales();

        $sales->code = request('code');
        $sales->date = request('date');
        $sales->client_id = request('client_id');
        $sales->product_id = request('product_id');
        $sales->total = request('total');

        $sales->save();

        return redirect('/sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('sales.show',['code'=> Sales::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('sales.edit',['code'=> Sales::findOrFail($id)]);
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
        $sales =Sales::findOrFail($id);

        $sales->code = $request->get('code');
        $sales->date = $request->get('date');
        $sales->client_id = $request->get('client_id');
        $sales->product_id = $request->get('product_id');
        $sales->total = $request->get('total');

        $sales->update();

        return redirect('/sales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);

        $sales->delete();
        return redirect('/sales');
    }
}

