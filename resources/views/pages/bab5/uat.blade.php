@extends('layout.main')

@section('title', 'BAB 5 || User Acceptance Testing')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 5 || User Acceptance Testing</h1>
            <p class="text text-justify">Hasil pengujian Black Box  yang telah dilakukan, menunjukkan bahwa Software yang dibangun telah memenuhi kebutuhan fungsional. Namun, pada prosesnya ada kemungkinan masih terjadi kesalahan maka dari itu diperlukan adanya User Acceptance Testing (UAT) untuk menguji Software yang dibangun sehingga telah sesuai dengan kebutuhan dan kenyamanan user.</p>
            <div class="row">
                <div class="col-md-6 text-right">
                    <img src="{{asset('uat1.jpg')}}" width="70%" alt="">
                </div>
                <div class="col-md-6 text-left">
                    <img src="{{asset('uat2.jpg')}}" width="70%" alt="">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection