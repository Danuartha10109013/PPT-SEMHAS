@extends('layout.main')

@section('title', 'BAB 2 || Penelitian yang Relevan')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4><i class="fas fa-book-open"></i> BAB 2 – Penelitian yang Relevan</h4>
        </div>
        <div class="card-body">
            <p class="mb-4 text-justify">
                Berikut adalah daftar penelitian terdahulu yang relevan dan mendukung pengembangan sistem informasi dalam studi ini:
            </p>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-secondary text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Peneliti</th>
                            <th>Judul</th>
                            <th>Masalah</th>
                            <th>Metode Pengembangan</th>
                            <th>Hasil</th>
                            <th>Keterkaitan</th>
                        </tr>
                    </thead>
                    <tbody class="text-justify">
                        <tr>
                            <td>1</td>
                            <td>Shovian, Muhammad; Al Baihaqi, Hadi; Putra Kharisma, Agi; Santoso, Nurudin (2024)</td>
                            <td>Pengembangan Aplikasi Sistem Informasi Manajemen Gudang Berbasis Web Menggunakan Metodologi Agile (CV. Jaya Laksa Lestari)</td>
                            <td>Sistem manajemen gudang kurang efisien dan tidak terintegrasi</td>
                            <td>Agile Software Development</td>
                            <td>Aplikasi berbasis web yang meningkatkan efisiensi operasional dan pengelolaan gudang secara digital</td>
                            <td>Relevan untuk pengembangan sistem checklist crane dan pencatatan data</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Max, Rudy; Gugat, Damara (2023)</td>
                            <td>Revitalisasi Manajemen Gudang Logistik melalui Sistem Persediaan Digital</td>
                            <td>Manajemen gudang masih kurang efisien</td>
                            <td>Studi Literatur</td>
                            <td>Sistem inventory berbasis web untuk efisiensi operasional dan keuangan</td>
                            <td>Relevan dalam optimasi efisiensi checklist crane</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Widiarta, I Made; Mulyanto, Yudi; Sutrianto, Arif (2023)</td>
                            <td>Sistem Informasi Inventory dengan Metode Agile (Toko Nada)</td>
                            <td>Persediaan barang tidak akurat dan tidak efisien</td>
                            <td>Agile Software Development</td>
                            <td>Manajemen gudang berbasis web mobile yang meningkatkan pengelolaan data</td>
                            <td>Berkaitan dengan manajemen persediaan crane dan alat produksi</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Wau, Kebenaran (2022)</td>
                            <td>Sistem Informasi Persediaan Gudang Berbasis Website</td>
                            <td>Pengelolaan persediaan tidak terkomputerisasi</td>
                            <td>Waterfall</td>
                            <td>Sistem berbasis web yang memudahkan pengelolaan data persediaan</td>
                            <td>Berkaitan dengan pencatatan kapasitas crane secara digital</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Novianti, A; Sari, R P (2022)</td>
                            <td>Sistem Gudang Material dengan Metode FAST (PT. SAMCON)</td>
                            <td>Pencatatan manual menyebabkan human error</td>
                            <td>FAST (Framework for the Application of Systems Thinking)</td>
                            <td>Mengurangi waktu pengambilan produk dan kesalahan manusia</td>
                            <td>Diterapkan untuk pengelolaan dan tracking checklist crane</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Farhan, Ahmad; Wahab, Abdul; Ri, Faisal; M, Frederick Nehemia; Alman, Hapifuddin (2024)</td>
                            <td>Optimisasi Pagination dan Error Handling untuk Portal Minat</td>
                            <td>Performa menurun karena penanganan data besar yang tidak optimal</td>
                            <td>Whitebox Testing</td>
                            <td>Pagination dan mekanisme error yang meningkatkan performa sistem</td>
                            <td>Memberi wawasan error handling efektif untuk sistem yang dikembangkan</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Aini, Nurul; Ratnawati, Fajar (2024)</td>
                            <td>Pengujian Kualitas Website Diskominfotik dengan McCall Model</td>
                            <td>Kualitas belum terukur secara menyeluruh</td>
                            <td>McCall’s Model</td>
                            <td>Evaluasi kualitas dan rekomendasi perbaikan sistem</td>
                            <td>Mendukung pengukuran kualitas perangkat lunak yang digunakan</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
