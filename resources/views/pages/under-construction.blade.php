@section('styles')
    @parent
    <style>
        h2{
            text-align: center;
        }
        .progress{
            justify-content: center;
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
                <img src="{{asset('images/OIG.webp')}}" alt="Window Service Corp under construction">
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
    Failed to generate a response due to server error.    <script type="text/javascript">
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
            progress.style.backgroundColor = `#ff9946`
        }
    
        setInterval(progressLoad,70)
    </script>
@endsection