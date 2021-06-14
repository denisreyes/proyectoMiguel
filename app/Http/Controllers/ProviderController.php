<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if ($request) {
            $query= trim($request->get('search'));
            $providers= Provider::where('name', 'LIKE', '%'. $query.'%')
            ->orderBy('id', 'asc')
           // ->get();
           ->simplePaginate(3);
            return view('proveedores.index', ['providers' => $providers, 'search'=>$query]);
        }
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /** $validated = $request->validate([  //nota xd
       *     'name' => ['required', 'string', 'max:255'],
       *     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
       *     'password' => ['required', 'string', 'min:8', 'confirmed'],
       * ]);*/
        $provider = new Provider();
        $provider->name = request('name');
        $provider->phonenumber = request('phonenumber');
        $provider->email = request('email');

        $provider->save();

        return redirect('/proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('proveedores.show',['provider'=> Provider::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('proveedores.edit',['provider'=> Provider::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $provider = Provider::findOrFail($id);

        $provider->name = $request->get('name');
        $provider->phonenumber = $request->get('phonenumber');
        $provider->email = $request->get('email');
        $provider->update();

        return redirect('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $provider = Provider::findOrFail($id);

        $provider->delete($id);

        return redirect('/proveedores');
    }
}


