<x-layout>
    <x-slot name="title">Checkout</x-slot>

    <div class="container my-5">
        <div class="row">
            <!-- Detail Penagihan -->
            <div class="col-md-7">
    <h4 class="mb-4">Detail Penagihan</h4>

    <form id="checkoutForm">
        <div class="mb-3">
            <label for="fullname" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="fullname" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" placeholder="anda@contoh.com" required>
        </div>

        <div class="mb-3">
            <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
            <input type="text" class="form-control" id="whatsapp" placeholder="contoh: 6281234567890" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="address" placeholder="Jl. Contoh 1234" required>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">Kota</label>
            <input type="text" class="form-control" id="city" placeholder="Kota" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="state" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="state" placeholder="Provinsi" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="zip" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="zip" placeholder="Kode Pos" required>
            </div>
        </div>

        <hr class="my-4">

        <h5 class="mb-3">Pembayaran</h5>

        <div class="mb-3">
            <label for="cardName" class="form-label">Nama bank</label>
            <select class="form-select" id="cardName" required>
                <option value="">-- Pilih --</option>
                <option value="Bank">Bank</option>
                <option value="Ewalet">E-Wallet</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="cardNumber" class="form-label">Nomor rekening</label>
            <input type="text" class="form-control" id="cardNumber" placeholder="Nomor kartu/rekening" required>
        </div>
    </form> <!-- ✅ Penutup form tepat sebelum kolom ringkasan -->
</div>

            </div>

            <!-- Ringkasan Pesanan -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Ringkasan Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Nama Produk</h6>
                                    <small class="text-muted">Deskripsi singkat</small>
                                </div>
                                <span class="text-muted">Rp12.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Produk Kedua</h6>
                                    <small class="text-muted">Deskripsi singkat</small>
                                </div>
                                <span class="text-muted">Rp8.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Subtotal</span>
                                <strong>Rp20.000</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Ongkir</span>
                                <strong>Rp5.000</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <strong>Rp25.000</strong>
                            </li>
                        </ul>
                        <div class="alert alert-info mt-3" role="alert">
                            Gratis ongkir untuk pesanan di atas Rp50.000!
                        </div>

                        <!-- Tombol Kirim WhatsApp -->
                        <button onclick="kirimWhatsApp()" class="btn btn-success mt-3 w-100">
                            Kirim Ringkasan ke WhatsApp
                        </button>

                        <!-- Script Kirim WhatsApp -->
                        <script>
                            function kirimWhatsApp() {
    const nama = document.getElementById('fullname').value;
    const email = document.getElementById('email').value;
    const noWa = document.getElementById('whatsapp').value;
    const alamat = document.getElementById('address').value;
    const kota = document.getElementById('city').value;
    const provinsi = document.getElementById('state').value;
    const kodePos = document.getElementById('zip').value;

    const pesan = `📦 Ringkasan Pesanan Anda:
1. Nama Produk: Rp12.000
2. Produk Kedua: Rp8.000
Subtotal: Rp20.000
Ongkir: Rp5.000
Total: Rp25.000

🧾 Detail Anda:
👤 Nama: ${nama}
📧 Email: ${email}
📱 WhatsApp: ${noWa}
📍 Alamat: ${alamat}, ${kota}, ${provinsi}, ${kodePos}`;

    const adminNumber = "6285141319940";
    const url = `https://wa.me/${adminNumber}?text=${encodeURIComponent(pesan)}`;

    const newWindow = window.open(url, '_blank');
    if (!newWindow || newWindow.closed || typeof newWindow.closed === 'undefined') {
        window.location.href = "https://whatsapp.com/dl/";
    }
}


                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>