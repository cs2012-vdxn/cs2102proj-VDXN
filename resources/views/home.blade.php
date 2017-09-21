@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to your dashboard, <b>{{ Auth::user()->name }}</b>.
                    <br/><br/>
                    You joined us on <b>{{ Auth::user() -> created_at }}</b> and
                    your registered email is <b>{{ Auth::user() -> email }}</b>.
                    <br/><br/>

                    <h3><b>Add a task:</b></h3>
                    <form action="/home/add_task" method="POST">
                        <input type="text" name="task_title" value="" placeholder="Enter task title" />
                        <input type="text" name="task_description" value="" placeholder="Enter task description" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="submit" />
                    </form>
                    <br/>

                    <h3><b>Here are the tasks for today:</b></h3>
                    @foreach($tasks as $task)
                        <table class="table">
                            <tr>
                                <td class="col-xs-3 col-md-3"><b>Title</td>
                                <td>{{ $task->title }}</td>
                            </tr>
                            <tr>
                                <td class="col-xs-3 col-md-3"><b>Description</b></td>
                                <td>{{ $task->description }}</td>
                            </tr>
                            <tr>
                                <td class="col-xs-3 col-md-3"><b>Created on</b></td>
                                <td>{{ $task->created_at }}</td>
                            </tr>
                            <tr>
                                <td class="col-xs-3 col-md-3"><b>Updated on</b></td>
                                <td>{{ $task->updated_at }}</td>
                            </tr>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
