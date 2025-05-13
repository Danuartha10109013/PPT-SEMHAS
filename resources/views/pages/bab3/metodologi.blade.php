@extends('layout.main')

@section('title', 'BAB 3 || Metodologi yang Digunakan')

@section('content')
<div class="container">
    <style>
        /* Ensure modal appears above all content */
        #imgModal {
            display: none;
            position: fixed;
            z-index: 99999; /* <-- increased z-index */
            top: 0;
            left: 0;
            width: 85vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.9);
            overflow: auto;
        }

        /* Centered modal image */
        #imgModalContent {
            display: block;
            margin: 50px auto;
            max-width: 90%;
            max-height: 90%;
            box-shadow: 0 0 10px #fff;
            border-radius: 8px;
        }

        /* Close button */
        #imgModalClose {
            position: fixed;
            top: 20px;
            right: 30px;
            font-size: 40px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            z-index: 100000;
        }
        </style>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 3 || Metodologi yang Digunakan</h1>
            <br>
            <center class="mb-3"><img src="{{asset('Agile.png')}}" width="30%" alt=""></center>
            <p class="text text-justify">Dalam melakukan pengembangan Sistem Informasi Manajemen Operasional PT Tata Metal Lestari ini, metodologi yang digunakan adalah Agile dengan framework Scrum yang memiliki adaptabilitas dan fleksibilitas yang tinggi (Hilmyansyah dkk., 2022). Secara singkat metodologi scrum adalah Scrum adalah kerangka kerja dalam pengembangan perangkat lunak yang mengadopsi prinsip-prinsip Agile  (Hafidhin dkk., 2025).</p>
           

                <center>
                    <img src="{{ asset('MetodologiScrumMe.jpg') }}" id="zoomImage" width="40%" alt="Scrum Diagram" style="cursor: zoom-in;">
                </center>

                <!-- Modal Container -->
                <div id="imgModal">
                    <span id="imgModalClose">&times;</span>
                    <img id="imgModalContent">
                </div>
                
            <p class="text text-justify mt-3">Berdasarkan metode diatas tahapan yang akan dilakukan dengan menerapkan metodologi Agile dengan framework Scrum adalah sebagai berikut :</p>
            <ul class="text text-justify">
                <li>1)	Product Backlog <br>
                Pada tahap ini di buat perencanaan daftar kebutuhan sistem yang akan dikembangankan oleh pengembang. Mencakup list fitur yang akan dikembangkan.
                </li>
                <li>2)	Sprint Planning <br>
                Tahap ini dilakukan perencanaan pembagian backlog kedalam setiap sprintnya yang akan menghasilkan sprint backlog. Dalam sprint planning ditentukan sprint backlog yang akan di capai dalam setiap sprint
                </li>
                <li>3)	Sprint Execution <br>
                Tahap ini merupakan tahap eksekusi dari sprint planning yang mengacu kepada sprint backlog. Setelah setiap sprint selesai diadakan sprint review untuk menentukan backlog sudah tercapai atau belum.
                </li>
                <li>4)	Increment <br>
                Pada tahap ini backlog pada sprint telah selesai dikerjakan, apabila hasilnya telah sesuai maka backlog siap di rilis, namun apabila belum memenuhi backlog maka akan dilakukan sprint kembali setelah dilakukan sprint review kepada stakeholders. Fitur akan dianggap increment apabila sudah memnuhi criteria yang ditentukan oleh stakeholders.
                </li>
                <li>5)	Sprint Retrospective <br>
                Pada tahap ini dilakukan evaluasi untuk setiap pengerjaan sprint. Tujuan dari dilakukannya tahap ini adalah untuk meningkatkan kefisiensi dan kulitas kerja dibandingkan dengan sprint sebelumnya.
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