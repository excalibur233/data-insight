<?php

namespace App\Http\Controllers\Data;

use App\Http\Requests\Data\Event\CountTimesRequest;
use App\Models\Data\Event\DataEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class EventController
 * @package App\Http\Controllers\Data
 */
class EventController extends Controller
{
    /**
     * @param CountTimesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function countTimes(CountTimesRequest $request)
    {
        return response()->json([
            'status' => 'success',
            'data' => [
                'count-times' => DataEvent::whereDataEventTypeId($request->input('event_type_id'))
                    ->whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')])
                    ->count()
            ]
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function countUsers(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'data' => [
                'count-users' => DataEvent::whereDataEventTypeId($request->input('event_type_id'))
                    ->whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')])
                    ->pluck('user_id')->count()
            ]
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function avgUsers(Request $request)
    {
        $countUsers = DataEvent::whereDataEventTypeId($request->input('event_type_id'))
            ->whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')])
            ->pluck('user_id')->count();
        $countTimes = DataEvent::whereDataEventTypeId($request->input('event_type_id'))
            ->whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')])
            ->count();
        return response()->json([
            'status' => 'success',
            'data' => [
                'count-users' => $countTimes / $countUsers
            ]
        ]);
    }


}
