<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tutorial()
    {
        $data['firstlist'] = [
            ['1', 'vak 1', 'YP0654','images/firstsem.png', '9', 'null', 'no','1'],
            ['2', 'vak 2', 'YP0654','images/firstsem.png', '9', 'null', 'no','1'],
        ];
        $data['secondlist'] = [
            ['3', 'vak 3', 'YP0654','images/firstsem.png', '9', 'null', 'no','1'],
            ['4', 'vak 4', 'YP0654','images/firstsem.png', '9', 'null', 'no','1'],
        ];
        $data['thirdlist'] = [
            ['5', 'vak 5', 'YP0654','images/firstsem.png', '9', 'null', 'no','1'],
            ['6', 'vak 6', 'YP0654','images/firstsem.png', '9', 'null', 'no','1'],
        ];

        return view('welcome', ['data' => $data]);
    }
}
