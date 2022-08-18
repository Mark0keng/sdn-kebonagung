@extends('layouts.base')

@section('title', 'Tentang | SDN Kebonagung')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>VISI SEKOLAH</h2>
            <h5>”Sekolah dapat membawa generasi mampu menguasai iptek dan imtek”</h5>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>MISI SEKOLAH</h3>
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
</main>
@endsection