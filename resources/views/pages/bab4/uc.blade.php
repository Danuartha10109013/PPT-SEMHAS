@extends('layout.main')

@section('title', 'BAB 4 || Use Case Diagram')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h1>BAB 4 || Use Case Diagram</h1>
            <!-- Trigger Image -->
            <center>
                <img id="previewImage" src="{{ asset('UC.jpg') }}" width="30%" alt="Use Case Diagram" style="cursor: zoom-in;">
            </center>

            <!-- Modal Structure -->
            <div id="imageModal" class="image-modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="modalImg">
            </div>

            <!-- Styles -->
            <style>
            .image-modal {
                display: none;
                position: fixed;
                z-index: 9999;
                padding-top: 50px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0,0,0,0.9);
            }
            .image-modal .modal-content {
                margin: auto;
                display: block;
                max-width: 90%;
                max-height: 80vh;
            }
            .image-modal .close {
                position: absolute;
                top: 20px;
                right: 35px;
                color: white;
                font-size: 40px;
                font-weight: bold;
                cursor: pointer;
            }
            .image-modal .close:hover {
                color: #ccc;
            }
            </style>

            <!-- Script -->
            <script>
            document.getElementById('previewImage').onclick = function() {
                var modal = document.getElementById('imageModal');
                var modalImg = document.getElementById('modalImg');
                modal.style.display = "block";
                modalImg.src = this.src;
            };

            document.querySelector('#imageModal .close').onclick = function() {
                document.getElementById('imageModal').style.display = "none";
            };

            window.onclick = function(event) {
                var modal = document.getElementById('imageModal');
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
            </script>

        </div>
    </div>
</div>
@endsection