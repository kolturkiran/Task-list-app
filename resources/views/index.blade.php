@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')

    @if(count($tasks))
        @foreach ($tasks as $task)
        <div>            
            <a href="{{route('tasks.show', ['task' => $task->id]) }}">{{ $task->title}}</a>
        </div>
        @endforeach
    @else
        <div>There are no tasks!</div>
    @endif    
    <a href="{{ route('tasks.create') }}" style="color:green">New Task</a>
    <nav>        
        {{$tasks->links()}}
    </nav>
@endsection