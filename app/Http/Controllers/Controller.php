<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): View
    {
        return view('dashboard');
    }

    public function show(): View
    {
        $userId = Auth::user()->getAuthIdentifier();
        $farms = Farm::all()->where('user_id', $userId);

        return view('dashboard', compact('farms'));
    }
}
