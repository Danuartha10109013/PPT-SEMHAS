@extends('layout.main')

@section('title', 'BAB 1 || Latar Belakang')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4><i class="fas fa-industry"></i> BAB 1 – Latar Belakang</h4>
        </div>
        <div class="card-body">
            <p class="text-justify">
                <strong>PT Tata Metal Lestari</strong>, bagian dari <strong>TATA LOGAM GROUP</strong>, adalah perusahaan manufaktur baja ringan terkemuka di Indonesia. Sejak <span class="badge bg-info text-dark">Oktober 2024</span>, perusahaan telah mengimplementasikan <strong>Sistem Informasi Digital Warehouse</strong> untuk mendukung efisiensi dan dokumentasi operasional warehouse.
            </p>

            <p class="text-justify">
                Sistem ini mencakup berbagai fitur penting seperti:
            </p>

            <ul class="list-group mb-3">
                <li class="list-group-item">✅ Pembuatan shipping mark & mapping muat container</li>
                <li class="list-group-item">✅ Pengelolaan form checklist & packing list</li>
                <li class="list-group-item">✅ Checklist kendaraan, scan layout, coil damage</li>
                <li class="list-group-item">✅ Pengelolaan open pack, packing L08 & surat izin keluar</li>
            </ul>

            <p class="text-justify">
                Namun, berdasarkan hasil <strong>User Acceptance Testing (UAT)</strong>, ditemukan beberapa kendala sebagai berikut:
            </p>

            <ol class="list-group list-group-numbered mb-3">
                <li class="list-group-item">Keterbatasan beberapa fitur penting</li>
                <li class="list-group-item">Rendahnya maintainability dan efisiensi</li>
                <li class="list-group-item">Kurangnya dukungan <em>usability</em> dan dokumentasi</li>
                <li class="list-group-item">Permintaan akses form checklist dari Divisi Produksi</li>
            </ol>

            <p class="text-justify">
                Oleh karena itu, dilakukan <span class="badge bg-warning text-dark">evaluasi lanjutan</span> menggunakan <strong>McCall's Software Quality Model</strong>. Model ini menilai aspek teknis sistem seperti:
            </p>

            <div class="row text-center mb-3">
                <div class="col-md-4"><span class="badge bg-success">Maintainability</span></div>
                <div class="col-md-4"><span class="badge bg-success">Reliability</span></div>
                <div class="col-md-4"><span class="badge bg-success">Efficiency</span></div>
            </div>

            <p class="text-justify">
                Hasil evaluasi menunjukkan bahwa sistem memerlukan <strong>pengembangan lanjutan</strong> untuk dapat secara optimal menunjang aktivitas <strong>Divisi Warehouse</strong> dan <strong>Divisi Produksi</strong>.
            </p>
        </div>
    </div>
</div>
@endsection
