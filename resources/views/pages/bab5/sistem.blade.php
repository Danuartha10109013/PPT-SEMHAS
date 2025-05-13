@extends('layout.main')

@section('title', 'BAB 5 || Sistem')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 5 || Sistem</h1>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p>1.	Login Page</p>
                    <img src="{{asset('loginpage.png')}}" width="80%" alt="">
                </div>
                <div class="col-md-6 mb-3">
                    <p>2.	 Landing Page</p>
                    <img src="{{asset('halutama.png')}}" width="80%" alt="">
                </div>
                <div class="col-md-6 mb-3">
                    <p>3.	Mapping Page</p>
                    <img src="{{asset('mapping.png')}}" width="80%" alt="">
                </div>
                <div class="col-md-6 mb-3">
                    <p>4.	Error Handling Page</p>
                    <img src="{{asset('error.png')}}" width="80%" alt="">
                </div>
                <div class="col-md-6 mb-3">
                    <p>5.	Form Check Page</p>
                    <img src="{{asset('formcheck.png')}}" width="80%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection