<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutResource;
use App\Models\About;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    //
    public function index()
    {
        $about = About::findOrFail(1);
        $ceo = About::findOrFail(2);
        return Inertia::render('About/Index', [
            'abouts' => new AboutResource($about),
            'founder' => new AboutResource($ceo),
        ]);
    }
}
