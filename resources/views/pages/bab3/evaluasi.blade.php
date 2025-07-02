@extends('layout.main')

@section('title', 'BAB 3 || Evaluasi Mc Call\'s Model')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h2>BAB 3 || Evaluasi McCall's Model</h2>
        </div>
        <div class="card-body">
            <p class="text-justify">
                Evaluasi kualitas perangkat lunak dalam penelitian ini menggunakan McCall’s Software Quality Model, yang mengkategorikan kualitas perangkat lunak ke dalam beberapa atribut utama, termasuk Reliability, Efficiency, dan Integrity (Boehm, 1978). Evaluasi dilakukan dengan dua pendekatan, yaitu pengujian berbasis perangkat lunak dan pengujian berbasis kuesioner.
            </p>

            <h4 class="mt-4 mb-3">Metode Evaluasi</h4>
            <div class="list-group">
                <div class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="d-flex">
                        <i class="bi bi-check-circle-fill text-success mr-3" style="font-size: 24px;"></i>
                        <div>
                            <h5 class="mb-1">Reliability Testing</h5>
                            <p class="mb-1">Menggunakan <strong>WAPT</strong>, yang berfungsi untuk mengukur keandalan dan ketahanan sistem dalam menangani beban kerja secara berulang dan berkelanjutan (Kitchenham, 1996). Pengujian ini penting untuk memastikan bahwa sistem tetap berfungsi dengan baik dalam berbagai kondisi operasional.</p>
                            <small><em>Referensi: Kitchenham, 1996</em></small>
                        </div>
                    </div>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="d-flex">
                        <i class="bi bi-speedometer2 text-warning mr-3" style="font-size: 24px;"></i>
                        <div>
                            <h5 class="mb-1">Efficiency Testing</h5>
                            <p class="mb-1">Menggunakan <strong>Google Lighthouse</strong>, yang mengevaluasi kinerja aplikasi berbasis web, termasuk kecepatan loading halaman, optimasi kode, dan efisiensi penggunaan sumber daya sistem (Al-Qutaish, 2010). Evaluasi ini membantu dalam mengidentifikasi potensi perbaikan dalam aspek performa aplikasi.</p>
                            <small><em>Referensi: Al-Qutaish, 2010</em></small>
                        </div>
                    </div>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="d-flex">
                        <i class="bi bi-shield-lock-fill text-danger mr-3" style="font-size: 24px;"></i>
                        <div>
                            <h5 class="mb-1">Integrity Testing</h5>
                            <p class="mb-1">Menggunakan <strong>Sucuri SiteCheck</strong>, yang menganalisis keamanan aplikasi dan mendeteksi kemungkinan adanya ancaman eksternal yang dapat mengganggu integritas data atau menyebabkan kebocoran informasi (Boehm, 1978).</p>
                            <small><em>Referensi: Boehm, 1978</em></small>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">
            <p class="text-justify">
                Pengujian berbasis perangkat lunak di atas sangat penting untuk menilai berbagai aspek kualitas perangkat lunak, dan hasil evaluasi ini dapat digunakan untuk melakukan perbaikan berkelanjutan terhadap aplikasi yang diuji. Selain itu, pengujian berbasis kuesioner dapat memberikan wawasan lebih lanjut dari perspektif pengguna.
            </p>
        </div>
    </div>
</div>
@endsection
