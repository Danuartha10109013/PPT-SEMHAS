@extends('layout.main')

@section('title', 'BAB 5 || User Acceptance Testing')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="mb-4"><i class="fas fa-user-check text-primary"></i> BAB 5 || User Acceptance Testing</h1>

            <p class="text-justify">
                Hasil pengujian <strong>Black Box</strong> yang telah dilakukan menunjukkan bahwa perangkat lunak yang dibangun telah memenuhi kebutuhan fungsional. Namun, untuk memastikan bahwa sistem benar-benar sesuai dengan kebutuhan dan kenyamanan pengguna, maka dilakukan <strong>User Acceptance Testing (UAT)</strong>. Pengujian ini bertujuan memastikan bahwa sistem dapat diterima dan digunakan dengan baik oleh end-user.
            </p>

            <div class="row mt-4">
                <div class="col-md-6 mb-3 text-center">
                    <img src="{{ asset('uat1.jpg') }}" alt="UAT Gambar 1" class="img-fluid rounded shadow-sm" style="max-width: 90%;">
                </div>
                <div class="col-md-6 mb-3 text-center">
                    <img src="{{ asset('uat2.jpg') }}" alt="UAT Gambar 2" class="img-fluid rounded shadow-sm" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
