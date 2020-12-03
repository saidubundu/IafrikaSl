<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutResource;
use App\Models\About;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    //
    public function index()
    {
        $about = About::findOrFail(1);
        return Inertia::render('Index', [
            'about' => new AboutResource($about)
        ]);
    }
}
