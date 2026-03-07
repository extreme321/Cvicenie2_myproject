<?php

namespace App\Http\Controllers;

use App\Services\TimeService;

class TimeRestController extends Controller
{
    private $timeService;

    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }

    public function getTime()
    {
        return response()->json([
            "current_time" => $this->timeService->getCurrentTime()
        ]);
    }
}
