@extends('layouts.app')

@section('title', 'The List Of Task')

@section('content')
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                {{ $task->title }}
            </a>
        </div>
    @empty
        <div>
            There are No Tasks
        </div>
    @endforelse
@endsection
