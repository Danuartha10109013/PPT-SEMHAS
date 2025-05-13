@extends('layout.main')

@section('title', 'BAB 4 || Perancangan Antar Muka')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 4 || Perancangan Antar Muka</h1>
            <div class="row">
                <div class="col-md-6">
                    <p>1.	Login Page</p>
                    <img src="{{asset('login wire.jpg')}}" width="80%" alt="">
                </div>
                <div class="col-md-6">
                    <p>2.	 Landing Page</p>
                    <img src="{{asset('welcome wr.jpg')}}" width="80%" alt="">
                </div>
                <div class="col-md-6">
                    <p>3.	Mapping Page</p>
                    <img src="{{asset('Mapping wr.jpg')}}" width="80%" alt="">
                </div>
                <div class="col-md-6">
                    <p>4.	Error Handling Page</p>
                    <img src="{{asset('error wr.jpg')}}" width="80%" alt="">
                </div>
                <div class="col-md-6">
                    <p>5.	Form Check Page</p>
                    <img src="{{asset('dash wire.jpg')}}" width="80%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection