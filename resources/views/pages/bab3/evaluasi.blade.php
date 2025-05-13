@extends('layout.main')

@section('title', 'BAB 3 || Evaluasi Mc Calls Model')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 3 || Evaluasi Mc Call's Model</h1>
            <p class="text text-justify">Evaluasi kualitas perangkat lunak dalam penelitian ini menggunakan McCall’s Software Quality Model, yang mengkategorikan kualitas perangkat lunak ke dalam beberapa atribut utama, termasuk Reliability, Efficiency, dan Integrity (Boehm, 1978). Evaluasi dilakukan dengan dua pendekatan, yaitu pengujian berbasis perangkat lunak dan pengujian berbasis kuesioner.</p>
            <ul class="text text-justify">
                <li>1.	Metode pertama adalah pengujian berbasis perangkat lunak, yang menggunakan beberapa alat bantu evaluasi sebagai berikut:
                Reliability Testing menggunakan WAPT, yang berfungsi untuk mengukur keandalan dan ketahanan sistem dalam menangani beban kerja secara berulang dan berkelanjutan (Kitchenham, 1996). Pengujian ini penting untuk memastikan bahwa sistem tetap berfungsi dengan baik dalam berbagai kondisi operasional. 
                </li>
                <li>2.	Efficiency Testing menggunakan Google Lighthouse, yang mengevaluasi kinerja aplikasi berbasis web, termasuk kecepatan loading halaman, optimasi kode, dan efisiensi penggunaan sumber daya sistem (Al-Qutaish, 2010). Evaluasi ini membantu dalam mengidentifikasi potensi perbaikan dalam aspek performa aplikasi. 
                </li>
                <li>3.	Integrity Testing menggunakan Sucuri SiteCheck, yang menganalisis keamanan aplikasi dan mendeteksi kemungkinan adanya ancaman eksternal yang dapat mengganggu integritas data atau menyebabkan kebocoran informasi (Boehm, 1978).
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection