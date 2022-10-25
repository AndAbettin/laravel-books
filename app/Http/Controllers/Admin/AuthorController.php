<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AuthorController extends Controller
{
    public function index() 
    {
        $results = DB::select("
        SELECT *
        FROM `authors`
        LIMIT 10
        ");

        return view('Admin.authors', [
            'authors' => $results
        ]);
    }

    public function create()
    {
        return view('Admin.create-author.blade.php');
    }

}
