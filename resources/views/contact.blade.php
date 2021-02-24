@extends('layouts.app')

@section('title', 'contact')
@section('head')
<style>
    body{
        background: rgb(221, 26, 26);
    }
</style>
@endsection
@section('content')
    <div class="container">
        {{ request()->is('contact')? 'Contact' : '' }}
    </div>
@endsection()
