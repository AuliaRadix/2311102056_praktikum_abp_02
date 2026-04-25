@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 text-gray-800">Dasbor</h2>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 bg-primary text-white h-100">
            <div class="card-body d-flex align-items-center">
                <div class="me-3">
                    <i class="bi bi-box-seam fs-1"></i>
                </div>
                <div>
                    <h5 class="card-title mb-0">Total Produk</h5>
                    <h2 class="mt-2 mb-0">{{ \App\Models\Product::count() }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 bg-success text-white h-100">
            <div class="card-body d-flex align-items-center">
                <div class="me-3">
                    <i class="bi bi-layers fs-1"></i>
                </div>
                <div>
                    <h5 class="card-title mb-0">Total Stok</h5>
                    <h2 class="mt-2 mb-0">{{ \App\Models\Product::sum('stock') }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 bg-info text-white h-100">
            <div class="card-body d-flex align-items-center">
                <div class="me-3">
                    <i class="bi bi-person-circle fs-1"></i>
                </div>
                <div>
                    <h5 class="card-title mb-0">Selamat Datang Kembali!</h5>
                    <h4 class="mt-2 mb-0">{{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom">
                <h5 class="mb-0">Produk Terbaru</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Ditambahkan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Product::latest()->take(5)->get() as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>Rp {{ number_format($product->price, 2, ',', '.') }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-top text-center">
                <a href="{{ route('products.index') }}" class="text-decoration-none text-primary">Lihat Semua Produk</a>
            </div>
        </div>
    </div>
</div>
@endsection
