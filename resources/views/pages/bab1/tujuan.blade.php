@extends('layout.main')

@section('title', 'BAB 1 || Tujuan Penelitian')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4><i class="fas fa-bullseye"></i> BAB 1 – Tujuan Penelitian</h4>
        </div>
        <div class="card-body">
            <p class="text-justify mb-3">
                Tujuan dari penelitian ini adalah untuk meningkatkan kualitas dan fungsionalitas sistem informasi digital warehouse yang digunakan oleh PT Tata Metal Lestari. Adapun rincian tujuan penelitian adalah sebagai berikut:
            </p>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    ✅ Mengembangkan sistem informasi agar mampu mengatasi kendala operasional yang terjadi berdasarkan hasil evaluasi <strong>McCall’s Model</strong>.
                </li>
                <li class="list-group-item">
                    ✅ Menyempurnakan fitur-fitur sistem agar <span class="text-primary">Divisi Produksi</span> dapat mengakses dan memanfaatkannya secara optimal untuk mendukung proses operasional.
                </li>
                <li class="list-group-item">
                    ✅ Meningkatkan <span class="badge bg-warning text-dark">Maintainability</span> sistem dengan pendekatan yang memudahkan pemeliharaan, perbaikan, serta pengembangan lebih lanjut.
                </li>
                <li class="list-group-item">
                    ✅ Mengoptimalkan efisiensi dan performa sistem agar lebih <span class="text-success">responsif</span> dan <span class="text-success">stabil</span> dalam mendukung kebutuhan operasional warehouse.
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
