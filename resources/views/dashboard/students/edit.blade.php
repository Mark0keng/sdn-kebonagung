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
                            <form action="{{ route('student.update', ['student' => $student->nis]) }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" id="title" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $student->name) }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="form-group col-4">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ old('gender', $student->gender) }}">
                                            <option value="Laki-laki" {{ $student->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ $student->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                        @error('gender')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="nis">NIS</label>
                                        <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis', $student->nis) }}" autofocus>
                                        @error('nis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-4">
                                        <label for="class">Kelas</label>
                                        <select class="form-control @error('gender') is-invalid @enderror" id="class" name="class">
                                            <option value="1 (Satu)" {{ $student->class == '1 (Satu)' ? 'selected' : '' }}>1 (Satu)</option>
                                            <option value="2 (Dua)" {{ $student->class == '2 (Dua)' ? 'selected' : '' }}>2 (Dua)</option>
                                            <option value="3 (Tiga)" {{ $student->class == '3 (Tiga)' ? 'selected' : '' }}>3 (Tiga)</option>
                                            <option value="4 (Empat)" {{ $student->class == '4 (Empat)' ? 'selected' : '' }}>4 (Empat)</option>
                                            <option value="5 (Lima)" {{ $student->class == '5 (Lima)' ? 'selected' : '' }}>5 (Lima)</option>
                                            <option value="6 (Enam)" {{ $student->class == '6 (Enam)' ? 'selected' : '' }}>6 (Enam)</option>
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