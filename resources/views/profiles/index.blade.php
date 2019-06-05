@extends('layouts.app')

@section('content')
<p>Bienvenido usuario <span>{{ Auth::user()->name }}</span> </p>
@endsection