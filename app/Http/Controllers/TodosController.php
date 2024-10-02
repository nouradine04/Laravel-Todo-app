<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $todos = Todo::orderBy('created_at', 'desc')->get();
        #dd($todos);

        return view('index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo= new Todo();
        $todo->name=$request->input('name');
        $todo->work=$request->input('work');
        $todo->duedate=$request->input('duedate');
        $todo->save();

        return redirect()->route('todo.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(todos $todos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todos)
    {
        $todo = Todo::findOrFail($id);
        if($todo){

            return view('todo.edit', compact('todo'));
        }
        return "<span> Tache non trouve</span>";
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todos $todos)
    {
        $todos = todos::findOrFail($id);
        if($todos){
            $todos->name = $request->input('name');
            $todos->age= $request->input('work');
            $todos->level= $request->input('datedue');
            $todos->save();
            return redirect()->route('todo.index');
        }

        return "Tache non trouve";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todos)
    {
        $todo = Todo::findOrFail($id);
        if($todo){
            $todo->delete();
            return redirect()->back();
        }
        return "utilisateur non trouve";
    }
}


