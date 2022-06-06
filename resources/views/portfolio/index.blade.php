@extends('layouts.base')

@section('content')

     @foreach($sites as $site)

         {{ $site->name }}
         {{ $site->url }}
         {{ $site->code }}
         <img src="{{ asset('storage/'.$site->image) }}" alt="{{ $site->name }}">

     @endforeach
@endsection
