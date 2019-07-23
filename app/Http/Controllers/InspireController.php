<?php

namespace App\Http\Controllers;

class InspireController extends Controller
{
    /**
     * Inspire index.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $inspire = \Illuminate\Foundation\Inspiring::quote();

        return response()->json($inspire);
    }
}
