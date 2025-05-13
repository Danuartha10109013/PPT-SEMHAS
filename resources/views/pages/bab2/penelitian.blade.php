@extends('layout.main')

@section('title', 'BAB 2 || Penelitian yang Relevan')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 2 || Penelitian yang Relevan</h1>
            <table class="table">
                <thead class="text-bold">
                    <tr style="background-color: #f2f2f2;">
                    <th>NO</th>
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
                    <td>Pengembangan Aplikasi Sistem Informasi Manajemen Gudang Berbasis Web Menggunakan Metodologi Agile (Studi Kasus: CV. Jaya Laksa Lestari)</td>
                    <td>Sistem manajemen gudang kurang efisien dan tidak terintegrasi</td>
                    <td>Agile Software Development</td>
                    <td>Aplikasi manajemen gudang berbasis web dengan fitur pengelolaan stok, penerimaan, pengiriman, dan laporan inventaris yang meningkatkan efisiensi operasional dan pelayanan dalam pengelolaan gudang secara digital</td>
                    <td>Relevan dengan pengembangan sistem checklist crane, terutama dalam manajemen stok dan pencatatan data crane</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Max, Rudy; Gugat, Damara (2023)</td>
                    <td>Rancang Bangun Sistem Revitalisasi Manajemen Gudang Logistik melalui Penerapan Sistem Informasi Persediaan Digital</td>
                    <td>Efisiensi dan pelayanan dalam manajemen gudang logistik masih kurang optimal</td>
                    <td>Studi Literatur</td>
                    <td>Sistem informasi inventory berbasis web yang meningkatkan efisiensi operasional dan manajemen keuangan toko</td>
                    <td>Relevan dalam hal optimasi pencatatan dan efisiensi manajemen checklist crane</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Widiarta, I Made; Mulyanto, Yudi; Sutrianto, Arif (2023)</td>
                    <td>Rancang Bangun Sistem Informasi Inventory Menggunakan Metode Agile Software Development (Studi Kasus Toko Nada)</td>
                    <td>Pengelolaan persediaan barang yang tidak akurat dan efisien</td>
                    <td>Agile Software Development</td>
                    <td>Aplikasi manajemen gudang berbasis web mobile yang meningkatkan efektivitas pengelolaan data barang</td>
                    <td>Berkaitan dengan manajemen persediaan crane dan pemantauan alat yang digunakan dalam produksi</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>Wau, Kebenaran (2022)</td>
                    <td>Pengembangan Sistem Informasi Persediaan Gudang Berbasis Website dengan Metode Waterfall</td>
                    <td>Pengelolaan persediaan gudang yang tidak terkomputerisasi</td>
                    <td>Waterfall</td>
                    <td>Sistem informasi persediaan gudang berbasis web yang memudahkan pengelolaan data persediaan</td>
                    <td>Berkaitan dengan kebutuhan pencatatan kapasitas crane yang lebih sistematis dan digital</td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <td>Novianti, A; Sari, R P (2022)</td>
                    <td>Perancangan Sistem Gudang Material dengan Metode FAST pada PT. SAMCON</td>
                    <td>Pencatatan persediaan manual yang menyebabkan human error dan ketidakefisienan</td>
                    <td>Framework for the Application of Systems Thinking (FAST)</td>
                    <td>Sistem informasi pergudangan yang mengurangi waktu pengambilan produk dan meminimalkan kesalahan manusia</td>
                    <td>Bisa diterapkan dalam pengelolaan dan tracking data checklist crane untuk menghindari human error</td>
                    </tr>
                    <tr>
                    <td>6</td>
                    <td>Farhan, Ahmad; Wahab, Abdul; Ri, Faisal; M, Frederick Nehemia; Alman, Hapifuddin (2024)</td>
                    <td>Optimisasi Pagination dan Error Handling pada Portal Minat untuk Meningkatkan Performa Aplikasi Menggunakan Whitebox Testing</td>
                    <td>Performa aplikasi yang menurun akibat penanganan data besar dan penanganan kesalahan yang kurang optimal</td>
                    <td>Whitebox Testing</td>
                    <td>Implementasi pagination dan perbaikan mekanisme penanganan kesalahan yang meningkatkan performa aplikasi</td>
                    <td>Memberikan wawasan tentang teknik penanganan kesalahan yang efektif untuk meningkatkan performa sistem</td>
                    </tr>
                    <tr>
                    <td>7</td>
                    <td>Aini, Nurul; Ratnawati, Fajar (2024)</td>
                    <td>Implementasi Metode McCall pada Pengujian Kualitas Website Diskominfotik Kabupaten Bengkalis</td>
                    <td>Kualitas website yang belum terukur secara komprehensif</td>
                    <td>Metode McCall</td>
                    <td>Evaluasi kualitas website berdasarkan faktor-faktor McCall yang menghasilkan rekomendasi perbaikan</td>
                    <td>Menyediakan pendekatan untuk mengukur dan meningkatkan kualitas perangkat lunak menggunakan model McCall</td>
                    </tr>
                </tbody>
                </table>

        </div>
    </div>
</div>
@endsection