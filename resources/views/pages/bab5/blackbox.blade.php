@extends('layout.main')

@section('title', 'BAB 5 || Blackbox')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 5 || Blackbox</h1>
            <p class="text text-justify">
                Pengujian model Black Box  dilakukan dengan mempertimbangkan sistem sebagai suatu kotak hitam, di mana input diberikan ke sistem dan output yang dihasilkan dievaluasi tanpa memperhatikan bagaimana sistem mengolah input tersebut. Metode ini fokus pada fungsi dan perilaku eksternal sistem. Tujuannya adalah untuk memastikan bahwa sistem memberikan hasil yang diharapkan tanpa perlu mengetahui rincian implementasinya.
            </p>

            <p>
                Hasil Pengujian
            </p>
            <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%;">
                <thead style="background-color: #f2f2f2;">
                    <tr>
                    <th>Pengujian</th>
                    <th>Tanggal</th>
                    <th>Hasil Uji</th>
                    <th>Nama Penguji</th>
                    <th>Test Case Validity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Pengujian ke-1</td>
                    <td>07/05/2025</td>
                    <td>
                        Kelas Uji: 17<br>
                        Bulir Uji: 84<br>
                        Test Case: 84<br>
                        Jumlah Test Case Valid: 84<br>
                        Jumlah Test Case Tidak Valid: 0
                    </td>
                    <td>Sheva Virtalioka</td>
                    <td>(84 / 84) × 100% = <strong>100%</strong></td>
                    </tr>
                    <tr>
                    <td>Pengujian ke-2</td>
                    <td>07/05/2025</td>
                    <td>
                        Kelas Uji: 17<br>
                        Bulir Uji: 84<br>
                        Test Case: 84<br>
                        Jumlah Test Case Valid: 84<br>
                        Jumlah Test Case Tidak Valid: 0
                    </td>
                    <td>Asep Saepulloh</td>
                    <td>(84 / 84) × 100% = <strong>100%</strong></td>
                    </tr>
                    <tr>
                    <td>Pengujian ke-3</td>
                    <td>07/05/2025</td>
                    <td>
                        Kelas Uji: 17<br>
                        Bulir Uji: 84<br>
                        Test Case: 84<br>
                        Jumlah Test Case Valid: 84<br>
                        Jumlah Test Case Tidak Valid: 0
                    </td>
                    <td>Rifky Frimanda</td>
                    <td>(84 / 84) × 100% = <strong>100%</strong></td>
                    </tr>
                </tbody>
                </table>

        </div>
    </div>
</div>
@endsection