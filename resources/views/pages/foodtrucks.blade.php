
@extends('template/layout')
    @section('navbar')
        @parent
        <!--====== HEADER PART START ======-->
        @include('includes.header')
        <!--====== HEADER PART ENDS ======-->
    @endsection
    @section('content')
        <!--====== GALERY PART START ======-->
        @include('includes.foodtrucks.description')
        <!--====== CARDS PART ENDS ======-->
         <!--====== FOODTRUCKS GALERY PART START ======-->
        @include('includes.full-galery')
        <!--====== FOODTRUCKS GALERY PART ENDS ======-->
    @endsection
