@extends('layout.main')

@section('title', 'BAB 4 || Mc Call\'s Model')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h2>BAB 4 || Mc Call's Model</h2>
        </div>
        <div class="card-body">
            <p class="text-justify">
                Berdasarkan hasil pengujian yang telah dilakukan, beberapa aspek kualitas sistem telah dinilai dengan berbagai metode. Berikut adalah rekomendasi perbaikan yang difokuskan pada aspek dengan nilai rendah:
            </p>
            
            <ul class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-arrow-up-circle-fill me-2 text-success"></i>
                        <h5>1. Peningkatan Kapasitas Crane</h5>
                    </div>
                    <span class="badge bg-success rounded-pill">Optimalkan!</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle-fill me-2 text-warning"></i>
                        <h5>2. Perbaikan Error Handling</h5>
                    </div>
                    <span class="badge bg-warning text-dark rounded-pill">Perbaiki!</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill me-2 text-primary"></i>
                        <h5>3. Evaluasi Penerapan SPK</h5>
                    </div>
                    <span class="badge bg-primary rounded-pill">Evaluasi</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-gear-fill me-2 text-info"></i>
                        <h5>4. Peningkatan Maintainability</h5>
                    </div>
                    <span class="badge bg-info rounded-pill">Perbaiki</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-speedometer2 me-2 text-danger"></i>
                        <h5>5. Optimasi Efisiensi</h5>
                    </div>
                    <span class="badge bg-danger text-white rounded-pill">Urgent</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-lightbulb-fill me-2 text-warning"></i>
                        <h5>6. Peningkatan Usability</h5>
                    </div>
                    <span class="badge bg-warning rounded-pill">Tambah Panduan</span>
                </li>
            </ul>

            <p class="text-justify">
                Dengan menerapkan rekomendasi ini, diharapkan sistem dapat memiliki kualitas yang lebih baik dan memberikan pengalaman pengguna yang lebih optimal. <span class="text-success">✨</span>
            </p>
        </div>
    </div>
</div>
@endsection
