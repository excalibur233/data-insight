<?php

namespace App\Http\Controllers\Data;

use App\Models\Data\Event\DataEventType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'data' => [
                'event-types' => DataEventType::all()->toArray()
            ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'status' => 'success',
            'data' => [
                'event-type' => DataEventType::find($id)->toArray()
            ]
        ]);
    }
}
