<?php

namespace MIDASHI\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * トップ画面アクション
     */
    public function index()
    {
        return view('public.index');
    }
}
