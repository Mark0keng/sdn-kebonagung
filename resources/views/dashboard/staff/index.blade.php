@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tenaga Pengajar</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <a href="{{ route('staff.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah Tenaga Pengajar
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
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                                </tr>

                                @foreach ($staffs as $staff)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $staff->name }}</td>
                                    <td>{{ $staff->nip }}</td>
                                    <td>{{ $staff->title }}</td>
                                    <td>
                                        <a href="{{ route('staff.edit', ['staff' => $staff->id]) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
                                        <form action="{{ route('staff.delete', ['staff' => $staff->id]) }}" method="POST" class="d-inline">
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
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    {{ $staffs->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection