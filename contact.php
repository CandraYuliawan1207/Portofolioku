<?php include 'includes/header.php'; ?>
<main>
    <section class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto" data-aos="fade-up">
                <h2 class="fw-bold text-center mb-4">Kontak Saya</h2>
                <form action="https://wa.me/6281234567890" target="_blank">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark w-100"><i class="fa-brands fa-whatsapp me-2"></i>Kirim via WhatsApp</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>