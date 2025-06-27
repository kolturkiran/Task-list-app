@extends('layouts.app')

@section('title', @isset($task)?'Edit Task':'Add Task')
@section('content')
        <form action="{{isset($task) ? route('tasks.update', ['task'=>$task->id]) : route('tasks.store')}}" method="post">
            @csrf
            @if(isset($task))
                @method('PUT')
            @endif
            <label for="title">Task Title</label>
            <input type="text" name="title" id="title" value="{{$task->title ?? old('title')}}">
            @error('title')
                <p class=error-message>{{$message}}</p>
            @enderror
            <label for="description">Task Description</label>
            <textarea name="description" id="description">{{$task->description ?? old('description')}}</textarea>
            @error('description')
                <p class=error-message>{{$message}}</p>
            @enderror
            <label for="long_description">Task Long Description</label>
            <textarea name="long_description" id="long_description">{{$task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
                <p class=error-message>{{$message}}</p>
            @enderror
            <button type="submit">
                @if(isset($task))
                    Update Task
                @else
                    Add Task
                @endif
            </button>
        </form>
@endsection