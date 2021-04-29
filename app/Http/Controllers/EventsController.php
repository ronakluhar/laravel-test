<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;
use App\Http\Resources\EventResource;

class EventsController extends BaseController
{
	 public function getWarmupEvents() {
    	$events = Event::all();
    	$events_data = EventResource::collection( $events );
        return \Response::json([
            'data' => $events_data,
            'message' => "Success"
        ], 200);

       // throw new \Exception('implement in coding task 1');
    }

    public function getEventsWithWorkshops() {
    	$events = Event::all();
    	$events_data = EventResource::collection( $events );
        return \Response::json([
            'data' => $events_data,
            'message' => "Success"
        ], 200);

       // throw new \Exception('implement in coding task 1');
    }

    public function getFutureEventsWithWorkshops() {

    	$events = Event::all();
    	$events_data = EventResource::collection( $events );
        return \Response::json([
            'data' => $events_data,
            'message' => "Success"
        ], 200);
        //throw new \Exception('implement in coding task 2');
    }
}
