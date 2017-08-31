<?php

namespace DataInsight\Http\Controllers\Frontend;

use DataInsight\DataSystem\EventModel\AttributeType;
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
}
