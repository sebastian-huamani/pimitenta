<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Models\Poscast;
use Illuminate\Http\Request;
use Faker\Generator;
use Illuminate\Container\Container;

class PoscastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        \Log::info("start");
        $faker = Container::getInstance()->make(Generator::class);

        $poscast = [];
        for ($i=0; $i < 100; $i++) { 
            $poscast[] = [
                'name' => $faker->word(),
                'duration' => 2.54,
                'description' => $faker->sentence()
            ];
        }

        $data_list = array_chunk($poscast, 2, true);

        return ($data_list[0]);
        
        // foreach ($data_list as $key =>  $data) {
        //     \Log::error($key . 'proceso ==========' );
        //     ProcessPodcast::dispatch($data);
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Poscast $poscast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poscast $poscast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poscast $poscast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poscast $poscast)
    {
        //
    }
}