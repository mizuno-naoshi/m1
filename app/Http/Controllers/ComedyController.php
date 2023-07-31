<?php

namespace App\Http\Controllers;

use App\Models\Comedy;
use Illuminate\Http\Request;

class ComedyController extends Controller
{
    public function index(Comedy $comedy)
    {
        return view('comedies.index')->with(['comedies' => $comedy->get()]);
    }
    
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Comedy::query();

        if(!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('script', 'LIKE', "%{$keyword}%");
        }

        $comedies = $query->get();

        return view('comedies.index', compact('comedies', 'keyword'));
    }

    public function show(Comedy $comedy)
    {
        return view('comedies.show')->with(['comedy' => $comedy]);
    }
}