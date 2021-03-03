<?php

namespace App\Http\Controllers;

use App\Category;
use App\Experience;
use App\Salary;
use App\Ubication;
use App\Vacant;
use Illuminate\Http\Request;

class VacantController extends Controller
{

    // Proteger metodos del controlador VacantController
    // 1.- Sesion iniciada
    // 2.- Correo verificado

    public function __construct()
    {
        // Revisar que el usuario este autenticado y verificado
        $this->middleware(['auth', 'verified']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vacants.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        // categories
        $categories = Category::all();

        // experiences
        $experiences = Experience::all();

        // ubications
        $ubications = Ubication::all();

        // salaries
        $salaries = Salary::all();

        // View create vacants
        return view('vacants.create')
            ->with('categories', $categories)
            ->with('experiences', $experiences)
            ->with('ubications', $ubications)
            ->with('salaries', $salaries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function show(Vacant $vacant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacant $vacant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacant $vacant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacant $vacant)
    {
        //
    }


    public function image(Request $request)
    {
        $image = $request->file('file');
    }


}
