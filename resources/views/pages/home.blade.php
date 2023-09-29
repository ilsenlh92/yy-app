
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
         <!--====== CARDS PART START ======-->
         @include('includes.cards')
         <!--====== CARDS PART ENDS ======-->

        {{--   <!--====== ABOUT PART START ======-->
        @include('includes.about')

        <!--====== ABOUT PART ENDS ======-->--}}


        <!--====== PRICING PART START ======-->

        @include('includes.prices')

        <!--====== PRICING PART ENDS ======-->

    {{--   <!--====== CONTACT PART START ======-->

        @include('includes.contact')

        <!--====== CONTACT PART ENDS ======--> --}}
    @endsection
