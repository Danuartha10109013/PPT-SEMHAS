@extends('layout.main')

@section('title', 'BAB 5 || Implementasi Mc Calls Model')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="row">
                <h1>BAB 5 || Implementasi Mc Call's Model</h1>
                <div class="col-md-4">
                    <p>1.   Pengujian dengan software</p>
                    <ul>
                        <li>a)  Pengujian Realibility dengan WAPT <br>
                            <img src="{{asset('WAPT1.png.jpg')}}" width="80%" alt="">
                        </li>
                        <li>b)  Pengujian Efficiency dengan Google Lighthouse
                            <br>
                            <img src="{{asset('GL1.png')}}" width="80%" alt="">

                        </li>
                        <li>b)  Pengujian Integrity dengan Sucuri Sitehack <br>
                            <img src="{{asset('Sucuri.png')}}" width="80%" alt="">
                        
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <p>2.   Pengeujian dengan kuisioner</p>
                    <table class="table">
                        <thead style="background-color: #f2f2f2;">
                            <tr>
                            <th>Kategori</th>
                            <th>Jenis</th>
                            <th>Pertanyaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Product Operation -->
                            <tr>
                            <td rowspan="10">Product Operation</td>
                            <td>Correctness</td>
                            <td>Sistem mampu menampilkan data dengan benar</td>
                            </tr>
                            <tr>
                            <td>Correctness</td>
                            <td>Sistem mampu menampilkan kesesuaian informasi</td>
                            </tr>
                            <tr>
                            <td>Reliability</td>
                            <td>Keseluruhan menu dan fitur dapat berjalan dengan baik</td>
                            </tr>
                            <tr>
                            <td>Reliability</td>
                            <td>Menu yang tersedia dapat memenuhi fungsinya masing-masing?</td>
                            </tr>
                            <tr>
                            <td>Efficiency</td>
                            <td>Seberapa cepat sistem dalam menampilkan data yang dibutuhkan?</td>
                            </tr>
                            <tr>
                            <td>Efficiency</td>
                            <td>Apakah sistem dapat menangani jumlah pengguna yang banyak tanpa mengalami penurunan performa?</td>
                            </tr>
                            <tr>
                            <td>Integrity</td>
                            <td>Sistem mampu melakukan pelacakan perubahan data</td>
                            </tr>
                            <tr>
                            <td>Integrity</td>
                            <td>Apakah sistem memiliki mekanisme untuk mencegah akses tidak sah?</td>
                            </tr>
                            <tr>
                            <td>Usability</td>
                            <td>Sistem memiliki desain dan tampilan yang jelas?</td>
                            </tr>
                            <tr>
                            <td>Usability</td>
                            <td>Bahasa yang digunakan pada sistem konsisten?</td>
                            </tr>

                            <!-- Product Revisions -->
                            <tr>
                            <td rowspan="6">Product Revisions</td>
                            <td>Maintainability</td>
                            <td>Apakah sistem mudah diperbaiki jika terjadi kesalahan?</td>
                            </tr>
                            <tr>
                            <td>Maintainability</td>
                            <td>Apakah sistem memiliki dokumentasi yang memudahkan pemeliharaan?</td>
                            </tr>
                            <tr>
                            <td>Flexibility</td>
                            <td>Apakah sistem dapat dengan mudah disesuaikan dengan kebutuhan baru?</td>
                            </tr>
                            <tr>
                            <td>Flexibility</td>
                            <td>Apakah sistem mendukung berbagai konfigurasi sesuai dengan kebutuhan pengguna?</td>
                            </tr>
                            <tr>
                            <td>Testability</td>
                            <td>Sistem memiliki informasi yang cukup baik untuk diuji?</td>
                            </tr>
                            <tr>
                            <td>Testability</td>
                            <td>Apakah sistem mendukung pengujian otomatis atau manual dengan mudah?</td>
                            </tr>

                            <!-- Product Transition -->
                            <tr>
                            <td rowspan="6">Product Transition</td>
                            <td>Portability</td>
                            <td>Apakah sistem dapat dijalankan di berbagai platform atau perangkat?</td>
                            </tr>
                            <tr>
                            <td>Portability</td>
                            <td>Seberapa mudah sistem dapat dipindahkan ke infrastruktur atau server lain?</td>
                            </tr>
                            <tr>
                            <td>Reusability</td>
                            <td>Apakah ada komponen dalam sistem yang dapat digunakan kembali untuk pengembangan sistem lain?</td>
                            </tr>
                            <tr>
                            <td>Reusability</td>
                            <td>Apakah sistem menggunakan modul atau library yang bersifat reusable?</td>
                            </tr>
                            <tr>
                            <td>Interoperability</td>
                            <td>Apakah sistem dapat berintegrasi dengan aplikasi lain dengan mudah?</td>
                            </tr>
                            <tr>
                            <td>Interoperability</td>
                            <td>Seberapa baik sistem dapat bertukar data dengan sistem eksternal?</td>
                            </tr>

                            <!-- Other -->
                            <tr>
                            <td>Other</td>
                            <td>Other</td>
                            <td>Saran atau kebutuhan yang perlu ditambahkan pada sistem</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <p class="text text-justify mt-3">Berdasarkan hasil pengujian yang telah dilakukan, beberapa aspek kualitas sistem telah dinilai dengan berbagai metode. Berikut adalah rekomendasi perbaikan yang difokuskan pada aspek dengan nilai rendah:</p>
            <ul class="text text-justify">
                <li>
                    1.	Peningkatan Kapasitas Crane: Disarankan untuk mengevaluasi dan meningkatkan kapasitas crane guna mengoptimalkan kinerja sistem.

                </li>
                <li>
                    2.	Perbaikan Error Handling: Perlu diterapkan mekanisme error handling yang lebih baik untuk mengurangi potensi kesalahan yang tidak terdeteksi.

                </li>
                <li>
                    3.	Evaluasi Penerapan SPK: Perlu dilakukan peninjauan ulang terhadap penerapan SPK agar lebih sesuai dengan kebutuhan operasional.

                </li>
                <li>
                    4.	Peningkatan Maintainability: Nilai maintainability yang masih cukup rendah menunjukkan perlunya dokumentasi kode yang lebih baik, refactoring kode untuk meningkatkan keterbacaan, serta penerapan standar pengkodean yang lebih konsisten.

                </li>
                <li>
                    5.	Optimasi Efisiensi: Nilai efisiensi masih kurang optimal, terutama dalam hal kecepatan loading halaman. Perbaikan dapat dilakukan dengan optimasi gambar, penggunaan caching, serta memperbaiki performa backend.

                </li>
                <li>
                    6.	Peningkatan Usability: Website masih kurang dalam menyediakan dokumentasi dan bantuan online. Direkomendasikan untuk menambahkan halaman khusus yang berisi panduan penggunaan dan dokumentasi sistem agar lebih mudah diakses oleh pengguna.

                </li>
            </ul>
            
        </div>
    </div>
</div>
@endsection