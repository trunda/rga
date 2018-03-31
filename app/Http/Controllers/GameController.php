<?php

namespace Game\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function index()
    {
        if (request()->has('reset')) {
            session()->forget('step');
        }
        $step = session()->get('step', 0);
        if (request()->has('step')) {
            $step = request()->get('step');
        }

        return view('steps.' . $step . '_step');
    }

    public function move(Request $request)
    {
        $codes = [
            '#nauuuu',
            'vlak',
            'domremy',
            'bazilika',
            'orleans',
            'compiegne',
            'rouen',
        ];

        $step = (int) $request->get('step', -1);
        $code = $codes[$request->get('step', 20)];

        if ($code === Str::lower(Str::ascii($request->get('code', '')))) {
            session()->put('step', $step + 1);
            return redirect('/#top');
        } else {
            session()->flash('nope', 'Lásko, zkus to znova. Opravdu je toto na kratičce, kterou jsi našla? Já vím, že ty to dáš.');
        }

        return redirect('/#form');
    }
}