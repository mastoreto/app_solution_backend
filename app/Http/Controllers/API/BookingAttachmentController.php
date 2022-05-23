<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BookingAttachment;
use Illuminate\Http\Request;

class BookingAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request){
        
        $data = $request->all();

        if($request->user_id == null){
            return response()->json('error',200);
        }else{
            $result  =  BookingAttachment::updateOrCreate($request->all());

            if($result){
                return response()->json('success',200);
            }else{
                return response()->json('error',200);
            }

        }

        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookingAtachment  $bookingAtachment
     * @return \Illuminate\Http\Response
     */
    public function show(BookingAtachment $bookingAtachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookingAtachment  $bookingAtachment
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingAtachment $bookingAtachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookingAtachment  $bookingAtachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookingAtachment $bookingAtachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookingAtachment  $bookingAtachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingAtachment $bookingAtachment)
    {
        //
    }
}
