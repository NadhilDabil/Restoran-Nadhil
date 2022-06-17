@extends('app.main')

@section('main')

@if ($errors->any())
    <div class="container-fluid">
        <div class="row mt-4 mb-2 fw-bold fs-4 justify-content-center">
            <div class="col-md-10">
                <div class="alert-danger rounded text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-2">
            <div class="ml-1">
                <a href="{{ route('food.index') }}" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama Makanan</label>
                        <input style="border-radius:15px" type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label fw-bold">Harga</label>
                        <input style="border-radius:15px" type="text" class="form-control" id="harga" name="harga" value="Rp. ">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button style="border-radius:15px" type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
</form>
@endsection
