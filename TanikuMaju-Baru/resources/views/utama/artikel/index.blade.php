@extends('utama.layouts.main')
@section('head')
  <meta charset="UTF-8">
  <title>TanikuMaju</title>
  <!-- Website Icon -->
  <link rel="Website Icon"type="png" href="{{ asset('images/logotani.png') }}">
  <!-- AOS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Swiper Js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/artikel.css') }}">
@endsection

@section('main')
  <div class="container-fluid p-0">
    <!-- Header -->
    <div class="header">
      <div class="header-content">
        <h1 class="fw-bold" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Baca Artikel <br> Terbaru
          Kami</h1>
      </div>
    </div>

    <!-- Article Section -->
    <div class="container my-5">
      <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <h2>Artikel TanikuMaju</h2>
        <!-- Search Bar -->
        <div class="input-group mb-3 justify-content-center" data-aos="fade-up" data-aos-duration="2000"
          data-aos-delay="200">
          <input type="text" class="form-control" placeholder="Masukkan judul artikel" aria-label="Search">
          <button class="btn btn-warning" type="button"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>

    <!-- Swiper Section -->
    <div class="container my-5">
      <div class="row">

        <!-- SWiper -->
        <div class="swiper" data-aos="fade-up" data-aos-duration="1000" >
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row">
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">12 Sep 2024</p>
                        <h5 class="card-title">Mengoptimalkan Hasil Panen dengan Teknologi Smart Farming</h5>
                        <p class="card-text">Pertanian tradisional telah mengalami banyak tantangan selama beberapa
                          dekade terakhir, mulai dari perubahan iklim yang sulit diprediksi hingga degradasi lahan dan
                          kekurangan tenaga kerja...</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel2.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">11 Sep 2024</p>
                        <h5 class="card-title">Tips untuk Mendapatkan Hasil Panen Padi yang Bagus</h5>
                        <p class="card-text">Padi adalah tanaman pangan penting yang memberikan beras sebagai sumber
                          karbohidrat utama bagi jutaan orang di seluruh dunia. Untuk mendapatkan hasil...</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel3.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">11 Sep 2024</p>
                        <h5 class="card-title">Persiapan untuk Melakukan Aktivitas Bercocok Tanam</h5>
                        <p class="card-text">Pertanian padi adalah kegiatan penting dalam pemenuhan kebutuhan pangan di
                          seluruh dunia. Persiapan sebelum bercocok tanam padi merupakan tahap awal yang krusial...</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel4.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">10 Sep 2024</p>
                        <h5 class="card-title">Perairan di Sawah: Aspek Vital dalam Pertanian Padi</h5>
                        <p class="card-text">Sawah adalah lanskap unik yang menjadi rumah bagi pertanian padi, tanaman
                          yang sangat penting dalam pemenuhan kebutuhan pangan di seluruh dunia. Perairan...</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel5.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">09 Sep 2024</p>
                        <h5 class="card-title">Revolusi Pertanian Melalui Smart Farming dengan Pemanfaatan IoT</h5>
                        <p class="card-text">Industri pertanian saat ini menghadapi berbagai tantangan, seperti
                          perubahan iklim, peningkatan permintaan pangan, dan keterbatasan sumber daya. Teknologi telah
                          menjadi kunci dalam...</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel6.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">08 Sep 2024</p>
                        <h5 class="card-title">Bagaimana Cara Pemilihan Pupuk untuk Penanaman Padi</h5>
                        <p class="card-text">Pupuk adalah salah satu komponen penting dalam pertanian modern, membantu
                          petani meningkatkan hasil panen dan kualitas tanaman. Penanaman padi bukan pengecualian...
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row">
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel7.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">07 Sep 2024</p>
                        <h5 class="card-title">Bagaimana Pemilihan Bibit Padi yang Baik</h5>
                        <p class="card-text">Padi merupakan tanaman pangan utama bagi sebagian besar populasi di dunia.
                          Oleh karena itu, pemilihan bibit padi yang tepat sangat penting untuk meningkatkan hasil panen
                          dan...</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel8.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">06 Sep 2024</p>
                        <h5 class="card-title">Pembasmian Hama di Sawah untuk Menjaga Hasil Panen</h5>
                        <p class="card-text">Sawah adalah tempat di mana pertanian padi tumbuh dan berkembang. Namun,
                          sawah juga merupakan habitat alami bagi berbagai jenis hama yang dapat merusak...</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel9.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">05 Sep 2024</p>
                        <h5 class="card-title">Memastikan Hasil Panen yang Maksimal</h5>
                        <p class="card-text">Penanaman padi yang baik adalah kunci untuk memastikan hasil panen yang
                          maksimal dan kualitas beras yang baik. Proses ini memerlukan perencanaan, perawatan, dan
                          pemahaman...</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel10.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">04 Sep 2024</p>
                        <h5 class="card-title">Cara Memilih Bibit Unggul Padi untuk Hasil Panen Terbaik</h5>
                        <p class="card-text">Pemilihan bibit unggul padi adalah langkah awal yang sangat penting dalam
                          pertanian padi yang sukses. Bibit yang baik akan memberikan hasil panen yang lebih baik...</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel11.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">01 Sep 2024</p>
                        <h5 class="card-title">Peluang Petani Milenial Manfaatkan Smart Farming 4.0</h5>
                        <p class="card-text">Smart farming 4.0 yang berbasis kecerdasan buatan telah menjadi andalan
                          Kementerian Pertanian di era digital saat ini. Smart farming 4.0 menjadi peluang bagi petani
                          terutama...</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mb-4">
                  <a href="detailArtikel.html">
                    <div class="card">
                      <img src="{{ asset('images/artikel/artikel12.jpg') }}" class="card-img-top zoom" alt="Gambar Artikel">
                      <div class="card-body">
                        <p class="fw-bold" style="color: #69340E;">28 Agu 2024</p>
                        <h5 class="card-title">Smart Farming, Inovasi Pertanian Dengan Teknologi</h5>
                        <p class="card-text">Smart farming atau pertanian cerdas diterapkan berdasarkan prinsip-prinsip
                          terintegrasi antara sistem informasi manajemen, teknologi presisi, dan cyber physical system.
                          Keberlanjutan...</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="pembatas"></div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>


  </div>


<!-- Script -->
<!-- JS Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.swiper', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
  });
</script>

<!-- JS Scroll -->
<script>
  window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');

    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<!-- AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
  integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  AOS.init();
</script>
@endsection