@extends('layouts.main-layout')
@section('content')
     <main>
          <ul>
               <li>{{ $guest -> name }}  {{ $guest -> lastname }}</li>
               <li>{{ $guest -> date_of_birth }}</li>
               <li>{{ $guest -> document_type }}</li>
               <li>{{ $guest -> document_number }}</li>

          </ul>
     </main>
@endsection