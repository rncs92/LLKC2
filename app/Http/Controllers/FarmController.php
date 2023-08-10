<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\FarmRequest;
use App\Models\Farm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FarmController extends Controller
{
    public function create(): View
    {
        if (!Auth::User()) {
            return view('auth.login');
        }

        return view('farms');
    }

    public function store(FarmRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        $user = Auth::user();
        $farm = new Farm([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'website' => $validatedData['website'],
        ]);

        $user->farms()->save($farm);

        return redirect('/dashboard');
    }
}
