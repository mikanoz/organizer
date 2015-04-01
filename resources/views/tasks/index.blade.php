@extends('app')

@section('content')
    <div class="container">
        @if ( !$tasks->count() )
            <p>У вас нет текущих задач!</p>
        @else
            <h2>Задачи</h2>
            <ul>
                @foreach ($tasks as $task)
                    <li><a href="{{ route('tasks.show', $task->slug) }}">{{ $task->name }}</a></li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection