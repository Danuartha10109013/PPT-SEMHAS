@extends('layout.main')

@section('title', 'BAB 4 || Sprint Planning')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h2>BAB 4 || Sprint Planning</h2>
        </div>
        <div class="card-body">
            <p class="text-justify">
                Pada tahap ini dilakukan pembagian product backlog kedalam setiap sprint untuk nanti dikerjakan sesuai dengan sprint yang telah ditentukan. Setiap Sprint dilakukan dalam jangka waktu antara 3-4 minggu dan dilakukan dalam total 4 sprint, berikut pembagian product backlog kedalam sprint:
            </p>

            <ul class="list-group mb-4">
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-calendar-check-fill me-2 text-primary"></i>
                        <h5>1) Sprint 1: Analisis & Perencanaan <span class="text-muted">📅</span></h5>
                    </div>
                    <p class="ms-4">Sprint pertama berfokus pada analisis awal dan perencanaan fitur untuk sistem.</p>
                </li>
                
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check2-circle me-2 text-success"></i>
                        <h5>2) Sprint 2: Checklist Crane & Shift Leader <span class="text-success">✔️</span></h5>
                    </div>
                    <ul class="ms-4">
                        <li>1. Penambahan kapasitas crane milik divisi produksi pada checklist crane di fitur form checklist</li>
                        <li>2. Penambahan shift leader pada checklist crane di fitur form checklist</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-bug-fill me-2 text-warning"></i>
                        <h5>3) Sprint 3: Error Handling & Review <span class="text-warning">🐞</span></h5>
                    </div>
                    <ul class="ms-4">
                        <li>1. Penambahan error handling yang lebih baik</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-pencil-square me-2 text-info"></i>
                        <h5>4) Sprint 4: Penyempurnaan Mapping Muat & Finalisasi <span class="text-info">📝</span></h5>
                    </div>
                    <ul class="ms-4">
                        <li>1. Menghilangkan penggunaan SPK pada Mapping Muat</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
