@extends('layouts.base')

@section('title', $post->title)

@section('content')
<section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
            <img src="{{ $post->image }}" class="img-fluid" alt="">
            <h3>{{ $post->title }}</h3>
            <p>
                {!! $post->body !!}
            </p>
            </div>
        </div>
    </div>
</section>
@endsection