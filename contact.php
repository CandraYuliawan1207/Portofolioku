<?php include 'includes/header.php'; ?>
<main>
    <section class="container py-5" style="overflow-x: hidden;">
        <!-- Judul -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">Hubungi Saya</h2>
            <p class="text-muted">Jika Anda tertarik untuk bekerja sama, silakan hubungi saya melalui form email atau media sosial di bawah ini.</p>
        </div>

        <div class="row g-4">
            <!-- Form Kontak -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4"><i class="fa-solid fa-envelope me-2 text-success"></i>Form Kontak Email</h5>
                        <form id="contactForm">
                            <!-- Nonaktifkan captcha bawaan -->
                            <input type="hidden" name="_captcha" value="false">

                            <!-- Ganti URL redirect setelah form sukses dikirim -->
                            <input type="hidden" name="_next" value="http://localhost/portofolioku/contact.php">

                            <!-- Pesan sukses dalam email (bukan halaman redirect) -->
                            <input type="hidden" name="_template" value="box">

                            <!-- Form field -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="Nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Anda</label>
                                <input type="email" class="form-control" id="email" name="Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" name="Pesan" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">
                                <i class="fa-solid fa-paper-plane me-2"></i>Kirim Email
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Media Sosial -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">
                            <i class="fa-solid fa-share-nodes me-2 text-success"></i>Media Sosial
                        </h5>
                        <div class="row g-3">

                            <!-- Instagram -->
                            <div class="col-6">
                                <a href="https://instagram.com/cacanmu" target="_blank" class="text-decoration-none">
                                    <div class="card text-center border-0 shadow-sm p-3 social-card">
                                        <i class="fa-brands fa-instagram fa-2x mb-2 text-danger"></i>
                                        <p class="mb-0 text-dark fw-semibold small">Instagram</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Facebook -->
                            <div class="col-6">
                                <a href="https://facebook.com/candra.yulyawan.714" target="_blank" class="text-decoration-none">
                                    <div class="card text-center border-0 shadow-sm p-3 social-card">
                                        <i class="fa-brands fa-facebook fa-2x mb-2 text-primary"></i>
                                        <p class="mb-0 text-dark fw-semibold small">Facebook</p>
                                    </div>
                                </a>
                            </div>

                            <!-- WhatsApp -->
                            <div class="col-6">
                                <a href="https://wa.me/6282269482581" target="_blank" class="text-decoration-none">
                                    <div class="card text-center border-0 shadow-sm p-3 social-card">
                                        <i class="fa-brands fa-whatsapp fa-2x mb-2 text-success"></i>
                                        <p class="mb-0 text-dark fw-semibold small">WhatsApp</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Tiktok -->
                            <div class="col-6">
                                <a href="https://www.tiktok.com/@cacanmuuu" target="_blank" class="text-decoration-none">
                                    <div class="card text-center border-0 shadow-sm p-3 social-card">
                                        <i class="fa-brands fa-tiktok fa-2x mb-2 text-success"></i>
                                        <p class="mb-0 text-dark fw-semibold small">Tiktok</p>
                                    </div>
                                </a>
                            </div>

                            <!-- LinkedIn -->
                            <div class="col-6">
                                <a href="https://www.linkedin.com/in/candra-yuliawan-2627452b7/" target="_blank" class="text-decoration-none">
                                    <div class="card text-center border-0 shadow-sm p-3 social-card">
                                        <i class="fa-brands fa-linkedin fa-2x mb-2 text-info"></i>
                                        <p class="mb-0 text-dark fw-semibold small">LinkedIn</p>
                                    </div>
                                </a>
                            </div>

                            <!-- GitHub -->
                            <div class="col-6">
                                <a href="https://github.com/CandraYuliawan1207" target="_blank" class="text-decoration-none">
                                    <div class="card text-center border-0 shadow-sm p-3 social-card">
                                        <i class="fa-brands fa-github fa-2x mb-2 text-dark"></i>
                                        <p class="mb-0 text-dark fw-semibold small">GitHub</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>