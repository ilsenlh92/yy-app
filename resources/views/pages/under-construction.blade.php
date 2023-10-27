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
                <h2>{{__('layout.under-construction')}}</h2>
                <div class="progress-wrapper mt-10">
                    <div class="progress"><span>0%</span></div>
                </div>
            </div>
        </div><!-- row -->
    </div>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        const progress = document.querySelector('.progress')
        const percentage = document.querySelector('.progress span')
    
        let per = 0;
        function progressLoad(){
            if(per>=80){
                progress.style.width = `80%`;
                percentage.innerHTML = "80%"
    
            }else{
                progress.style.width = `${per}%`;
                percentage.innerHTML = `${per}%`;
            }
            per++
    
        }
    
        setInterval(progressLoad,70)
    </script>
@endsection