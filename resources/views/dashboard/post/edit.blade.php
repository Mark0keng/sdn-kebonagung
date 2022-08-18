@extends('layouts.app')

@section('style')
<style>
    .trix-button-group.trix-button-group--file-tools {
    display:none;
}
</style>
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Artikel</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('post.update', ['post' => $post->slug]) }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $post->title) }}">
                                </div>
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control @error('category') is-invalid @enderror" name="category_id">
                                        @foreach ($categories as $category )
                                        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror    
                                </div>

                                <div class="form-group">
                                    <label for="imgInput">Input Image Post</label>
                                    @if ($post->image_post)
                                    <img src="{{ asset('storage/' . $post->image_post) }}" class="img-fluid mb-3 col-sm-3 d-block" id="imgPreview">
                                    @else
                                    <img class="img-fluid mb-3 col-sm-3" id="imgPreview">
                                    @endif
                                    <input type="file" class="form-control-file @error('image_post') is-invalid @enderror" id="imgInput" name="image_post" value="{{ $post->image_post }}>
                                    @error('image_post')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Body</label>
                                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                                    <trix-editor input="body"></trix-editor>  
                                    @error('body')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                    Submit
                                    </button>
                                </div>        
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
<script>
    // trix hidden attach file
    document.addEventListener("trix-file-accept", function(event) {
        event.preventDefault();
    });

    // image preview
    imgInput.onchange = evt => {
        const [file] = imgInput.files
        imgPreview.style.display = 'block';
        if (file) {
            imgPreview.src = URL.createObjectURL(file)
        }
    }
</script>
@endsection