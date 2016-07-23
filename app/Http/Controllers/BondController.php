<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bond;

use App\Customer;
class BondController extends Controller
{
     //
	public function index()
    {
        //
        $bonds=Bond::all();
        return view('bonds.index',compact('bonds'));
    }

    public function show($id)
    {
        
        $bond = Bond::findOrFail($id);

        return view('bonds.show',compact('bond'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('bonds.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)   
    {

       $bond= new Bond($request->all());
       $bond->save();

              return redirect('bonds');
    }

    public function edit($id)
    {
        $bond=Bond::find($id);
        return view('bonds.edit',compact('bond'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $bond= new Bond($request->all());
        $bond=Bond::find($id);
        $bond->update($request->all());
        return redirect('bonds');
    }

    public function destroy($id)
    {
        Bond::find($id)->delete();
        return redirect('bonds');
    }
}
