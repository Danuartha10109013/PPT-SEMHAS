@extends('layout.main')

@section('title', 'BAB 1 || Rumusan Masalah')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4><i class="fas fa-question-circle"></i> BAB 1 – Rumusan Masalah</h4>
        </div>
        <div class="card-body">
            <p class="text-justify mb-4">
                Berdasarkan hasil implementasi sistem dan evaluasi menggunakan <strong>McCall’s Quality Model</strong>, dirumuskan beberapa permasalahan utama yang menjadi fokus dalam pengembangan sistem berikutnya:
            </p>

            <ol class="list-group list-group-numbered">
                <li class="list-group-item">
                    <strong>Bagaimana</strong> agar sistem informasi dapat mengatasi kendala operasional setelah diterapkannya evaluasi menggunakan <span class="badge bg-warning text-dark">McCall’s Model</span>?
                </li>
                <li class="list-group-item">
                    <strong>Bagaimana</strong> sistem dapat dikembangkan agar <span class="text-primary">Divisi Produksi</span> dapat mengakses dan memanfaatkan fitur yang dibutuhkan secara efektif untuk mendukung proses operasional?
                </li>
                <li class="list-group-item">
                    <strong>Bagaimana</strong> cara meningkatkan <span class="badge bg-success">Maintainability</span> sistem agar memudahkan pemeliharaan, perbaikan, serta pengembangan lebih lanjut?
                </li>
                <li class="list-group-item">
                    <strong>Bagaimana</strong> meningkatkan <span class="badge bg-info text-dark">Efisiensi & Performa</span> sistem agar dapat berjalan lebih optimal dalam mendukung kebutuhan operasional warehouse?
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection
