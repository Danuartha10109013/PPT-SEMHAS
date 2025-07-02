@extends('layout.main')

@section('title', 'BAB 5 || Implementasi Mc Call\'s Model')

@section('content')
<div class="container py-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3><i class="bi bi-gear-wide-connected me-2"></i>Implementasi Mc Call's Model</h3>
        </div>
        <div class="card-body">
            <h4 class="mb-3"><i class="bi bi-1-circle me-2"></i>Pengujian dengan Software 🔧</h4>
            <div class="row mb-4">
                <div class="col-md-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>a)</strong> Realibility - WAPT 🧪<br>
                            <img src="{{ asset('WAPT1.png.jpg') }}" width="100%" class="rounded shadow-sm mt-2" alt="WAPT Test Result">
                        </li>
                        <li class="list-group-item">
                            <strong>b)</strong> Efficiency - Google Lighthouse 🚀<br>
                            <img src="{{ asset('GL1.png') }}" width="100%" class="rounded shadow-sm mt-2" alt="Google Lighthouse Result">
                        </li>
                        <li class="list-group-item">
                            <strong>c)</strong> Integrity - Sucuri SiteCheck 🔒<br>
                            <img src="{{ asset('Sucuri.png') }}" width="100%" class="rounded shadow-sm mt-2" alt="Sucuri Result">
                        </li>
                    </ul>
                </div>

                <div class="col-md-8">
                    <h4><i class="bi bi-2-circle me-2"></i>Pengujian dengan Kuisioner 📝</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Kategori</th>
                                    <th>Jenis</th>
                                    <th>Pertanyaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Product Operation --}}
                                @php
                                    $ops = [
                                        ['Correctness', 'Sistem mampu menampilkan data dengan benar'],
                                        ['Correctness', 'Sistem mampu menampilkan kesesuaian informasi'],
                                        ['Reliability', 'Keseluruhan menu dan fitur dapat berjalan dengan baik'],
                                        ['Reliability', 'Menu yang tersedia dapat memenuhi fungsinya masing-masing?'],
                                        ['Efficiency', 'Seberapa cepat sistem dalam menampilkan data yang dibutuhkan?'],
                                        ['Efficiency', 'Apakah sistem dapat menangani jumlah pengguna yang banyak tanpa mengalami penurunan performa?'],
                                        ['Integrity', 'Sistem mampu melakukan pelacakan perubahan data'],
                                        ['Integrity', 'Apakah sistem memiliki mekanisme untuk mencegah akses tidak sah?'],
                                        ['Usability', 'Sistem memiliki desain dan tampilan yang jelas?'],
                                        ['Usability', 'Bahasa yang digunakan pada sistem konsisten?']
                                    ];
                                @endphp
                                <tr>
                                    <td rowspan="{{ count($ops) }}" class="align-middle text-center bg-light">🛠️ Product Operation</td>
                                    @foreach($ops as $i => $row)
                                        @if($i > 0)<tr>@endif
                                            <td><span class="badge bg-info">{{ $row[0] }}</span></td>
                                            <td>{{ $row[1] }}</td>
                                        @if($i > 0)</tr>@endif
                                    @endforeach
                                </tr>

                                {{-- Product Revisions --}}
                                @php
                                    $rev = [
                                        ['Maintainability', 'Apakah sistem mudah diperbaiki jika terjadi kesalahan?'],
                                        ['Maintainability', 'Apakah sistem memiliki dokumentasi yang memudahkan pemeliharaan?'],
                                        ['Flexibility', 'Apakah sistem dapat dengan mudah disesuaikan dengan kebutuhan baru?'],
                                        ['Flexibility', 'Apakah sistem mendukung berbagai konfigurasi sesuai dengan kebutuhan pengguna?'],
                                        ['Testability', 'Sistem memiliki informasi yang cukup baik untuk diuji?'],
                                        ['Testability', 'Apakah sistem mendukung pengujian otomatis atau manual dengan mudah?']
                                    ];
                                @endphp
                                <tr>
                                    <td rowspan="{{ count($rev) }}" class="align-middle text-center bg-light">🔄 Product Revisions</td>
                                    @foreach($rev as $i => $row)
                                        @if($i > 0)<tr>@endif
                                            <td><span class="badge bg-success">{{ $row[0] }}</span></td>
                                            <td>{{ $row[1] }}</td>
                                        @if($i > 0)</tr>@endif
                                    @endforeach
                                </tr>

                                {{-- Product Transition --}}
                                @php
                                    $trans = [
                                        ['Portability', 'Apakah sistem dapat dijalankan di berbagai platform atau perangkat?'],
                                        ['Portability', 'Seberapa mudah sistem dapat dipindahkan ke infrastruktur atau server lain?'],
                                        ['Reusability', 'Apakah ada komponen dalam sistem yang dapat digunakan kembali untuk pengembangan sistem lain?'],
                                        ['Reusability', 'Apakah sistem menggunakan modul atau library yang bersifat reusable?'],
                                        ['Interoperability', 'Apakah sistem dapat berintegrasi dengan aplikasi lain dengan mudah?'],
                                        ['Interoperability', 'Seberapa baik sistem dapat bertukar data dengan sistem eksternal?']
                                    ];
                                @endphp
                                <tr>
                                    <td rowspan="{{ count($trans) }}" class="align-middle text-center bg-light">🔁 Product Transition</td>
                                    @foreach($trans as $i => $row)
                                        @if($i > 0)<tr>@endif
                                            <td><span class="badge bg-warning text-dark">{{ $row[0] }}</span></td>
                                            <td>{{ $row[1] }}</td>
                                        @if($i > 0)</tr>@endif
                                    @endforeach
                                </tr>

                                {{-- Other --}}
                                <tr>
                                    <td class="text-center bg-light">🧠 Other</td>
                                    <td><span class="badge bg-secondary">Other</span></td>
                                    <td>Saran atau kebutuhan yang perlu ditambahkan pada sistem</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <h5 class="mt-4"><i class="bi bi-lightbulb-fill text-warning me-2"></i>Rekomendasi Perbaikan 🔍</h5>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">📦 <strong>Peningkatan Kapasitas Crane:</strong> Evaluasi dan peningkatan kapasitas crane untuk kinerja optimal.</li>
                <li class="list-group-item">🐞 <strong>Perbaikan Error Handling:</strong> Terapkan mekanisme yang lebih baik untuk deteksi kesalahan.</li>
                <li class="list-group-item">📋 <strong>Evaluasi Penerapan SPK:</strong> Tinjau kembali penerapan SPK agar sesuai kebutuhan operasional.</li>
                <li class="list-group-item">🧰 <strong>Peningkatan Maintainability:</strong> Tambahkan dokumentasi dan lakukan refactoring kode.</li>
                <li class="list-group-item">⚡ <strong>Optimasi Efisiensi:</strong> Tingkatkan kecepatan dengan optimasi gambar dan caching.</li>
                <li class="list-group-item">📘 <strong>Peningkatan Usability:</strong> Tambahkan panduan pengguna dan dokumentasi sistem yang mudah diakses.</li>
            </ul>
        </div>
    </div>
</div>
@endsection
