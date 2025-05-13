@extends('layout.main')

@section('title', 'BAB 4 || Sequence Diagram')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 4 || Sequence Diagram</h1>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p>1.	Sequence Diagram Mengelola Mapping</p>
                    <img src="{{asset('seq-mapping.jpg')}}" width="30%" alt="">
                </div> 
                <div class="col-md-6 mb-3">
                    <p>2.	Sequence Diagram Mengelola Form Checklist</p>
                    <img src="{{asset('seq-form-check.jpg')}}" width="30%" alt="">

                </div>
                <div class="col-md-6 mb-3">
                    <p>3.	Sequence Diagram Mengelola Checklist Response</p>
                    <img src="{{asset('seq-form-check-r.jpg')}}" width="30%" alt="">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection