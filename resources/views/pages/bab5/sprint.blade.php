@extends('layout.main')

@section('title', 'BAB 5 || Sprint Execution')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="mb-4"><i class="fas fa-running text-primary"></i> BAB 5 || Sprint Execution</h1>
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th><i class="fas fa-flag-checkered"></i> Sprint</th>
                            <th><i class="fas fa-clock"></i> Durasi</th>
                            <th><i class="fas fa-bullseye"></i> Sprint Goal</th>
                            <th><i class="fas fa-list-ul"></i> Item Backlog</th>
                            <th><i class="fas fa-check-double"></i> Increment Hasil</th>
                            <th><i class="fas fa-comments"></i> Sprint Review</th>
                            <th><i class="fas fa-paper-plane"></i> Increment Delivery</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sprint 1</td>
                            <td>3 Minggu</td>
                            <td>Analisis & perencanaan<br><small class="text-muted">berdasarkan Mc Call’s Model</small></td>
                            <td>Penerapan & perencanaan pengembangan dari Mc Call’s Model</td>
                            <td><span class="badge bg-success"><i class="fas fa-check-circle"></i> Selesai</span></td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Sprint 2</td>
                            <td>4 Minggu</td>
                            <td>Checklist Crane & Shift Leader</td>
                            <td class="text-start">
                                <ul class="list-unstyled mb-0">
                                    <li>✅ Penambahan kapasitas crane</li>
                                    <li>✅ Penambahan shift leader</li>
                                    <li>📐 Perancangan sistem</li>
                                </ul>
                            </td>
                            <td><span class="badge bg-success"><i class="fas fa-check-circle"></i> Selesai</span></td>
                            <td>-</td>
                            <td>📝 Checklist crane & shift leader</td>
                        </tr>
                        <tr>
                            <td>Sprint 3</td>
                            <td>4 Minggu</td>
                            <td>Error Handling & Review</td>
                            <td class="text-start">
                                <ul class="list-unstyled mb-0">
                                    <li>⚠️ Penambahan error handling</li>
                                    <li>📐 Perancangan sistem</li>
                                </ul>
                            </td>
                            <td><span class="badge bg-success"><i class="fas fa-check-circle"></i> Selesai</span></td>
                            <td>-</td>
                            <td>🔧 Error handling</td>
                        </tr>
                        <tr>
                            <td>Sprint 4</td>
                            <td>3 Minggu</td>
                            <td>Finalisasi & Mapping Muat</td>
                            <td class="text-start">
                                <ul class="list-unstyled mb-0">
                                    <li>🚫 Menghilangkan penggunaan SPK</li>
                                    <li>📐 Perancangan sistem</li>
                                </ul>
                            </td>
                            <td><span class="badge bg-success"><i class="fas fa-check-circle"></i> Selesai</span></td>
                            <td>-</td>
                            <td>🗺️ Mapping</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
