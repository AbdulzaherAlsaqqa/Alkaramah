<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = City::paginate(4);
        // Storing data in the cache
        Cache::put('city1', $data, 60);

// Retrieving data from the cache
        if (Cache::has('city1')) {
            $data = Cache::get('city1');
        } else {
            // Data not found in the cache, fetch it from the original source and cache it.
            $data = City::paginate(4);
            Cache::put('city1', $data, 60);
        }
        return view('admins.cities.index', ['cities' => $data]);

        //        $cities = City::paginate(4);
        //        return view('admins.cities.index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('admins.cities.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateCity = Validator::make(
            $request->all(),
            [
                'name' => "required|string",
                'country' => "required|string",
            ]
        );
        if ($validateCity->fails()) {
            return dd($validateCity->errors());
        } else {
            City::create($request->all());
            // Hotel::create($request->all());
            //PRG
            return Redirect::route('admins.cities.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        $city = City::find($id);
        return view('admins.cities.show', ['city' => $city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $city = City::find($id);
        return view('admins.cities.update', ['city' => $city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\City $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $cities = City::find($id);
        $validateCity = Validator::make(
            $request->all(),
            [
                'id' => "integer|exists:cities,id",
                'name' => "required|string",
                'country' => "required|string",
            ]
        );
        if ($validateCity->fails()) {
            return dd($validateCity->errors());
        } else {
            $cities->update($request->all());
            return Redirect::route('admins.cities.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        City::find($id);
        City::destroy($id);
        return Redirect::route('admins.cities.index');
    }
}
