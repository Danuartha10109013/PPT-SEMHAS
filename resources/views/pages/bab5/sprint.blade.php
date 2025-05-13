@extends('layout.main')

@section('title', 'BAB 5 || Sprint Execution')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 5 || Sprint Execution</h1>
            <table class="table">
                <thead style="background-color: #f2f2f2;">
                    <tr>
                    <th>Sprint&nbsp;&nbsp;</th>
                    <th>Durasi &nbsp;&nbsp;</th>
                    <th>Sprint Goal</th>
                    <th>Item Backlog &nbsp;&nbsp;</th>
                    <th>Increament Hasil</th>
                    <th>Sprint Review</th>
                    <th>Increament Delivery</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Sprint 1</td>
                    <td>3 Minggu</td>
                    <td>Analisis & perencanaan, dilakukan dengan menerapkan Mc Call’s Model</td>
                    <td>Penerapan Mc Call’s Model & perencanaan pengembangan berdasarkan hasil dari Mc Call’s Model</td>
                    <td>Semua selesai</td>
                    <td>-</td>
                    <td>-</td>
                    </tr>
                    <tr>
                    <td>Sprint 2</td>
                    <td>4 Minggu</td>
                    <td>Checklist Crane & Shift Leader</td>
                    <td>
                        1. Penambahan kapasitas crane milik divisi produksi pada checklist crane di fitur form checklist<br>
                        2. Penambahan shift leader pada checklist crane di fitur form checklist<br>
                        3. Perancangan sistem
                    </td>
                    <td>Semua selesai</td>
                    <td>-</td>
                    <td>1. Checklist crane & shift leader pada form check</td>
                    </tr>
                    <tr>
                    <td>Sprint 3</td>
                    <td>4 Minggu</td>
                    <td>Error Handling & Review</td>
                    <td>
                        1. Penambahan error handling yang lebih baik<br>
                        2. Perancangan sistem
                    </td>
                    <td>Semua selesai</td>
                    <td>-</td>
                    <td>1. Error handling</td>
                    </tr>
                    <tr>
                    <td>Sprint 4</td>
                    <td>3 Minggu</td>
                    <td>Penyempurnaan Mapping Muat & Finalisasi</td>
                    <td>
                        1. Menghilangkan penggunaan SPK pada Mapping Muat<br>
                        2. Perancangan sistem
                    </td>
                    <td>Semua selesai</td>
                    <td>-</td>
                    <td>1. Mapping</td>
                    </tr>
                </tbody>
                </table>

        </div>
    </div>
</div>
@endsection