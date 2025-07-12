<?php include 'includes/header.php'; ?>
<main>
    <section class="container py-5">
        <!-- Judul -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">Layanan Saya</h2>
            <p class="text-muted">Saya menawarkan berbagai layanan profesional untuk kebutuhan individu, bisnis, hingga
                perusahaan.</p>
        </div>

        <!-- Layanan -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $services = [
                [
                    "icon" => "fa-laptop-code",
                    "title" => "Web Development",
                    "desc" => "Website profesional, cepat & responsive dengan teknologi modern.",
                    "color" => "primary",
                    "price" => 200000,
                    "features" => [
                        ["Free Domain & Hosting", true],
                        ["Konsep Desain Gratis", true],
                        ["Admin Panel", true],
                        ["Multilingual", false],
                        ["Live Chat", false],
                    ]
                ],
                [
                    "icon" => "fa-envelope-open-text",
                    "title" => "Office Administration",
                    "desc" => "Layanan administrasi kantor: pengarsipan, surat, laporan, dll.",
                    "color" => "warning",
                    "price" => 80000,
                    "features" => [
                        ["Template", true],
                        ["Surat Menyurat", true],
                        ["Digital Arsip", true],
                        ["Laporan Otomatis", false],
                        ["Manajemen Jadwal", false],
                    ]
                ],
                [
                    "icon" => "fa-database",
                    "title" => "Database Management",
                    "desc" => "Manajemen & integrasi database lengkap beserta sistem CRUD.",
                    "color" => "success",
                    "price" => 150000,
                    "features" => [
                        ["CRUD System", true],
                        ["Relational Design", true],
                        ["User Roles", true],
                        ["Backup Otomatis", false],
                        ["Realtime Monitoring", false],
                    ]
                ],
                [
                    "icon" => "fa-palette",
                    "title" => "Desain Canva",
                    "desc" => "Template desain kreatif untuk promosi, presentasi, & sosial media.",
                    "color" => "info",
                    "price" => 100000,
                    "features" => [
                        ["Editable Template", true],
                        ["Ukuran Bebas", true],
                        ["Branding Manual", false],
                        ["Export HD", true],
                    ]
                ],
                [
                    "icon" => "fa-terminal",
                    "title" => "Sistem Informasi",
                    "desc" => "Aplikasi informasi: absensi, booking, warung, laporan, dsb.",
                    "color" => "dark",
                    "price" => 300000,
                    "features" => [
                        ["Custom UI/UX", true],
                        ["Dashboard Admin", true],
                        ["Multi Akun", true],
                        ["API Integration", false],
                    ]
                ],
                [
                    "icon" => "fa-cubes",
                    "title" => "Produk Digital",
                    "desc" => "Pembuatan produk digital: template, tools, sistem online.",
                    "color" => "danger",
                    "price" => 25000,
                    "features" => [
                        ["Support Update", true],
                        ["Custom Branding", true],
                        ["Free Hosting", false],
                        ["Lifetime License", true],
                    ]
                ],
            ];

            foreach ($services as $i => $srv):
                $id = "featureCollapse$i";
                ?>
                <div class="col" data-aos="zoom-in-up" data-aos-delay="<?= $i * 150 ?>">
                    <div class="card h-100 shadow-sm border-0">
                        <div
                            class="card-header bg-<?= $srv['color'] ?> bg-opacity-10 text-<?= $srv['color'] ?> text-center">
                            <i class="fa-solid <?= $srv['icon'] ?> fa-2x mt-2"></i>
                            <h5 class="fw-bold mt-2 mb-0">
                                <?= $srv['title'] ?>
                            </h5>
                        </div>
                        <div class="card-body text-center d-flex flex-column">
                            <p class="text-muted small">
                                <?= $srv['desc'] ?>
                            </p>

                            <!-- Harga -->
                            <p class="fw-bold text-<?= $srv['color'] ?> mb-1 mt-2">Mulai dari</p>
                            <h5 class="fw-bold text-<?= $srv['color'] ?>">Rp
                                <?= number_format($srv['price'], 0, ',', '.') ?>
                            </h5>


                            <button class="btn btn-sm btn-outline-secondary mb-3" data-bs-toggle="collapse"
                                data-bs-target="#<?= $id ?>">
                                Lihat Rincian
                            </button>

                            <div class="collapse" id="<?= $id ?>">
                                <ul class="list-unstyled text-start px-3">
                                    <?php foreach ($srv['features'] as $fitur):
                                        $active = $fitur[1];
                                        $class = $active ? 'text-success fw-semibold' : 'text-muted text-decoration-line-through';
                                        $icon = $active ? 'fa-check-circle' : 'fa-times-circle';
                                        ?>
                                        <li class="<?= $class ?>"><i class="fa-solid <?= $icon ?> me-2"></i>
                                            <?= $fitur[0] ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <?php
                            $whatsapp = "6282269482581";
                            $text = "Halo kak *CYuliawan Web Developer*, saya ingin memesan layanan {$srv['title']}, apakah bisa di bantu informasinya?";
                            ?>
                            <div class="mt-auto">
                                <a href="https://wa.me/<?= $whatsapp ?>?text=<?= urlencode($text) ?>"
                                    class="btn btn-<?= $srv['color'] ?> rounded-pill mt-3 px-4 fw-semibold" target="_blank">
                                    Pesan Layanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


        <!-- CTA -->
        <div class="text-center mt-5" data-aos="zoom-in">
            <a href="contact.php" class="btn btn-success px-4 py-2 rounded-pill shadow-sm fw-semibold">
                <i class="fa-solid fa-paper-plane me-2"></i>Diskusikan Proyek Anda Sekarang
            </a>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>