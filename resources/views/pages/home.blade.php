
@extends('template/layout')
    @section('navbar')
        @parent
        <!--====== HEADER PART START ======-->
        @include('includes.header')
        <!--====== HEADER PART ENDS ======-->
    @endsection
    @section('content')
        <!--====== ELEMENTS PART START ======-->
        @include('includes.elementS')
        <!--====== ELEMENTS PART ENDS ======-->
        <!--====== SERVICES PART START ======-->
        @include('includes.services')
        <!--====== SERVICES PART ENDS ======-->
        <!--====== SWIPER PART START ======-->
        @include('includes.swiper')
        <!--====== SWIPER PART ENDS ======-->
        <!--====== CARDS PART START ======-->
        @include('includes.cards')
        <!--====== CARDS PART ENDS ======-->
        <!--====== GALERY PART START ======-->
         @include('includes.galery')
        <!--====== GALERY PART ENDS ======-->
    @endsection
