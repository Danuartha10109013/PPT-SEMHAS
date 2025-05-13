@extends('layout.main')

@section('title', 'BAB 1 || Sistematika Penulisan')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 1 || Sistematika Penulisan</h1>
            <table class="table table-responsive">
                <thead>
                    <tr>
                    <th>BAB</th>
                    <th>Judul</th>
                    <th>Isi Singkat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>BAB 1</td>
                    <td>PENDAHULUAN</td>
                    <td class="text text-justify">Menjelaskan latar belakang masalah terkait keterbatasan sistem digital warehouse, rumusan masalah, tujuan, manfaat akademis dan praktis, batasan ruang lingkup, serta sistematika penulisan.</td>
                    </tr>
                    <tr>
                    <td>BAB 2</td>
                    <td>LANDASAN TEORI</td>
                    <td class="text text-justify">Membahas teori pengembangan sistem informasi, checklist digital, error handling, McCall’s Quality Model, pemodelan UML, ERD, UI/UX, metode black box testing, serta penelitian terdahulu.</td>
                    </tr>
                    <tr>
                    <td>BAB 3</td>
                    <td>METODOLOGI PENELITIAN</td>
                    <td class="text text-justify">Menguraikan metode Agile (Scrum), sprint, evaluasi sistem menggunakan alat dan kuisioner berdasarkan McCall’s Model, serta jadwal kegiatan proyek dalam bentuk tabel.</td>
                    </tr>
                    <tr>
                    <td>BAB 4</td>
                    <td>ANALISIS DAN PERANCANGAN</td>
                    <td class="text text-justify">Menganalisis permasalahan sistem dan menyusun solusi melalui product backlog dan sprint, dilengkapi dengan diagram UML, desain basis data, dan rancangan UI yang lebih baik.</td>
                    </tr>
                    <tr>
                    <td>BAB 5</td>
                    <td>IMPLEMENTASI</td>
                    <td class="text text-justify">Mendeskripsikan implementasi fitur berdasarkan sprint, pengujian dengan black box dan UAT, serta hasil peningkatan pada correctness dan reliability. Evaluasi sistem juga dijelaskan.</td>
                    </tr>
                    <tr>
                    <td>BAB 6</td>
                    <td>KESIMPULAN DAN SARAN</td>
                    <td class="text text-justify">Menarik kesimpulan atas peningkatan sistem, memberikan saran untuk efisiensi, dokumentasi kode, dan panduan penggunaan, serta kontribusi dalam penerapan McCall Model dan metode Agile.</td>
                    </tr>
                </tbody>
                </table>

        </div>
    </div>
</div>
@endsection