<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class FarmController extends Controller
{
    public function index()
    {

    }

    public function create(Request $request): RedirectResponse
    {
        new Farm([
            'user_id' => Auth::user()->getAuthIdentifier(),
            'name' => $request['name'],
            'email' => $request['email'],
            'website' => $request['website'],
        ]);


        return Redirect::to('accounts');
    }
}
