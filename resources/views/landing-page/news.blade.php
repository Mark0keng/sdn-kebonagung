@extends('layouts.base')

@section('title', 'Berita | SDN Kebonagung')

@section('content')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Semua Berita</h2>
            {{-- <p>Lihat seluruh berita terbaru dari SDN Kebonagung disini!</p> --}}
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                    <div class="course-item">
                    <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>{{ $post->category->name }}</h4>
                        </div>

                        <h3><a href="{{ route('news.show', ['post' => $post->slug]) }}">{{ $post->title }}</a></h3>
                        <p>{{ $post->excerpt }}</p>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>

        </div>

        <div class="container mt-4">
            {{ $posts->links() }}
        </div>
    </section><!-- End Courses Section -->

</main>
@endsection
