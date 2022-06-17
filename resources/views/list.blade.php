@extends('app.main')

@section('main')
    @if (session('success'))
        <div class="container-fluid">
            <div class="row mt-4 mb-2 fw-bold fs-4 justify-content-center">
                <div class="col-md-10">
                    <div class="alert-danger rounded text-center">
                        <p>{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="container-fluid">
            <div class="row mt-4 mb-2 fw-bold fs-4 justify-content-center">
                <div class="col-md-10">
                    <div class="alert-danger text-center">
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

    <style>
    </style>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center mt-5 mb-5">
                        <h1><b>Menu Restoran</b></h1>
                    </div>
                    <table class="table table-hover border-dark mt-5 bg-color-grey" style="border-radius:25px">
                        <thead align="center">
                            <a href="{{ route('food.create') }}" class="btn btn-primary" style="border-radius:15px">Tambah Menu</a>
                            <tr>
                                <th class="col-lg-1" scope="col">No</th>
                                <th class="col" scope="col">Nama</th>
                                <th class="col" scope="col">Harga</th>
                                <th class="col-lg-2" scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody align="center">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($foods as $food)
                                <tr>
                                    {{-- {{dd($food)}} --}}
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $food->nama }}</td>
                                    <td>Rp.{{ $food->harga }}</td>
                                    <td>
                                        <a href="{{ url('food', $food->id) }}"
                                            class="badge bg-primary border border-dark border-2 text-decoration-none"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('food.edit', $food)}}"
                                            class="badge bg-warning border border-dark border-2"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('food.destroy', $food) }}" method="post" class="d-inline">
                                            @method('Delete')
                                            @csrf
                                            <button class="badge bg-danger"><i class="bi bi-trash"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
