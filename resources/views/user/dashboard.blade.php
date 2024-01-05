@extends('layouts.app')
@section('content')
<section>
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __("USER DASHBOARD") }}</h1>
                    <p>{{$data}}</p>
            </div>
        </div>
    </div>
</section>
    
@endsection
