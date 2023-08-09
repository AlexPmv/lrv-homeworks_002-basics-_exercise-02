<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Todo::all();
        $result = '';

        foreach ($data as $item) {
            $result .= "id: $item->id | title: $item->title | description: $item->description | created at: $item->created_at <br>";
        }

        return $result;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            [
                'title' => 'to do 1',
                'description' => 'This is description'
            ],
            [
                'title' => 'to do 2',
                'description' => 'This is description for 2'
            ]
        ];

        foreach ($data as $item) {
            Todo::create($item);
        };

        return redirect('todo');
    }

    /**
     * Find a resource by id and pass it to 'show' method.
     */
    public function find(int $id)
    {
      return $this->show(Todo::find($id)); 
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
    public function show(Todo $todo)
    {
        return "id: $todo->id | title: $todo->title | description: $todo->description | created at: $todo->created_at <br>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
