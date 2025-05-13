@extends('layout.main')

@section('title', 'BAB 4 || Activity Diagram')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 4 || Activity Diagram</h1>
            <div class="row">
                <div class="col-6 mb-3">
                    <p>1.	Activity Diagram Mengelola Mapping</p>
                    <img src="{{asset('act-mapping.jpg')}}" width="30%" alt="">
                </div>
                <div class="col-6 mb-3">
                    <p>2.	Activity Diagram Mengelola Form Checklist</p>
                    <img src="{{asset('act-form-check.jpg')}}" width="30%" alt="">
                </div>
                <div class="col-6 mb-3">
                    <p>3.	Activity Diagram Mengelola Checklist Response</p>
                    <img src="{{asset('act-form-check-res.jpg')}}" width="30%" alt="">
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection