<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome || PT Tata Metal Lestari</title>
    <link rel="shortcut icon" href="{{asset('Logo TML.png')}}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        body {
            background: linear-gradient(135deg, #536d75, #086c32, #2c5268);
            color: white;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .judul {
            text-align: center;
            padding: 40px 20px 20px;
        }

        .judul h1 {
            font-size: 2.5rem;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-style: italic;
        }

        .gambar {
            text-align: center;
            margin-bottom: 20px;
        }

        .gambar img {
            max-width: 150px;
        }

        .menu-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .menu-button {
            width: 150px;
            height: 150px;
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            transition: all 0.3s ease;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .menu-button i {
            font-size: 50px;
            margin-bottom: 10px;
        }

        .menu-button:hover {
            transform: translateY(-10px);
            background-color: rgba(255, 255, 255, 0.5);
        }

        section {
            padding: 80px 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding-bottom: 40px;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

    <div class="judul" data-aos="fade-down">
        <h1>Pengembangan</h1>
        <h1>Sistem Informasi Manajemen Operasional</h1>
        <h1 style="font-size: 1em;">PT. Tata Metal Lestari</h1>
    </div>

    <div class="gambar" data-aos="zoom-in">
        <img src="{{ asset('Logo TML.png') }}" alt="Logo PT Tata Metal Lestari">
    </div>

    <div class="menu-container">
        @for ($i = 1; $i <= 6; $i++)
        <div onclick="document.getElementById('bab{{$i}}').scrollIntoView({ behavior: 'smooth' });" class="menu-button" data-aos="flip-up" data-aos-delay="{{ $i * 100 }}">
            <i class="mdi mdi-text-box-multiple"></i>
            <div class="menu-title"><strong>BAB {{ $i }}</strong></div>
        </div>
        @endfor
    </div>

    <footer>
        <p><strong>Disusun Oleh: Danuartha</strong></p>
        <p><strong>NIM: 10109013</strong></p>
    </footer>

      {{-- @for ($i = 1; $i <= 6; $i++)
      <section id="bab{{$i}}" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
         <div class="container">
            <h2 class="section-title">BAB {{ $i }}</h2>
            <p>Isi konten untuk BAB {{ $i }} akan ditampilkan di sini. Anda dapat mengisi dengan ringkasan, tabel, atau informasi terkait lainnya.</p>
         </div>
      </section>
      @endfor --}}
      <section id="bab1" data-aos="fade-up" data-aos-delay="100"
    style="position: relative; background: rgba(255,255,255,0.05); backdrop-filter: blur(5px); padding: 50px 0;">
    <div class="container position-relative" style="z-index: 1;">
        <h2 class="section-title text-center mb-5 text-white">📘 BAB 1: PENDAHULUAN</h2>
        <div class="row align-items-center">

            <!-- Left Column -->
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                <h5 class="text-white">📌 Latar Belakang</h5>
                <p class="text-white text-justify">
                    Penelitian ini didasarkan pada evaluasi <strong>McCall's Software Quality Model</strong> terhadap <em>Sistem Informasi Digital Warehouse</em>
                    yang dikembangkan saat PKL dan telah digunakan oleh Divisi Warehouse PT Tata Metal Lestari sejak Oktober 2024 
                    (Danuartha; Khoirunnisa & Sahistyo, 2025).
                </p>
                <p class="text-white text-justify">
                    🔧 Dari hasil evaluasi ditemukan beberapa kendala:
                </p>
                <ul class="text-white">
                    <li>🏗️ <strong>Kapasitas crane</strong> belum optimal → terjadinya kesulitan saat ada penambahan crane</li>
                    <li>🛠️ <strong>Error handling</strong> masih terbatas → beberapa error tidak terdeteksi</li>
                    <li>📉 <strong>SPK</strong> belum sesuai kebutuhan → inefisiensi pengambilan keputusan</li>
                    <li>🧩 <strong>Maintainability rendah</strong> → sulit dikembangkan karena kurang dokumentasi</li>
                    <li>🐢 <strong>Loading lambat</strong> → menghambat akses informasi pengguna</li>
                </ul>
            </div>

            <!-- Right Column -->
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                <h5 class="text-white">❓ Rumusan Masalah</h5>
                <ul class="text-white">
                    <li>🤔 Bagaimana sistem mengatasi kendala operasional setelah evaluasi McCall’s Model?</li>
                    <li>📲 Bagaimana pengembangan sistem mendukung Divisi Produksi secara efektif?</li>
                    <li>🔄 Bagaimana meningkatkan maintainability sistem untuk pengembangan lebih lanjut?</li>
                    <li>⚡ Bagaimana meningkatkan efisiensi & performa sistem operasional warehouse?</li>
                </ul>

                <h5 class="text-white mt-4">🎯 Tujuan Penelitian</h5>
                <ul class="text-white">
                    <li>🚀 Mengembangkan sistem berbasis hasil evaluasi McCall’s untuk atasi kendala operasional.</li>
                    <li>🧑‍💼 Menambahkan fitur <strong>superadmin</strong> untuk manajemen pegawai/admin.</li>
                    <li>🛡️ Penerapan <strong>error handling</strong>, <strong>GitHub</strong>, <strong>migration</strong>, dan <strong>auto-backup mingguan</strong>.</li>
                    <li>🔁 Migrasi server dari <strong>Apache ke NGINX</strong> demi performa lebih optimal.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="bab2" data-aos="fade-up" data-aos-delay="200"
    style="position: relative; background: rgba(255,255,255,0.05); backdrop-filter: blur(4px); padding: 20px 0;">
    <div class="container position-relative" style="z-index: 1;">
        <h2 class="section-title text-center mb-2 text-white">📗 BAB 2: LANDASAN TEORI</h2>

        <div data-aos="fade-up" data-aos-delay="300">
            <h5 class="text-white mb-3">🧠 Penelitian yang Relevan</h5>
            <p class="text-white">
                Berikut adalah beberapa penelitian yang relevan dan menjadi dasar atau referensi dalam pengembangan sistem ini:
            </p>

            <div class="table-responsive">
                <table class="table table-bordered  table-hover text-white bg-transparent border-white mt-1">
                    <thead class="table-light text-dark">
                        <tr class="text-center align-middle">
                            <th style="min-width: 40px;">No</th>
                            <th>Nama Peneliti</th>
                            <th>Judul</th>
                            <th>Masalah</th>
                            <th>Metode</th>
                            <th>Hasil</th>
                            <th>Keterkaitan</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 0.9rem;">
                        <tr>
                            <td class="text-center">1</td>
                            <td>Danuartha, Khoirunnisa, Sahistyo (2025)</td>
                            <td>Digital Warehouse Information System PT Tata Metal Lestari</td>
                            <td>Penggunaan sistem manual berbasis kertas menyebabkan inefisiensi dan human error</td>
                            <td>Scrum, C4.5, DSS</td>
                            <td>Sistem berhasil meningkatkan efisiensi, akurasi, dan mendukung ISO 14001</td>
                            <td>Dasar awal evaluasi sistem yang ditingkatkan dalam penelitian ini</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Max, Gugat (2023)</td>
                            <td>Revitalisasi Manajemen Gudang Logistik</td>
                            <td>Efisiensi dan pelayanan logistik masih rendah</td>
                            <td>Studi Literatur</td>
                            <td>Sistem inventory digital yang meningkatkan efisiensi</td>
                            <td>Relevan dalam optimasi checklist crane</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Widiarta dkk. (2023)</td>
                            <td>SI Inventory dengan Agile (Studi Toko Nada)</td>
                            <td>Persediaan barang tidak efisien</td>
                            <td>Agile</td>
                            <td>Aplikasi gudang berbasis web-mobile</td>
                            <td>Terkait pengelolaan alat produksi dan monitoring crane</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Wau (2022)</td>
                            <td>SI Persediaan Gudang Berbasis Web</td>
                            <td>Pencatatan belum terkomputerisasi</td>
                            <td>Waterfall</td>
                            <td>Mudah mengelola data persediaan</td>
                            <td>Mendukung pencatatan kapasitas crane</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Novianti, Sari (2022)</td>
                            <td>Gudang Material dengan Metode FAST</td>
                            <td>Human error akibat pencatatan manual</td>
                            <td>FAST</td>
                            <td>Meminimalkan kesalahan & efisiensi pengambilan barang</td>
                            <td>Untuk tracking checklist crane</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Farhan dkk. (2024)</td>
                            <td>Optimisasi Pagination & Error Handling</td>
                            <td>Menurunnya performa akibat data besar</td>
                            <td>Whitebox Testing</td>
                            <td>Peningkatan performa aplikasi secara signifikan</td>
                            <td>Referensi peningkatan error handling sistem</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Aini, Ratnawati (2024)</td>
                            <td>Implementasi McCall pada Website Diskominfotik</td>
                            <td>Kualitas sistem belum terukur baik</td>
                            <td>McCall</td>
                            <td>Rekomendasi perbaikan berdasar faktor kualitas McCall</td>
                            <td>Menjadi acuan model evaluasi kualitas perangkat lunak</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="bab3" data-aos="fade-up" data-aos-delay="300"
    style="position: relative; background: rgba(255,255,255,0.05); backdrop-filter: blur(4px); padding: 80px 0;">
    <div class="container position-relative" style="z-index: 1;">
        <h2 class="section-title text-center mb-5 text-white">📘 BAB 3: METODOLOGI PENELITIAN</h2>
        <div class="row gy-5">
            <!-- Tahapan Penelitian -->
            <div class="col-md-4" data-aos="fade-right" data-aos-delay="400">
                <h5 class="text-white">📌 Tahapan Penelitian</h5>
                <img src="{{ asset('bab3/tahapamnpenelitian.jpg') }}" alt="Tahapan Penelitian"
                    class="img-fluid rounded shadow mb-3">
                <ol class="text-white small ps-3">
                    <li>Melakukan evaluasi sistem eksisting dengan model McCall.</li>
                    <li>Mengidentifikasi kekurangan sistem dari hasil evaluasi.</li>
                    <li>Menyusun rekomendasi pengembangan berdasarkan temuan.</li>
                    <li>Melaksanakan pengembangan sistem menggunakan metode <strong>Scrum</strong>.</li>
                </ol>
            </div>

            <!-- Evaluasi McCall -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <h5 class="text-white">🧪 Evaluasi McCall's</h5>
                <p class="text-white small text-justify">
                    Evaluasi kualitas menggunakan <strong>McCall’s Software Quality Model</strong> meliputi:
                    <ul class="text-white small ps-3">
                        <li><strong>Reliability:</strong> dengan <code class="text-warning">WAPT</code> untuk mengukur kestabilan sistem</li>
                        <li><strong>Efficiency:</strong> dengan <code class="text-warning">Google Lighthouse</code> untuk performa loading & resource</li>
                        <li><strong>Integrity:</strong> dengan <code class="text-warning">Sucuri SiteCheck</code> untuk keamanan & ancaman eksternal</li>
                    </ul>
                    Evaluasi juga dilakukan melalui <strong>kuesioner pengguna</strong> berdasarkan:
                </p>
                <ul class="text-white small ps-3">
                    <li>✔️ Reliability, Efficiency, Integrity (persepsi & teknis)</li>
                    <li>✔️ Usability (kemudahan penggunaan)</li>
                    <li>✔️ Maintainability (kemudahan pemeliharaan)</li>
                    <li>✔️ Flexibility (fleksibilitas sistem terhadap perubahan)</li>
                    <li>✔️ Testability (kemudahan pengujian sistem)</li>
                    <li>✔️ Product Transition (adaptasi dan integrasi sistem)</li>
                </ul>
            </div>

            <!-- Metodologi Scrum -->
            <div class="col-md-4" data-aos="fade-left" data-aos-delay="600">
                <h5 class="text-white">⚙️ Metodologi Pengembangan: Scrum</h5>
                <img src="{{ asset('bab3/methodolgy.jpg') }}" alt="Scrum Method"
                    class="img-fluid rounded shadow mb-3">
                <ul class="text-white small ps-3">
                    <li><strong>Product Backlog:</strong> daftar kebutuhan sistem & fitur utama.</li>
                    <li><strong>Sprint Planning:</strong> pembagian backlog ke dalam sprint.</li>
                    <li><strong>Sprint Execution:</strong> pelaksanaan dan review sprint.</li>
                    <li><strong>Increment:</strong> rilis fitur setelah validasi stakeholders.</li>
                    <li><strong>Sprint Retrospective:</strong> evaluasi kinerja untuk peningkatan efisiensi.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="bab4" data-aos="fade-up" data-aos-delay="300" style="position: relative; background: rgba(255,255,255,0.05); backdrop-filter: blur(4px); padding: 50px 0;">
    <div class="container position-relative" style="z-index: 1;">
        <h2 class="section-title text-center mb-3 text-white">BAB 4: ANALISISI DAN PERANCANGAN</h2>
        <div class="row text-white">
            <div class="col-md-6" data-aos="fade-right">
                <h5>📊 Analisis</h5>
                <p>
                    Analisis dilakukan terhadap sistem eksisting berdasarkan McCall’s Model. Permasalahan utama yang ditemukan meliputi lambatnya sistem, error handling yang kurang informatif, dan fitur SPK yang tidak relevan.
                    <br><br>
                    Untuk itu disusun <strong>Product Backlog</strong> sebagai dasar pengembangan, dibagi ke dalam beberapa sprint:
                </p>
                <ul>
                    <li>📝 Sprint 1 – Fokus pada form Checklist Crane dan Shift Leader.</li>
                    <li>🔧 Sprint 2 – Perbaikan Error Handling dan penambahan fitur backup otomatis.</li>
                    <li>🚫 Sprint 3 – Penghapusan fitur SPK.</li>
                    <li>🧑‍💼 Sprint 4 – Penambahan fitur Superadmin dan manajemen pegawai.</li>
                    <li>🌐 Sprint 5 – Penyesuaian hak akses dan migrasi dari Apache ke NGINX.</li>
                </ul>
                            </div>

            <div class="col-md-6" data-aos="fade-left">
                <h5>🎨 Perancangan</h5>
                <p>
                    Proses perancangan mencakup desain ulang antarmuka pengguna, perancangan database (ERD), serta pembuatan UI/UX yang intuitif. 
                    <br><br>
                    Setiap sprint memiliki desain wireframe tersendiri yang menggambarkan perbaikan dan penambahan fitur sesuai dengan kebutuhan pengguna di lapangan.
                </p>
                <ul>
                    <li>📋 Form Check Page (Checklist Crane)</li>
                    <li>❗ Halaman Error Handling (404, 500, Expired)</li>
                    <li>🗺️ Mapping Page</li>
                    <li>🔑 Superadmin dan akses pengguna</li>
                    <li>⚙️ Desain Dashboard Web yang telah dimigrasikan ke NGINX</li>
                </ul>
            </div>
        </div>
        <div class="container my-4" data-aos="fade-up" data-aos-delay="200">
            <h5 class="text-white mb-3 text-center">📐 Diagram dan Perancangan Sistem</h5>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-3">
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        🧾 Use Case Diagram
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        🔄 Activity Diagram
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        ⏱️ Sequence Diagram
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        🧩 Class Diagram
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        🎨 Perancangan Antarmuka
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        🗃️ Entity Relationship Diagram
                    </a>
                </div>
            </div>
        </div>


    </div>
</section>

<section id="bab5" data-aos="fade-up" data-aos-delay="400" style="position: relative; background: rgba(255,255,255,0.08); backdrop-filter: blur(4px); padding: 80px 0;">
    <div class="container position-relative" style="z-index: 1;">
        <h2 class="section-title text-center mb-5 text-white">BAB 5: IMPLEMENTASI & EVALUASI</h2>
        <div class="row text-white">
            <div class="col-md-6" data-aos="fade-up-right">
                <h5>💻 Implementasi</h5>
                <p>
                    Implementasi dilakukan secara bertahap berdasarkan hasil sprint. Setiap sprint menghasilkan fitur baru yang langsung diuji:
                </p>
                <ul>
                    <li>📋 Sprint 1 – Halaman Form Checklist dan Shift Leader</li>
                    <li>🛠️ Sprint 2 – Halaman error handling dan backup database otomatis</li>
                    <li>🗺️ Sprint 3 – Mapping tanpa fitur SPK</li>
                    <li>👤 Sprint 4 – Fitur Superadmin</li>
                    <li>🔐 Sprint 5 – Hak akses & migrasi server</li>
                </ul>
                <p><em>*Gambar halaman sistem dari setiap sprint bisa diletakkan di sini*</em></p>
            </div>

            <div class="col-md-6" data-aos="fade-up-left">
                <h5>📈 Evaluasi</h5>
                <p>
                    Evaluasi dilakukan melalui pengujian BlackBox, kuesioner McCall's Model, dan User Acceptance Testing (UAT). Hasil evaluasi menunjukkan:
                </p>
                <ul>
                    <li>✅ Correctness: 95%</li>
                    <li>✅ Reliability: 90%</li>
                    <li>⚠️ Efficiency: Perlu ditingkatkan</li>
                    <li>⚠️ Maintainability: Perlu dokumentasi kode lebih lanjut</li>
                </ul>
                <p>
                    Metode evaluasi mencakup WAPT untuk reliability, Lighthouse untuk efficiency, dan Sucuri SiteCheck untuk integrity. UAT dilakukan untuk menilai kenyamanan pengguna dalam menggunakan sistem.
                </p>
                
            </div>
        </div>
        <div class="container my-4" data-aos="fade-up" data-aos-delay="200">
            <h5 class="text-white mb-3 text-center">🛠️ Implementasi & Evaluasi Sistem</h5>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        🧩 Implementasi
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        🧪 Blackbox Testing
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        👥 User Acceptance Testing
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-outline-light w-100 shadow-sm">
                        📄 Dokumentasi UAT
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="bab6" data-aos="fade-up" data-aos-delay="500"
    style="position: relative; background: rgba(255,255,255,0.05); backdrop-filter: blur(4px); padding: 50px 0;">
    <div class="container position-relative" style="z-index: 1;">
        <h2 class="section-title text-center mb-5 text-white">📙 BAB 6: Kesimpulan dan Saran</h2>
        <div class="row gy-4 text-white">
            <!-- Kesimpulan -->
            <div class="col-md-6" data-aos="fade-right">
                <h5 class="mb-3">✅ Kesimpulan</h5>
                <ol class="ps-3">
                    <li>
                        Evaluasi dengan McCall’s Software Quality Model menunjukkan kualitas sistem sangat baik dalam aspek <em>reliability</em>, <em>testability</em>, <em>reusability</em>, dan <em>interoperability</em>. Perbaikan pada <em>maintainability</em> dan <em>efficiency</em> berhasil dilakukan melalui dokumentasi kode, error handling, dan migrasi server.
                    </li>
                    <li>
                        Sistem telah berhasil dikembangkan agar dapat digunakan oleh Divisi Produksi, terutama pada fitur <strong>checklist crane</strong>, yang mendukung kelancaran operasional dan pencatatan kapasitas crane serta identitas shift leader.
                    </li>
                    <li>
                        Maintainability meningkat dengan penerapan <strong>error handling</strong> yang lebih baik, penggunaan <strong>GitHub</strong> untuk version control, <strong>migration</strong> database, penambahan fitur <strong>master data</strong>, dan backup database otomatis mingguan.
                    </li>
                    <li>
                        Migrasi web server dari Apache ke NGINX berhasil meningkatkan efisiensi dan performa sistem. Skor kecepatan halaman <strong>Welcome</strong> meningkat dari 92 ke 100 (+8.7%), sedangkan <strong>Form Checklist</strong> naik dari 58 ke 67 (+15.5%), menunjukkan sistem kini lebih responsif dan stabil.
                    </li>
                </ol>
                <p class="mt-3">
                    Dengan demikian, seluruh <strong>tujuan penelitian telah tercapai</strong>, dan seluruh <strong>rumusan masalah berhasil terjawab</strong> secara efektif.
                </p>
            </div>

            <!-- Saran -->
            <div class="col-md-6" data-aos="fade-left">
                <h5 class="mb-3">💡 Saran</h5>
                <ul class="ps-3">
                    <li>🚀 <strong>Upgrade server</strong> perlu diprioritaskan untuk meningkatkan kecepatan akses, booting, dan kenyamanan penggunaan harian.</li>
                    <li>📘 Tambahkan fitur <strong>bantuan digital (help/FAQ)</strong> atau <strong>manual pengguna</strong> agar pengguna baru lebih mudah beradaptasi.</li>
                    <li>🔁 Lakukan <strong>pengujian performa berkala</strong> untuk menjaga kestabilan sistem seiring peningkatan pengguna dan kebutuhan bisnis.</li>
                    <li>👥 Libatkan <strong>pengguna dari berbagai divisi</strong> dalam setiap tahapan pengembangan berikutnya agar sistem benar-benar sesuai kebutuhan.</li>
                </ul>
            </div>
        </div>
    </div>
</section>



    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <!-- Tombol Scroll Up & Down -->
<!-- Tombol Scroll Up & Down -->
<div id="scroll-buttons" style="position: fixed; bottom: 30px; right: 30px; z-index: 999;">
    <button id="scroll-home" class="btn btn-light mb-2 rounded-circle shadow" title="Kembali ke Atas" style="width: 45px; height: 45px;">
        <i class="mdi mdi-home"></i>
    </button>
    <button id="scroll-up" class="btn btn-light mb-2 rounded-circle shadow" title="Sebelumnya" style="width: 45px; height: 45px; display: none;">
        <i class="mdi mdi-chevron-up"></i>
    </button>
    <button id="scroll-down" class="btn btn-light rounded-circle shadow" title="Selanjutnya" style="width: 45px; height: 45px;">
        <i class="mdi mdi-chevron-down"></i>
    </button>
</div>

<!-- Bootstrap & AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
        document.getElementById('scroll-home').addEventListener('click', () => {
        // Periksa apakah sudah di posisi paling atas (home)
        if (window.scrollY <= 10) {
            // Jika sudah di atas, reload halaman
            window.location.reload();
        } else {
            // Jika belum, scroll ke atas
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    });


    AOS.init({ duration: 1000, once: true });

    const sections = Array.from(document.querySelectorAll("section[id^='bab']"));
    let currentIndex = 0;

    function scrollToSection(index) {
        if (index >= 0 && index < sections.length) {
            currentIndex = index;
            sections[index].scrollIntoView({ behavior: "smooth", block: "start" });
        }
    }

    function updateScrollButtons() {
    const scrollY = window.scrollY;
    const buffer = 100;

    // Jika benar-benar di atas (belum ke section mana pun)
    if (scrollY <= 10) {
        currentIndex = -1;
    } else {
        sections.forEach((section, index) => {
            const offsetTop = section.offsetTop;
            const offsetBottom = offsetTop + section.offsetHeight;

            if (scrollY + buffer >= offsetTop && scrollY + buffer < offsetBottom) {
                currentIndex = index;
            }
        });
    }

    document.getElementById('scroll-up').style.display = currentIndex > 0 ? 'block' : 'none';
    document.getElementById('scroll-down').style.display = currentIndex < sections.length - 1 ? 'block' : 'none';
}


    document.getElementById('scroll-up').addEventListener('click', () => scrollToSection(currentIndex - 1));
    // document.getElementById('scroll-down').addEventListener('click', () => scrollToSection(currentIndex + 1));
        document.getElementById('scroll-down').addEventListener('click', () => {
        // Jika belum berada di section manapun (di bagian atas), scroll ke BAB 1
        if (currentIndex === -1) {
            scrollToSection(0);
        } else {
            scrollToSection(currentIndex + 1);
        }
    });

    window.addEventListener('scroll', updateScrollButtons);

    // Init state
    updateScrollButtons();
</script>


</body>
</html>
