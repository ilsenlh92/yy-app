
@extends('template/layout')
    @section('navbar')
        @parent
        <!--====== HEADER PART START ======-->
        @include('includes.halfheader')
        <!--====== HEADER PART ENDS ======-->
    @endsection
    @section('content')
        <!--====== CARDS PART START ======-->
        @include('includes.cards')
        <!--====== CARDS PART ENDS ======-->
    @endsection