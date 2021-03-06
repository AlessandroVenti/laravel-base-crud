@extends('layouts.main-layout')
@section('content')
     <main>
          <ul class="homeLayout">
               @foreach ($ospiti as $ospite)
                    <li>
                         <a href="{{ route('guest', $ospite -> id) }}">
                              <strong>{{ $ospite -> name }}  {{ $ospite -> lastname }}</strong>
                         </a>
                    </li>
               @endforeach
          </ul>
          <div class="button">
               <button>
                    <a href="{{ route('addGuest') }}">
                         Add a new Guest
                    </a>
               </button>
          </div>
     </main>
@endsection