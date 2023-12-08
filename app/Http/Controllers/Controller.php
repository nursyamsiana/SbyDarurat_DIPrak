<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function lapor()
    {
        return view('vita.lapor');
    }

    public function lapor1()
    {
        return view('are.lapor1');
    }

    public function lapor2()
    {
        return view('are.lapor2');
    }
    public function lapor3up1()
    {
        return view('hana.lapor3_upload');
    }

    public function lapor3up2()
    {
        return view('uswa.lapor3_upload2');
    }

    public function lapor4()
    {
        return view('nana.lapor4');
    }

    public function statusVerif()
    {
        return view('uswa.status_verif');
    }

    public function verif()
    {
        return view('nana.verif');
    }
}