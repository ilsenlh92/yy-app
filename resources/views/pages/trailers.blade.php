
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
         <!--====== FOODTRUCKS GALERY PART START ======-->
        @include('includes.full-galery')
        <!--====== FOODTRUCKS GALERY PART ENDS ======-->
        <!--====== CAROUSEL GALERY PART START ======-->
        @include('includes.foodtrucks-trailers.carousel')
        <!--====== CAROUSEL GALERY PART ENDS ======-->
    @endsection
