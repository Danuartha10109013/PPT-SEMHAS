@extends('layout.main')

@section('title', 'BAB 4 || Product Backlog')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h2>BAB 4 || Product Backlog</h2>
        </div>
        <div class="card-body">
            <p class="text-justify">
                Pada tahap ini dibuat perencanaan daftar kebutuhan sistem yang akan dikembangkan oleh pengembang. Mencakup list fitur yang akan dikembangkan.
            </p>
            <p class="text-justify">
                Untuk menentukan product backlog disusun user story sebagai berikut:
            </p>
            
            <ul class="list-group mb-4">
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-person-circle me-2 text-primary"></i>
                        <h5>a. User Story:</h5>
                    </div>
                    <ul class="ms-4">
                        <li>1. Sebagai pengguna sistem di divisi produksi</li>
                        <li>2. Saya ingin dapat mencatat kapasitas crane yang digunakan dalam checklist crane</li>
                        <li>3. Sehingga saya dapat memastikan kapasitas crane terdokumentasi dengan baik untuk evaluasi dan pemeliharaan.</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-person-fill me-2 text-success"></i>
                        <h5>b. User Story:</h5>
                    </div>
                    <ul class="ms-4">
                        <li>1. Sebagai shift leader</li>
                        <li>2. Saya ingin dapat mencatat nama saya pada checklist crane</li>
                        <li>3. Sehingga saya memiliki tanggung jawab yang lebih jelas dalam proses checklist crane.</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-bug-fill me-2 text-danger"></i>
                        <h5>c. User Story:</h5>
                    </div>
                    <ul class="ms-4">
                        <li>1. Sebagai pengguna sistem</li>
                        <li>2. Saya ingin mendapatkan pesan error yang lebih informatif dan mudah dipahami</li>
                        <li>3. Sehingga saya dapat mengetahui penyebab kesalahan dan cara mengatasinya dengan lebih cepat.</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-archive-fill me-2 text-info"></i>
                        <h5>d. User Story:</h5>
                    </div>
                    <ul class="ms-4">
                        <li>1. Sebagai pengguna sistem di divisi warehouse</li>
                        <li>2. Saya ingin proses mapping muat dilakukan tanpa menggunakan SPK</li>
                        <li>3. Sehingga sistem lebih sesuai dengan kondisi proses bisnis di lapangan berdasarkan hasil UAT.</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill me-2 text-success"></i>
                        <h5>Acceptance Criteria:</h5>
                    </div>
                    <ul class="ms-4">
                        <li>1. SPK tidak lagi menjadi bagian dari proses Mapping Muat.</li>
                        <li>2. Penghapusan SPK tidak menyebabkan error pada fitur lain yang terkait.</li>
                        <li>3. Sistem tetap berjalan sesuai kebutuhan operasional di lapangan.</li>
                    </ul>
                </li>
            </ul>

            <p class="text-justify">
                Berdasarkan user story di atas dapat dirumuskan product backlog sebagai berikut:
            </p>
            
            <table class="table table-striped">
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
                        <td><span class="badge bg-success">High</span></td>
                        <td>Menyesuaikan dengan kebutuhan operasional di lapangan.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Penambahan shift leader pada checklist crane di fitur form checklist</td>
                        <td><span class="badge bg-success">High</span></td>
                        <td>Mempermudah identifikasi pengawasan dan tanggung jawab.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Penambahan error handling yang lebih baik</td>
                        <td><span class="badge bg-danger">High</span></td>
                        <td>Meningkatkan stabilitas dan keandalan sistem.</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Menghilangkan penggunaan SPK pada Mapping Muat</td>
                        <td><span class="badge bg-warning">Medium</span></td>
                        <td>Berdasarkan hasil User Acceptance Testing (UAT), SPK tidak sesuai dengan proses bisnis di divisi warehouse PT Tata Metal Lestari.</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
