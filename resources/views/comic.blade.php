@extends('layout.layout')

@section('titolo')
   comic
@endsection

@section('main')
 @include('partials.small_blu')
@include('partials.menu_bianco')
@include('partials.main_titan') 

@include('partials.main_comic_single')

@include('partials.footer_blu_singolo')
@include('partials.footer_grigio')
@include('partials.footer_finale')

@endsection