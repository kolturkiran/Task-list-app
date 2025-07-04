@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div>
        <p>
            {{$task->description}}
        </p>
        @if($task->long_description)
        <p>{{$task->long_description}}</p>
        @endif
        <p>{{$task->created_at}}</p>
        <p>{{$task->updated_at}}</p>
        <div>            
            <form action="{{ route('tasks.edit', ['task'=>$task->id])}}" method="GET">
                <button type="submit" style="color:blue">Edit Task</button>
            </form>
        </div>
        <div>
            <form action="{{ route('tasks.destroy', ['task'=>$task->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="color:red">Delete Task</button>
            </form>
        </div>
    </div>
@endsection