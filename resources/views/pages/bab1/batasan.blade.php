@extends('layout.main')

@section('title', 'BAB 1 || Batasan Masalah')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-danger text-white">
            <h4><i class="fas fa-ban"></i> BAB 1 – Batasan Masalah</h4>
        </div>
        <div class="card-body">

            <!-- Ruang Lingkup Penelitian -->
            <h5><span class="badge bg-primary">1)</span> Ruang Lingkup Penelitian</h5>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">
                    🔹 Penelitian ini hanya mencakup <strong>pengembangan dan perbaikan</strong> Sistem Informasi Manajemen Operasional.
                </li>
                <li class="list-group-item">
                    🔹 Fokus pengembangan diarahkan pada <strong>penyesuaian sistem</strong> berdasarkan hasil Mc Call’s Model dan kebutuhan baru selama implementasi.
                </li>
                <li class="list-group-item">
                    🔹 Cakupan juga meliputi <strong>integrasi sistem</strong> agar dapat diakses oleh Divisi Produksi, khususnya dalam penggunaan form checklist.
                </li>
            </ul>

            <!-- Pembatasan Permasalahan -->
            <h5><span class="badge bg-warning text-dark">2)</span> Pembatasan Permasalahan</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    🚫 Penelitian ini <strong>tidak mencakup pengembangan sistem dari nol</strong>, hanya pada peningkatan sistem yang sudah ada.
                </li>
                <li class="list-group-item">
                    🚫 Studi ini <strong>hanya berfokus pada pengguna internal</strong> PT Tata Metal Lestari, bukan perusahaan lain.
                </li>
                <li class="list-group-item">
                    🚫 Pengujian sistem <strong>dilakukan dalam lingkungan internal</strong> perusahaan tanpa uji coba eksternal.
                </li>
                <li class="list-group-item">
                    🚫 Data yang digunakan terbatas pada <strong>data operasional warehouse dan produksi</strong> yang relevan.
                </li>
            </ul>

        </div>
    </div>
</div>
@endsection
