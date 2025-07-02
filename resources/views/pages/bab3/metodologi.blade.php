@extends('layout.main')

@section('title', 'BAB 3 || Metodologi yang Digunakan')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
            <h2>BAB 3 || Metodologi yang Digunakan</h2>
        </div>
        <div class="card-body">
            <p class="text-justify">
                Dalam melakukan pengembangan Sistem Informasi Manajemen Operasional PT Tata Metal Lestari ini, metodologi yang digunakan adalah <strong>Agile</strong> dengan framework <strong>Scrum</strong> yang memiliki adaptabilitas dan fleksibilitas yang tinggi (Hilmyansyah dkk., 2022). Secara singkat metodologi Scrum adalah kerangka kerja dalam pengembangan perangkat lunak yang mengadopsi prinsip-prinsip Agile (Hafidhin dkk., 2025).
            </p>

            <div class="text-center mb-4">
                <img src="{{asset('Agile.png')}}" width="40%" alt="Agile Methodology">
            </div>

            <h4 class="mt-4 mb-3 text-center">Metodologi Scrum</h4>
            <center>
                <img src="{{ asset('MetodologiScrumMe.jpg') }}" id="zoomImage" class="img-fluid" width="60%" alt="Scrum Diagram" style="cursor: zoom-in;">
            </center>

            <!-- Modal Container -->
            <div id="imgModal">
                <span id="imgModalClose">&times;</span>
                <img id="imgModalContent" class="img-fluid">
            </div>

            <p class="text-justify mt-4">Berdasarkan metode di atas, tahapan yang akan dilakukan dengan menerapkan metodologi <strong>Agile</strong> dengan framework <strong>Scrum</strong> adalah sebagai berikut:</p>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>1) Product Backlog</h5>
                    <p>Pada tahap ini dibuat perencanaan daftar kebutuhan sistem yang akan dikembangkan oleh pengembang. Mencakup list fitur yang akan dikembangkan.</p>
                </li>
                <li class="list-group-item">
                    <h5>2) Sprint Planning</h5>
                    <p>Tahap ini dilakukan perencanaan pembagian backlog ke dalam setiap sprint-nya yang akan menghasilkan sprint backlog. Dalam sprint planning ditentukan sprint backlog yang akan dicapai dalam setiap sprint.</p>
                </li>
                <li class="list-group-item">
                    <h5>3) Sprint Execution</h5>
                    <p>Tahap ini merupakan tahap eksekusi dari sprint planning yang mengacu kepada sprint backlog. Setelah setiap sprint selesai diadakan sprint review untuk menentukan apakah backlog sudah tercapai atau belum.</p>
                </li>
                <li class="list-group-item">
                    <h5>4) Increment</h5>
                    <p>Pada tahap ini backlog pada sprint telah selesai dikerjakan, apabila hasilnya telah sesuai maka backlog siap di rilis. Namun apabila belum memenuhi backlog, maka akan dilakukan sprint kembali setelah dilakukan sprint review kepada stakeholders. Fitur akan dianggap increment apabila sudah memenuhi kriteria yang ditentukan oleh stakeholders.</p>
                </li>
                <li class="list-group-item">
                    <h5>5) Sprint Retrospective</h5>
                    <p>Pada tahap ini dilakukan evaluasi untuk setiap pengerjaan sprint. Tujuan dari dilakukannya tahap ini adalah untuk meningkatkan efisiensi dan kualitas kerja dibandingkan dengan sprint sebelumnya.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById("imgModal");
    const img = document.getElementById("zoomImage");
    const modalImg = document.getElementById("imgModalContent");
    const closeBtn = document.getElementById("imgModalClose");

    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
    }

    closeBtn.onclick = function () {
        modal.style.display = "none";
    }

    modal.onclick = function (e) {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    }
</script>
@endsection
