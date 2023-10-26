
@extends('template/layout')
    @section('navbar')
        @parent
        <!--====== HEADER PART START ======-->
        @include('includes.header')
        <!--====== HEADER PART ENDS ======-->
    @endsection
    @section('content')
        <!--====== ELEMENTS PART START ======-->
        @include('includes.home.elements')
        <!--====== ELEMENTS PART ENDS ======-->
        <!--====== SERVICES PART START ======-->
        @include('includes.home.services')
        <!--====== SERVICES PART ENDS ======-->
        <!--====== SWIPER PART START ======-->
        @include('includes.swiper')
        <!--====== SWIPER PART ENDS ======-->
        <!--====== CARDS PART START ======-->
        @include('includes.home.cards')
        <!--====== CARDS PART ENDS ======-->
        <!--====== GALERY PART START ======-->
         @include('includes.home.galery')
        <!--====== GALERY PART ENDS ======-->
    @endsection
