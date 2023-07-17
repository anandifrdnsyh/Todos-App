@extends('Layouts.app')

@section('title')
Detail Todos : {{ $todo->name}}
@endsection

@section('content')
     <h1 class="text-center my-5">
                {{ $todo->name }}
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Detail
                    </div>
                    <div class="card-body">
                        {{ $todo->description }}
                    </div>
                    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info"> Edit </a>
                    <br>
                    <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger"> Delete </a>
               </div>
            </div>
        </div>
@endsection
