{{-- Made By: Guruh Alam Valencia --}}
<!-- Mohon maaf pak kalau kurang bagus, saya baru bisa mengerjakannya 1 hari sebelum deadline dikarenakan kesibukan dan kejadian tidak terduga.
Jadi hanya punya sedikit waktu saja.-->

@extends('layouts.jogja')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark border border-warning-subtle" data-bs-theme="dark">
    <a class="navbar-brand " style="font-family:'Courier New', Courier, monospace;" href="#"><img src="../assets/wayang.png" style="max-height: 32px; max-width:32px; padding-left:10px; padding-right:5px; padding-bottom:3px;">Wisata Yogyakarta</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="https://www.tripadvisor.com/Tourism-g294230-Yogyakarta_Region_Java-Vacations.html" style="font-family:'Courier New', Courier, monospace;">Daerah Wisata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://id.wikipedia.org/wiki/Daerah_Istimewa_Yogyakarta" style="font-family:'Courier New', Courier, monospace;">About Us</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Carousel -->
<div id="Destinations" class="carousel slide border border-warning border-opacity-60 rounded" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#Destinations" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#Destinations" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#Destinations" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    <div class="carousel-inner" style="height:0; padding-bottom:35%;">
        <div class="carousel-item active" style="position: absolute; top:0; bottom:0; right:0; left:0;">
            <img src="../assets/jogja1.jpg" class="d-block w-100" alt="Tugu Jogja di malam hari" style="height: 100%;object-fit:cover;">
        </div>
        <div class="carousel-item" style="position: absolute; top:0; bottom:0; right:0; left:0;">
            <img src="../assets/prambanan.jpg" class="d-block w-100" alt="Candi Prambanan saat senja" style="height: 100%;object-fit:cover;">
        </div>
        <div class="carousel-item" style="position: absolute; top:0; bottom:0; right:0; left:0;">
            <img src="../assets/borobudur.jpg" class="d-block w-100" alt="Candi Borobudur Senja" style="height: 100%;object-fit:cover;">
        </div>
    </div>
</div>

<!-- Cards Section -->
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mb-3">
    <div class="col">
        <div class="card border-warning mb-3">
            <div class="card h-100" style="background-color: #1B1108; color: rgb(223, 126, 0);">
                <img src="../assets/loano.jpg" class="card-img-top" alt="Tujuan 1">
                <div class="card-body">
                    <h5 class="card-header border-warning"><img src="../assets/corner-emas.png" class="d-inline-block" style=" max-width: 64px; max-height:64px">Glamping De’Loano</h5>
                    <p class="card-text">Telah menjadi salah satu tempat menghilangkan penat bagi pelancong luar kota maupun dalam kota yakni Glamping De’Loano. Menariknya tempat ini memperlihatkan beberapa konsep wisata alam dengan beberapa spot instagramable.
                        Untuk itulah tampilan landscape wisata alam hutan dan juga beberapa spot berfoto di tengah hutan pinus akan memberi tema berbeda dari tempat lain. Ada fasilitas perkemahan mewah dengan harga 400 ribu per malam, dan untuk akses penginapan VIP per malamnya bisa mencapai 600 ribu per tenda.</p>
                </div>
                <div class="card-footer border-warning pt-4 mb-3">
                    <a href="https://inspirasi.avonturin.id/deloano-glamping/" class="btn" style="background-color: rgb(223, 126, 0);color: white">See Details</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-warning mb-3">
            <div class="card h-100" style="background-color: #1B1108; color: rgb(223, 126, 0);">
                <img src="../assets/ratu-boko.webp" class="card-img-top" alt="Tujuan 2">
                <div class="card-body">
                    <h5 class="card-header border-warning"><img src="../assets/corner-emas.png" class="d-inline-block" style=" max-width: 64px; max-height:64px">Candi Ratu Boko</h5>
                    <p class="card-text">Candi Ratu Boko merupakan salah satu bukti sejarah yang sebenarnya merupaka reruntuhan dari istana di jaman dulu. Bahkan banyak orang yang mengenal namanya dengan sebutan Keraton Ratu Boko.

                        Kompleks wisata bersejarah di Jogja ini cukup lengkap, karena memiliki bagian yang masih tersisa seperti pintu gerbang masuk, bangunan tempat tinggal, pendopo istana, pagar pelindung, hingga kolam pemandian para anggota kerajaan.</p>
                </div>
                <div class="card-footer border-warning pt-4 mb-3">
                    <a href="https://borobudurpark.com/temple/ratu-boko/" class="btn" style="background-color: rgb(223, 126, 0);color: white">See Details</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-warning mb-3">
            <div class="card h-100" style="background-color: #1B1108; color: rgb(223, 126, 0);">
                <img src="../assets/malioboro.webp" class="card-img-top" alt="Tujuan 2">
                <div class="card-body">
                    <h5 class="card-header border-warning"><img src="../assets/corner-emas.png" class="d-inline-block" style=" max-width: 64px; max-height:64px">Jalan Malioboro</h5>
                    <p class="card-text">Kawasan waisata di Jalan Malioboro ini, seringkali menjadi destinasi utama yang ngga pernah terlewatkan ketika berlibur ke Kota Jogja.

                        Ketika menjelang malam, Jalan Malioboro ini mulai penuh dengan para wisatawan dan penduduk sekitar sembari menikmati suasana Jogja yang begitu khas.
                        
                        Di sepanjang jalan kamu bisa menemukan pertokoan yang menjual aneka hasil seni khas Jogja, baju batik, kuliner khas, dan lain lain.</p>
                </div>
                <div class="card-footer border-warning pt-4 mb-3">
                    <a href="https://www.tripadvisor.com/Attraction_Review-g294230-d447268-Reviews-Jalan_Malioboro-Yogyakarta_Region_Java.html" class="btn" style="background-color: rgb(223, 126, 0);color: white">See Details</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-blend-darken">

</footer>

@endsection
