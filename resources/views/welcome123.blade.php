<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Welcome || PT Tata Metal Lestari</title>
      <link rel="shortcut icon" href="{{asset('Logo TML.png')}}" />

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
      <style>
         body {
            background: linear-gradient(135deg, #a8b2b5, #6ca885, #67a8ce);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
         }

         .judul {
            text-align: center;
            margin-bottom: 20px;
         }

         .judul h1 {
            font-size: 2.5rem;
            color: #ffffff;
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
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
         }

         .menu-item {
            width: 150px;
            height: 150px;
            background-color: rgba(255, 255, 255, 0.3); /* Transparent white */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            transition: transform 0.3s ease, background-color 0.3s ease;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
         }

         .menu-item i {
            font-size: 50px;
            margin-bottom: 10px;
         }

         .menu-item:hover {
            transform: translateY(-10px);
            background-color: rgba(255, 255, 255, 0.5);
         }

         .menu-title {
            font-size: 18px;
         }
         h1 {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold; /* Memberikan ketebalan yang kuat */
            letter-spacing: 1px; /* Menambah spasi antar huruf */
            text-transform: uppercase; /* Mengubah huruf menjadi kapital */
            font-style: italic; /* Memberikan style italic */
            }

      </style>
   </head>
   <body>
      <div class="judul">
         <h1 style="font-size: 2em;font-weight: bolder">Pengembangan</h1>
         <h1 style="font-size: 2em;font-weight: bolder">Sistem Informasi Manajemen Operasional</h1>
         <h1 style="font-size: 1em">PT. Tata Metal Lestari</h1>
      </div>

      <div class="gambar">
         <img src="{{ asset('Logo TML.png') }}" alt="Logo PT Tata Metal Lestari">
      </div>
         <div class="menu-container">
            <a href="{{route('bab1')}}" class="menu-item">
               <div>
                  <i class="mdi mdi-text-box-multiple"></i>
                  <div class="menu-title"><strong>BAB 1</strong></div>
               </div>
            </a>

            <a href="{{route('bab2')}}" class="menu-item">
               <div>
                  <i class="mdi mdi-text-box-multiple"></i>
                  <div class="menu-title"><strong>BAB 2</strong></div>
               </div>
            </a>
            <a href="{{route('bab3')}}" class="menu-item">
               <div>
                  <i class="mdi mdi-text-box-multiple"></i>
                  <div class="menu-title"><strong>BAB 3</strong></div>
               </div>
            </a>

            <a href="{{route('bab4')}}" class="menu-item">
               <div>
                  <i class="mdi mdi-text-box-multiple"></i>
                  <div class="menu-title"><strong>BAB 4</strong></div>
               </div>
            </a>
           
         <a href="{{route('bab5')}}" class="menu-item">
               <div>
                  <i class="mdi mdi-text-box-multiple"></i>
                  <div class="menu-title"><strong>BAB 5</strong></div>
               </div>
            </a>

            <a href="{{route('bab6')}}" class="menu-item">
               <div>
                  <i class="mdi mdi-text-box-multiple"></i>
                  <div class="menu-title"><strong>BAB 6</strong></div>
               </div>
            </a>

         </div>
         
         <p class="mt-5"><strong>Disusun Oleh : Danuartha</strong></p>
         <p class=""><strong>NIM : 10109013</strong></p>
        
         
      
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
