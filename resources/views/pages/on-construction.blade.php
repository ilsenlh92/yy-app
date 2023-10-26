@section('styles')
    @parent
    <style>
        h2{
            text-align: center;
        }
    </style>
@endsection

@extends('template/layout')
    @section('navbar')
        @parent

@endsection
@section('content')
    <div class="container pt-120">
        <div class="row justify-content-center mb-120">
            <div class="col-12 col-lg-6 widget-wrap populated">        
                <img src="{{asset('images/OIG.webp')}}" alt="on construction">
                <h2>{{__('layout.on-construction')}}</h2>
            </div>
        </div><!-- row -->
    </div>

@endsection
