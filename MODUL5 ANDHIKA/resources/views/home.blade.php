@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                <div class="row">
                    <div class="col-md-12">
                        <h1><b>Selamat Datang di Showroom Andhika</b></h1>
                        
                    </div>
                    <div class="col-md-12">
                        <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
                    </div>
                    @guest
                        @if (Route::has('login'))

                        @endif
                    @else
                    <div class="col-md-12 mt-3">
                        <a href="{{route('myCar')}}" class="btn btn-primary">My Car</a>
                    </div>
                    <div class="col-md-12 mt-3 pt-4">
                        <img src="asset/image/logo-ead.png" alt="">
                    </div>
                    @endguest
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('img/honda.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
