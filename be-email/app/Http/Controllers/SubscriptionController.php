<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;


class SubscriptionController extends Controller
{
   
    
    public function index()
    {
        $subscription = Subscription::all();

        return response()->json($subscription);

    }
    
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscriptions,email|max:255',
        ]);
        
        $subscription = new Subscription;
        $subscription->name = $validator['name'];
        $subscription->email = $validator['email'];
        $subscription->save();
        
        
        return response()->json(['id' => $subscription->id]);
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
