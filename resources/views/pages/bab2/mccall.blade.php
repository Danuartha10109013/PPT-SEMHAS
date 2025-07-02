@extends('layout.main')

@section('title', 'BAB 2 || Mc Call\'s Model')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            <h4><i class="fas fa-check-circle"></i> BAB 2 – McCall's Quality Model</h4>
        </div>
        <div class="card-body">

            <p class="text-justify">
                <strong>McCall's Quality Model</strong> adalah salah satu model kualitas perangkat lunak yang dikembangkan oleh <strong>Jim McCall</strong> pada tahun 1977 untuk Departemen Pertahanan Amerika Serikat. Model ini bertujuan untuk mengevaluasi dan meningkatkan kualitas perangkat lunak melalui pendekatan yang memperhatikan perspektif <strong>pengguna</strong> dan <strong>pengembang</strong> (Ramulu & Murhtyr, 2020).
            </p>

            <p class="text-justify">
                McCall’s Model mengelompokkan atribut kualitas ke dalam tiga kategori utama sebagai berikut:
            </p>

            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <strong>a. Product Operation</strong> (Operasi Produk): mencakup atribut <em>correctness</em>, <em>reliability</em>, <em>efficiency</em>, <em>integrity</em>, dan <em>usability</em>.
                </li>
                <li class="list-group-item">
                    <strong>b. Product Revision</strong> (Revisi Produk): mencakup <em>maintainability</em>, <em>flexibility</em>, dan <em>testability</em>.
                </li>
                <li class="list-group-item">
                    <strong>c. Product Transition</strong> (Transisi Produk): terdiri dari <em>portability</em>, <em>reusability</em>, dan <em>interoperability</em>.
                </li>
            </ul>

            <p class="text-muted text-end">
                <em>— Ramulu & Murhtyr, 2020</em>
            </p>

        </div>
    </div>
</div>
@endsection
