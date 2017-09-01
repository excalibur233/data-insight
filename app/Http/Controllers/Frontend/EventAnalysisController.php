<?php

namespace DataInsight\Http\Controllers\Frontend;

use Carbon\Carbon;
use DataInsight\DataSystem\EventModel\AttributeType;
use DataInsight\DataSystem\EventModel\Event;
use DataInsight\DataSystem\EventModel\EventType;
use Illuminate\Http\Request;
use DataInsight\Http\Controllers\Controller;

class EventAnalysisController extends Controller
{
    public function eventList()
    {
        return EventType::all()->toJson();
    }

    public function attributeList()
    {
        return AttributeType::all()->toJson();
    }

    public function queryEventCount(Request $request)
    {
        $begin = $request->input('begin', Carbon::now()->subMonth()->toDateString());
        $end = $request->input('end', Carbon::now());
        $interval = $request->input('interval', 'day');

        return Event::queryCountPeriod($begin, $end, $interval);
    }
}
