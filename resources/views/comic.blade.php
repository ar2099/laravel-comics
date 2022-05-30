@extends('layout.layout')

@section('titolo')
   DC COMICS
@endsection

@section('main')
   
@include('partials.small_blu')
@include('partials.menu_bianco')
@include('partials.main_titan')
@include('partials.main_comic')
@include('partials.footer_blu')
@include('partials.footer_grigio')
@include('partials.footer_finale')
@endsection