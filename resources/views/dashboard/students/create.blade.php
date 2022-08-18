@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Siswa</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('student.store') }}" method="POST">
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

                                <div class="row">
                                    <div class="form-group col-4">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                                            <option value="Laki-laki" class="selected">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('gender')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="nis">NIS</label>
                                        <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" autofocus>
                                        @error('nis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-4">
                                        <label for="class">Kelas</label>
                                        <select class="form-control @error('gender') is-invalid @enderror" id="class" name="class">
                                            <option value="1 (Satu)" class="selected">1 (Satu)</option>
                                            <option value="2 (Dua)">2 (Dua)</option>
                                            <option value="3 (Tiga)">3 (Tiga)</option>
                                            <option value="4 (Empat)">4 (Empat)</option>
                                            <option value="5 (Lima)">5 (Lima)</option>
                                            <option value="6 (Enam)">6 (Enam)</option>
                                        </select>
                                        @error('class')
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