@extends('layouts.base')
@section('title', 'SDN Kebonagung')

@section('content')
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Sekolah Dasar<br>Negeri Kebonagung</h1>
        <h2>Jl. Raya Jatibarang – Sitanggal Km.04, Kebonagung, Jatibarang, <br>Brebes, Jawa Tengah</h2>
        <a href="{{ route('vision') }}" class="btn-get-started">Tentang Sekolah</a>
    </div>
</section>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('assets/img/about-img.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3 class="mb-4">Visi & Misi Sekolah</h3>
                <h5><b>Visi Sekolah</b></h5>
                <p class="fst-italic">
                    ”Sekolah dapat membawa generasi mampu menguasai iptek dan imtek”
                </p>

                <h5><b>Misi Sekolah</b></h5>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Melaksanakan pembelajaran serta bimbingan secara efektif kepada siswa sesuai potensi masing - masing.</li>
                    <li><i class="bi bi-check-circle"></i> Mendorong pada setiap siswa untuk mengenali potensi dirinya, sehingga dapat di kembangkan secara optimal.</li>
                    <li><i class="bi bi-check-circle"></i> Menumbuhkan semangat penghayatan terhadap ilmu pengetahuan, ajaran agama dan juga budaya bangsa sehingga menjadi sumber kearifan dalam bertindak</li>
                    <li><i class="bi bi-check-circle"></i> Menerapkan manajemen yang transparan dengan melibatkan seluruh warga sekolah dan pihak terkait.</li>
                </ul>

            </div>
            </div>

        </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="171" data-purecounter-duration="1" class="purecounter"></span>
                <p>Siswa</p>
            </div>

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                <p>Tenaga Pengajar</p>
            </div>

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                <p>Kelas</p>
            </div>

            </div>

        </div>
        </section><!-- End Counts Section -->

        <!-- ======= Popular Courses Section ======= -->
        <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <div class="row">
                    <div class="col-md-10">
                        <h2>Berita</h2>
                        <p>Berita Terbaru</p>    
                    </div>
                    <div class="col-12 col-md-2">
                        <a href="{{ route('news') }}" class="btn btn-success my-2">Lihat Berita Lainnya</a>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                    <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>{{ $post->category->name }}</h4>
                        </div>

                        <h3><a href="{{ route('news.show', ['post' => $post->slug]) }}">{{ $post->title }}</a></h3>
                        <p>{{ $post->excerpt }} ... <a class="text-success" href="">Lihat Selengkapnya</a></p>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Popular Courses Section -->
</main>
@endsection