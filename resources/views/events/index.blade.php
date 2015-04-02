@extends('app')

@section('content')
    <div class="container">
        {{-- на отсутствующие данные - не обязательно, но рекомендуется делать отдельные шаблоны --}}
        {{-- потому что, в целом логика на if-ах, если она в шаблонах - это зло --}}
        {{-- или делать шаблон-компонент, который по if-ам будет подключать другие шаблоны, компромиссный вариант --}}
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