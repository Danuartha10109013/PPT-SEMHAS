@extends('layout.main')

@section('title', 'BAB 1 || Sistematika Penulisan')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-secondary text-white">
            <h4><i class="fas fa-book"></i> BAB 1 – Sistematika Penulisan</h4>
        </div>
        <div class="card-body">
            <p class="mb-4 text-justify">
                Sistematika penulisan laporan ini terdiri dari enam bab yang disusun secara terstruktur dan saling berkaitan, sebagai berikut:
            </p>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 10%; color: white">BAB</th>
                            <th style="width: 20%; color: white">Judul</th>
                            <th style="color: white">Isi Singkat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge bg-primary">BAB 1</span></td>
                            <td>PENDAHULUAN</td>
                            <td class="text-justify">Menjelaskan latar belakang masalah terkait keterbatasan sistem digital warehouse, rumusan masalah, tujuan, manfaat akademis dan praktis, batasan ruang lingkup, serta sistematika penulisan.</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-primary">BAB 2</span></td>
                            <td>LANDASAN TEORI</td>
                            <td class="text-justify">Membahas teori pengembangan sistem informasi, checklist digital, error handling, McCall’s Quality Model, pemodelan UML, ERD, UI/UX, metode black box testing, serta penelitian terdahulu.</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-primary">BAB 3</span></td>
                            <td>METODOLOGI PENELITIAN</td>
                            <td class="text-justify">Menguraikan metode Agile (Scrum), sprint, evaluasi sistem menggunakan alat dan kuisioner berdasarkan McCall’s Model, serta jadwal kegiatan proyek dalam bentuk tabel.</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-primary">BAB 4</span></td>
                            <td>ANALISIS DAN PERANCANGAN</td>
                            <td class="text-justify">Menganalisis permasalahan sistem dan menyusun solusi melalui product backlog dan sprint, dilengkapi dengan diagram UML, desain basis data, dan rancangan UI yang lebih baik.</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-primary">BAB 5</span></td>
                            <td>IMPLEMENTASI</td>
                            <td class="text-justify">Mendeskripsikan implementasi fitur berdasarkan sprint, pengujian dengan black box dan UAT, serta hasil peningkatan pada correctness dan reliability. Evaluasi sistem juga dijelaskan.</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-primary">BAB 6</span></td>
                            <td>KESIMPULAN DAN SARAN</td>
                            <td class="text-justify">Menarik kesimpulan atas peningkatan sistem, memberikan saran untuk efisiensi, dokumentasi kode, dan panduan penggunaan, serta kontribusi dalam penerapan McCall Model dan metode Agile.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
