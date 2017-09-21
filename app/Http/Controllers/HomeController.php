<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $tasksTable = NULL;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->tasksTable = DB::table('tasks');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->tasksTable->get();
        return view('home', ['tasks' => $tasks]);
    }

    /**
     * Add a task to the Tasks table
     *
     * @return \Illuminate\Http\Response
     */
    public function addTask()
    {
        $input = Input::only('task_title', 'task_description');
        $title = $input['task_title'];
        $description = $input['task_description'];

        $row = array('title'=>$title, 'description'=>$description, 'created_at'=>date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s"));
        $this->tasksTable->insert($row);
        $tasks = $this->tasksTable->get();
        return view('home', ['tasks' => $tasks]);
    }
}
