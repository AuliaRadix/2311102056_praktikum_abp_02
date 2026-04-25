@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 text-gray-800">Produk</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-lg"></i> Tambah Produk Baru
    </a>
</div>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Dibuat Pada</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Rp {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td>
                                @if($product->stock <= 5)
                                    <span class="badge bg-danger">{{ $product->stock }}</span>
                                @else
                                    <span class="badge bg-success">{{ $product->stock }}</span>
                                @endif
                            </td>
                            <td>{{ $product->created_at->format('d M Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $product->id }}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $product->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $product->id }}">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center py-4">
                                        <i class="bi bi-exclamation-circle text-danger mb-3" style="font-size: 3rem;"></i>
                                        <p class="mb-0">Apakah Anda yakin ingin menghapus <strong>{{ $product->name }}</strong>?</p>
                                        <p class="text-muted small">Tindakan ini tidak dapat dibatalkan.</p>
                                    </div>
                                    <div class="modal-footer border-0 justify-content-center">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Tidak ada produk yang ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
