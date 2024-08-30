<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estates = Estate::latest()->with(['user'])->paginate(6);

        // dd($estates);
        return view('estates.index', [
            'estates' => $estates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {

        $locality = '%' . $request->locality . '%';
        $town = '%' . $request->town . '%';
        if (
            !$request->locality
            && !$request->town
        ) {
            $estates = Estate::query()->latest()
                ->paginate(6);

            return view('estates.index', [
                'estates' => $estates,
            ]);
        } else {
            $estates = Estate::query()
                ->when(
                    $request->town,
                    fn(Builder $query) => $query->Where('town', 'LIKE', $town)
                )
                ->when(
                    $request->locality,
                    fn(Builder $query) => $query->orWhere('location', 'LIKE', $locality)
                )

                ->orderByDesc('created_at');

            return view('estates.index', [
                'estates' => $estates->paginate(12),
            ]);
        }
    }
}
