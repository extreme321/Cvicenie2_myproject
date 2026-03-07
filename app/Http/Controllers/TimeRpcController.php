<?php

namespace App\Http\Controllers;

use App\Services\TimeService;

class TimeRpcController extends Controller
{
    private $timeService;

    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }

    public function getTime()
    {
        return response(
            "Aktuálny čas je: " . $this->timeService->getCurrentTime(),
            200
        )->header('Content-Type', 'text/plain');
    }
}
