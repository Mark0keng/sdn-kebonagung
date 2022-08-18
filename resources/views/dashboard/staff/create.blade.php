@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Artikel</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" id="title" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="imgInput">Input Image Post</label>
                                    <img class="img-fluid mb-3 col-sm-3" id="imgPreview">
                                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="imgInput" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nip">NIP</label>
                                        <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" autofocus>
                                        @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-6">
                                        <label for="title">Jabatan</label>
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror 
                                    </div>
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
        </div>
    </section>
</div>
@endsection

@section('script')
<script>
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