<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{   


    public function show(Todo $todo)
    {   
        return view('todo.view')->with('todoData',Todo::all());
    }

    public function destroy(Todo $todo,$id)
    {
        Todo::destroy('id',$id);

        return redirect('view');
    }

    public function add(Todo $todo)
    {   
        return view('todo.add');
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->name = $request->name;
        $todo->email = $request->email;
        $todo->save();
        
        $request->session()->flash('msg','Saved Successfully');

        return redirect('view');
    } 

    public function edit(Todo $todo,$id)
    {
        return view('todo.edit')->with('todoData',Todo::find($id));
    }

    public function update(Request $request, Todo $todo)
    {
        $todoID = $todo->find($request->input('id'));

        $todoID->name = $request->input('name');
        $todoID->email = $request->input('email');

        $todoID->save();

        $request->session()->flash('msg','Updated Successfully');

        return redirect('view');

    }

    

}
