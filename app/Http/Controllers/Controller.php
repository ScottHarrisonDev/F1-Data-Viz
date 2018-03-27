<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Circuit;
use App\Nation;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $components = [];

        $components['circuits']['mostPopular'] = json_decode(Circuit::mostPopular());
        foreach($components['circuits']['mostPopular'] as $circuit) {
            $circuit->details = Circuit::getDetails($circuit->id)->toArray();
        }

        $components['nations']['mostSuccessful'] = json_decode(Nation::mostSuccessful());

        return view('index', ['components' => $components]);
    }
}
