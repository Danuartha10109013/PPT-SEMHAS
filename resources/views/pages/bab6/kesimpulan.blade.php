@extends('layout.main')

@section('title', 'BAB 6 || Kesimpulan')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="mb-4"><i class="fas fa-clipboard-check text-success"></i> BAB 6 || Kesimpulan</h1>
            
            <p class="text-justify">
                Berdasarkan hasil pengembangan dan evaluasi terhadap <strong>Sistem Informasi Manajemen Operasional PT Tata Metal Lestari</strong>, dapat disimpulkan bahwa:
            </p>

            <ol class="text-justify">
                <li>
                    Sistem informasi yang dikembangkan mampu meningkatkan dokumentasi dan efisiensi operasional, khususnya dalam fitur <strong>checklist crane</strong>, dengan menambahkan pencatatan kapasitas crane dan nama shift leader.
                </li>
                <li>
                    Penghapusan <strong>Sistem Perintah Kerja (SPK)</strong> pada fitur <strong>Mapping Muat</strong> berdasarkan hasil <strong>User Acceptance Testing (UAT)</strong> menjadikan sistem lebih sesuai dengan kondisi bisnis di lapangan.
                </li>
                <li>
                    Penerapan metode <strong>Agile</strong> dengan framework <strong>Scrum</strong> memungkinkan pengembangan sistem yang lebih terstruktur, fleksibel, dan terfokus pada kebutuhan pengguna melalui tahapan product backlog, sprint planning, sprint execution, hingga sprint review.
                </li>
                <li>
                    Evaluasi kualitas perangkat lunak dengan <strong>McCall’s Model</strong> menunjukkan hasil sangat baik pada sebagian besar aspek, seperti <em>reliability</em>, <em>testability</em>, <em>reusability</em>, dan <em>interoperability</em>. Namun, masih terdapat beberapa aspek yang perlu ditingkatkan, seperti <em>maintainability</em> dan <em>efficiency</em>.
                </li>
                <li>
                    Salah satu kendala yang belum berhasil diatasi dalam penelitian ini adalah <strong>upgrade server</strong>. Kegagalan dalam meningkatkan spesifikasi server berdampak pada performa sistem, terutama dalam hal kecepatan boot dan kenyamanan pengguna saat mengakses aplikasi. Hal ini menjadi perhatian penting untuk pengembangan di masa mendatang agar sistem dapat berjalan lebih responsif dan stabil.
                </li>
            </ol>

            <p class="mt-3 text-justify">
                Dengan demikian, sistem yang telah dikembangkan telah memberikan kontribusi signifikan dalam mendukung kebutuhan <strong>Divisi Warehouse dan Produksi</strong>, meskipun masih diperlukan perbaikan lanjutan di beberapa aspek teknis.
            </p>
        </div>
    </div>
</div>
@endsection
