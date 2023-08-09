<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Farm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AnimalController extends Controller
{
    public function create(): View
    {
        if(!Auth::User()) {
           return view('auth.login');
        }

        $userId = Auth::user()->getAuthIdentifier();
        $farms = Farm::all()->where('user_id', $userId);

        return view('animals', compact('farms'));
    }

    public function store(Request $request): RedirectResponse
    {
        $farmId = $request['farm'];
        $farm = Farm::findOrFail($farmId);
        $animal = new Animal([
            'animal_number' => $request['number'],
            'type_name' => $request['type'],
            'years' => $request['years'],
        ]);

        $farm->animals()->save($animal);

        return Redirect::to('/dashboard');
    }
}
