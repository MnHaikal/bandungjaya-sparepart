<x-layout>
    {{-- Header Hero --}}
    <section class="bg-dark text-light py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Bandung Jaya Motor</h1>
            <p class="lead mb-4">bengkelnya farhan ganteng</p>

        </div>
    </section>

    {{-- Tentang Kami --}}
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://via.placeholder.com/500x300" alt="Tentang Kami" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">Tentang Bengkel Kami</h2>
                    <p class="text-muted">Kami telah melayani ribuan pelanggan dengan layanan servis dan sparepart berkualitas. Kepuasan pelanggan adalah prioritas utama kami.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Layanan --}}
    <section class="bg-light py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold mb-3">Layanan Kami</h2>
                    <p class="lead text-muted">Beragam layanan terbaik untuk motor Anda</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-2">Servis Rutin</h5>
                            <p class="text-muted">Perawatan berkala untuk menjaga performa motor tetap optimal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-2">Penggantian Sparepart</h5>
                            <p class="text-muted">Sparepart original dan bergaransi untuk semua jenis motor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-2">Perbaikan Mesin</h5>
                            <p class="text-muted">Perbaikan dan pengecekan menyeluruh oleh mekanik berpengalaman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Produk Sparepart --}}
    <section id="products" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold mb-3">Sparepart & Produk Kami</h2>
                    <p class="lead text-muted">Suku cadang original dan berkualitas untuk semua merek motor</p>
                </div>
            </div>
            <div class="row g-4">
                @forelse($products as $product)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0" style="transition: transform 0.3s ease; border-radius: 15px;">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ $product->image_url ?: 'https://via.placeholder.com/350x200?text=No+Image' }}" 
                                     class="card-img-top" 
                                     alt="{{ $product->name }}" 
                                     style="height:200px; object-fit:cover; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                                     style="background: rgba(0,0,0,0.7); opacity: 0; transition: opacity 0.3s ease;">
                                    <a href="{{ route('product.show', $product->slug) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="fw-bold mb-1">{{ $product->name }}</h6>
                                <p class="text-muted small mb-0">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Belum ada produk yang tersedia saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>