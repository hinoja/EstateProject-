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
        $estates = Estate::latest()->with(['user'])->paginate(18);

        // dd($estates);
        return view('estates.index', [
            'estates' => $estates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {

        $locality = '%' . $request->locality . '%';
        $town = '%' . $request->town . '%';
        // $categorie = $request->price;

        if (!$request->locality
             && !$request->town
        ) {
            $estates = Estate::query()->latest()
                // ->with(['category'])
                ->paginate(12);

            return view('estates.index', [
                'estates' => $estates,
                // 'categories' => Category::query()->orderBy('name', 'asc')->get(),
            ]);
        } else {
            $estates = Estate::query()
                // ->when(
                //     $request->category_id,
                //     fn (Builder $query) => $query->where('category_id', $request->category_id)
                // )
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
                // 'categories' => Category::query()->orderBy('name', 'asc')->get(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
