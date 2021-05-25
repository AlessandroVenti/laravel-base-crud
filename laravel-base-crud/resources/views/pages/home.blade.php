@extends('layouts.main-layout')
@section('content')
     <main>
          <ul>
               @foreach ($ospiti as $ospite)
                    <li>
                         <a href="{{ route('guest', $ospite -> id) }}">
                              <strong>{{ $ospite -> name }}  {{ $ospite -> lastname }}</strong>
                         </a>
                    </li>
               @endforeach
          </ul>
     </main>
@endsection