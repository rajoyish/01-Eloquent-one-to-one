<?php

namespace App\Http\Controllers;

use App\Models\Phone;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('phones.index', ['phones' => $phones]);
    }
}
