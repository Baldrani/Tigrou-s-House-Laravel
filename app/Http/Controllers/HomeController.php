<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Country;
use App\Models\City;
use App\Models\Formula;
use App\Models\Type;
use App\Models\Destinataire;
use Carbon\Carbon;
use Mail;

use Meta;

class HomeController extends Controller
{
    public function HomePage(){

        return view('pages.home')
            ->withTitle('Tigrou\'s House');
    }

    public function test()
    {

        $hour = date("h");
        $minute = date("i");
        $second = date("s");

        return view('test')
            ->withHeures($hour)
            ->withMinutes($minute)
            ->withSecondes($second)
            ->withTitle("Test");
    }
}
