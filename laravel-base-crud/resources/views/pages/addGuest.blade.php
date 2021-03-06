@extends('layouts.main-layout')

     @section('content')
          <main>
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div>
               @endif
               <form method="POST" action="{{ route('storeGuest') }}">
               @csrf
               @method('POST')
                    <input type="text" name="name"placeholder="Guest name">
                    <input type="text" name="lastname" placeholder="Guest lastname">
                    <input type="date" name="date_of_birth" placeholder="date">
                    <input type="text" name="document_type "placeholder="document_type">
                    <input type="text" name="document_number"placeholder="document_number">
                    <input type="submit" placeholder="CREATE">
               </form>
          </main>
     @endsection