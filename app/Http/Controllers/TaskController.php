<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $tasksPerPage = 10;
    protected $numberOfPreviousAndNextTasks = 2;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->get('page');

        $limit = $this->tasksPerPage + $this->numberOfPreviousAndNextTasks;
        $offset = $page * $this->tasksPerPage - $this->numberOfPreviousAndNextTasks;

        $tasks = Task::orderBy('id', 'asc')->offset($page > 1 ? $offset : 0)->limit($page > 1 ? $limit + $this->numberOfPreviousAndNextTasks : $limit)->get();

        foreach($tasks as $task){
            echo '<h5> ID: '. $task['id'] .'</h5>'.'<p>'. $task['description'] .'</p>';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
