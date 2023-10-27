{{--
    Esta pagina funciona lo mismo para trailers que para foodtrucks para los cuales tiene la misma estructura, 
    los elementos se cargan segun la ruta desde la que se llama
--}}
@extends('template/layout')
    @section('navbar')
        @parent
        <!--====== HEADER PART START ======-->
        @include('includes.header')
        <!--====== HEADER PART ENDS ======-->
    @endsection
    @section('content')
        <!--====== INFO PART START ======-->
        @include('includes.foodtrucks-trailers.description')
        <!--====== INFO PART ENDS ======-->
         <!--====== FOODTRUCKS or TRAILERS GALERY PART START ======-->
        @include('includes.full-galery')
        <!--====== FOODTRUCKS or TRAILERS GALERY PART ENDS ======-->
    @endsection
