<?php

namespace App\Http\Controllers;

use App\Http\Resources\PortfolioResource;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(6);
        return Inertia::render('Portfolio/Index', [
            'portfolios' => PortfolioResource::collection($portfolios)
        ]);
    }
}
