<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProgramsRequest;
use Symfony\Component\HttpFoundation\Response;
use DB;

class ProgramsController extends Controller
{
    /* Display a listing of the resource*/
    public function index()
    {
        $programs = Programs::all();

        return view('programs.index')->with('programs', $programs);
    }

    /*Show the form for creating a new resource */
    public function create()
    {
        return view('programs.create');
    }

    /* Store a newly created resource in storage*/
    public function store(StoreProgramsRequest $request)
    {
        $input = $request->all();
        Programs::create($input);
        return redirect('programs');  
    }

    /* Display the specified resource*/
    public function show($id)
    {
        $programs = Programs::find($id);
        return view('programs.show')->with('programs', $programs);
    }

    /*Show the form for editing the specified resource.*/
    public function edit($id)
    {
        $programs = Programs::find($id);
        return view('programs.edit')->with('programs', $programs);
    }

    /* Update the specified resource in storage*/
    public function update(Request $request, $id)
    {
        $programs = Programs::find($id);
        $input = $request->all();
        $programs->update($input);
        return redirect('programs');
    }

    /*Remove the specified resource from storage.*/
    public function destroy($id)
    {
        Programs::destroy($id);
        return redirect('programs');  
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $programs = DB::table('programs')->where('code', 'description', '%'.$search.'%')->paginate(5);
        return view('programs.index')->with('programs', $programs);

    }
}