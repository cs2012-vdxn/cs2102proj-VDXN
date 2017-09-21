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

                    Welcome to your dashboard, {{ Auth::user()->name }}.
                    You joined us at {{ Auth::user() -> created_at }}.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
