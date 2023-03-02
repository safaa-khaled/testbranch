<?php

namespace App\Http\Controllers;

use App\Models\Incoming;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Inside;
use App\Models\Outgoing;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $type= Inside::create([
            'inside_org'=>'test inside',
        ]);
        $transaction= new Transaction();
        $transaction->subject="test subject";
        
        $transaction->type()->associate($type);
        $transaction->save();

        $type2= Incoming::create([
            'incoming_org'=>'test incoming',
        ]);
        $transaction2= new Transaction();
        $transaction2->subject="test 2";
        
        $transaction2->type()->associate($type2);
        $transaction2->save();

        $type3= Outgoing::create([
            'outgoing_org'=>'test outgoing',
        ]);
        $transaction3= new Transaction();
        $transaction3->subject="test 3";
        
        $transaction3->type()->associate($type3);
        $transaction3->save();
*/

        dd(Transaction::where('type_type','=','App\Models\Inside')->get());

        //return Transaction::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
