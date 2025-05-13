@extends('layout.main')

@section('title', 'BAB 4 || Product Backlog')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 4 || Product Backlog</h1>
            <p class="text text-justify">Pada tahap ini di buat perencanaan daftar kebutuhan sistem yang akan dikembangankan oleh pengembang. Mencakup list fitur yang akan dikembangkan.
            </p>
            <p class="text text-justify">Untuk menentukan product backlog disusun user story sebagai berikut :
            </p>
            <ul>
                <li>a.	User Story ; 
                    <ul>
                        <li>1.	Sebagai pengguna sistem di divisi produksi
                        </li>
                        <li>2.	Saya ingin dapat mencatat kapasitas crane yang digunakan dalam checklist crane,
                        </li>
                        <li>3.	Sehingga saya dapat memastikan kapasitas crane terdokumentasi dengan baik untuk evaluasi dan pemeliharaan.
                        </li>
                    </ul>
                </li>
                <li>b.	User Story :
                    <ul>
                        <li>1.	Sebagai shift leader,
                        </li>
                        <li>2.	Saya ingin dapat mencatat nama saya pada checklist crane,
                        </li>
                        <li>3.	Sehingga saya memiliki tanggung jawab yang lebih jelas dalam proses checklist crane.
                        </li>
                    </ul>
                </li>
                <li>c.	User Story :
                    <ul>
                        <li>1.	Sebagai pengguna sistem,
                        </li>
                        <li>2.	Saya ingin mendapatkan pesan error yang lebih informatif dan mudah dipahami,
                        </li>
                        <li>3.	Sehingga saya dapat mengetahui penyebab kesalahan dan cara mengatasinya dengan lebih cepat.
                        </li>
                    </ul>
                </li>
                <li>d.	User Story :
                    <ul>
                        <li>1.	Sebagai pengguna sistem di divisi warehouse,
                        </li>
                        <li>2.	Saya ingin proses mapping muat dilakukan tanpa menggunakan SPK,
                        </li>
                        <li>3.	Sehingga sistem lebih sesuai dengan kondisi proses bisnis di lapangan berdasarkan hasil UAT.
                        </li>
                    </ul>
                </li>
                <li>Acceptance Criteria :
                    <ul>
                        <li>1.	SPK tidak lagi menjadi bagian dari proses Mapping Muat.
                        </li>
                        <li>2.	Penghapusan SPK tidak menyebabkan error pada fitur lain yang terkait.
                        </li>
                        <li>3.	Sistem tetap berjalan sesuai kebutuhan operasional di lapangan.
                        </li>
                    </ul>
                </li>

            </ul>
            <p>Berdasarkan user story diatas dapat dirumuskan product backlog sebagai berikut :</p>
            <table class="table">
                <thead style="background-color: #f2f2f2;">
                    <tr>
                        <th>No</th>
                        <th>Backlog Item</th>
                        <th>Prioritas</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Penambahan kapasitas crane milik divisi produksi pada checklist crane di fitur form checklist</td>
                        <td>High</td>
                        <td>Menyesuaikan dengan kebutuhan operasional di lapangan.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Penambahan shift leader pada checklist crane di fitur form checklist</td>
                        <td>High</td>
                        <td>Mempermudah identifikasi pengawasan dan tanggung jawab.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Penambahan error handling yang lebih baik</td>
                        <td>High</td>
                        <td>Meningkatkan stabilitas dan keandalan sistem.</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Menghilangkan penggunaan SPK pada Mapping Muat</td>
                        <td>Medium</td>
                        <td>Berdasarkan hasil User Acceptance Testing (UAT), SPK tidak sesuai dengan proses bisnis di divisi warehouse PT Tata Metal Lestari.</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection