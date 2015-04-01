@extends('app')

@section('content')
    <div class="container">
        @if ( !$events->count() )
            <p>У вас нет текущих мероприятий!</p>
        @else
            <h2>Мероприятия</h2>
            <ul>
                @foreach ($events as $event)
                    <li><a href="{{ route('events.show', $event->slug) }}">{{ $event->name }}</a></li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection