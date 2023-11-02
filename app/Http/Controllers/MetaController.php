<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetaController extends Controller
{
    public function dataPrivacyIndex()
    {
        return view('data-privacy');
    }

    public function imprintIndex()
    {
        return view('imprint');
    }
}
