<?php

namespace App\Http\Controllers;

use App\Model\offers;
use App\User;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class CrudController extends Controller
{

    public function create(){

       return view("Cruds.create");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // make validate by get all request and validate it
        $validated = $request->validate([
            'name'=>'required |max:20|unique:offers,name',
            'price'=>'required',
            'details'=>'required',
        ]);
        //here the message who will viewed on the form
        if ($validated->fails()){

            return redirect()->back()->withErrors($validated)->withInput($request->all());

        }

        $post=new offers();
        $post->name=$request->name;
        $post->price=$request->price;
        $post->details=$request->details;
        $post->save();
        return redirect()->back();
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
