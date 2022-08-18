@extends('layouts.base')

@section('title', 'Pengajar | SDN Kebonagung')

@section('content')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Tenaga Pengajar</h2>
            {{-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> --}}
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            @if ($leader->image)
                            {{-- <div style="height: 150px; width: 150px; object-fit: cover;"> --}}
                                <img src="{{ asset('storage/' . $leader->image) }}" class="card-img-top">
                            {{-- </div> --}}
                            @else
                            <img src="{{ asset('assets/img/no-profile.png') }}" class="img-fluid" alt="">
                            @endif
                            {{-- <img src="{{ asset('storage/' . $leader->image) }}" class="card-img-top"> --}}
                            <div class="member-content">
                                <h4>{{ $leader->name }}</h4>
                                <span>{{ $leader->title }}</span>
                                <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                @foreach ($staffs as $staff)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    @if ($staff->image)
                    {{-- <div style="height: 150px; width: 150px; object-fit: cover;"> --}}
                        <img src="{{ asset('storage/' . $staff->image) }}" class="card-img-top">
                    {{-- </div> --}}
                    @else
                    <img src="{{ asset('assets/img/no-profile.png') }}" class="img-fluid" alt="">
                    @endif
                    <div class="member-content">
                        <h4>{{ $staff->name }}</h4>
                        <span>{{ $staff->title }}</span>
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach

            {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                <div class="member-content">
                    <h4>Sarah Jhinson</h4>
                    <span>Marketing</span>
                    <p>
                    Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                    </p>
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                <div class="member-content">
                    <h4>William Anderson</h4>
                    <span>Content</span>
                    <p>
                    Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                    </p>
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                </div>
            </div> --}}

            </div>

        </div>
    </section><!-- End Trainers Section -->

</main>
@endsection