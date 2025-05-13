@extends('layout.main')

@section('title', 'BAB 4 || Sprint Planning')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 4 || Sprint Planning</h1>
            <p>Pada tahap ini dilakukan pembagian product backlog kedalam setiap sprint untuk nanti dikerjakan sesuai dengan sprint yang telah ditentukan. Setiap Sprint dilakukan dalam jangka waktu antara 3-4 minggu dan dilakukan dalam total 4 sprint, berikut pembagian product backlog kedalam sprint : </p>
            <ul>
                <li>1)	Sprint 1 Analisis & Perencanaan
                </li>
                <li>2)	Sprint 2 Checklist Crane & Shift Leader
                    <ul>
                        <li>1.	Penambahan kapasitas crane milik divisi produksi pada checklist crane di fitur form checklist
                        </li>
                        <li>2.	Penambahan shift leader pada checklist crane di fitur form checklist
                        </li>
                    </ul>
                </li>
                <li>3)	Sprint 3 Error Handling & Review  
                    <ul>
                        <li>1.	Penambahan error handling yang lebih baik</li>
                    </ul>
                
                </li>
                <li>4)	Sprint 4 Penyempurnaan Mapping Muat & Finalisasi
                    <ul>
                        <li>1.	Menghilangkan penggunaan SPK pada Mapping Muat</li>
                    </ul>
                
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection