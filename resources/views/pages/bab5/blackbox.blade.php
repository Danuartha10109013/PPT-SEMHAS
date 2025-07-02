@extends('layout.main')

@section('title', 'BAB 5 || Blackbox')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="mb-4"><i class="fas fa-vial text-primary"></i> BAB 5 || Blackbox</h1>
            <p class="text-justify">
                Pengujian model <strong>Black Box</strong> dilakukan dengan mempertimbangkan sistem sebagai suatu <em>kotak hitam</em>, di mana input diberikan ke sistem dan output dievaluasi tanpa memperhatikan bagaimana sistem mengolah input tersebut. Metode ini fokus pada fungsi dan perilaku eksternal sistem dengan tujuan memastikan bahwa sistem memberikan hasil yang diharapkan tanpa mengetahui detail implementasinya.
            </p>

            <h5 class="mt-4"><i class="fas fa-check-square text-success"></i> Hasil Pengujian</h5>
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-secondary text-center">
                        <tr>
                            <th><i class="fas fa-file-alt"></i> Pengujian</th>
                            <th><i class="fas fa-calendar-alt"></i> Tanggal</th>
                            <th><i class="fas fa-tasks"></i> Hasil Uji</th>
                            <th><i class="fas fa-user"></i> Nama Penguji</th>
                            <th><i class="fas fa-percentage"></i> Test Case Validity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ujians = [
                                ['ke' => 1, 'tanggal' => '07/05/2025', 'penguji' => 'Sheva Virtalioka'],
                                ['ke' => 2, 'tanggal' => '07/05/2025', 'penguji' => 'Asep Saepulloh'],
                                ['ke' => 3, 'tanggal' => '07/05/2025', 'penguji' => 'Rifky Frimanda']
                            ];
                        @endphp

                        @foreach($ujians as $ujian)
                        <tr>
                            <td class="text-center">Pengujian ke-{{ $ujian['ke'] }}</td>
                            <td class="text-center">{{ $ujian['tanggal'] }}</td>
                            <td>
                                <ul class="mb-0 ps-3">
                                    <li>Kelas Uji: 17</li>
                                    <li>Bulir Uji: 84</li>
                                    <li>Test Case: 84</li>
                                    <li>Jumlah Valid: <strong>84</strong></li>
                                    <li>Jumlah Tidak Valid: <strong>0</strong></li>
                                </ul>
                            </td>
                            <td class="text-center">{{ $ujian['penguji'] }}</td>
                            <td class="text-center">
                                <span class="badge bg-success fs-6">100%</span><br>
                                <small>(84 / 84)</small>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
