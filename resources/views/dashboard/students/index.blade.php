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
                        <div class="card-header">
                            <div>
                                <a href="{{ route('student.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah Data Siswa
                                </a>
                            </div>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>NIS</th>
                                <th>Kelas</th>
                                <th>Action</th>
                                </tr>

                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->nis }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>
                                        <a href="{{ route('student.edit', ['student' => $student->nis]) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
                                        <form action="{{ route('student.delete', ['student' => $student->nis]) }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-times-circle"></i> 
                                            </button>    
                                        </form>
                                    </td>
                                </tr>    
                                @endforeach
                            </table>
                            </div>
                        </div>
                        {{-- <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    {{ $staffs->links() }}
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection