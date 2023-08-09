<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FarmController extends Controller
{
    public function create(): View
    {
        return view('farms');
    }

    public function store(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $farm = new Farm([
            'name' => $request['name'],
            'email' => $request['email'],
            'website' => $request['website'],
        ]);

        $user->farms()->save($farm);

        return Redirect::to('/dashboard');
    }
}
