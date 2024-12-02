@extends('layouts.app')

@section('title', 'The List Of Task')

@section('content')
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}">
                {{ $task->title }}
            </a>
        </div>
    @empty
        <div>
            There are No Tasks
        </div>
    @endforelse
@endsection
