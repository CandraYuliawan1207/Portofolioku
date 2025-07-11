<?php include 'includes/header.php'; ?>
<main class="py-5 bg-light">
    <div class="container text-end mb-3">
        <button class="btn btn-success" onclick="printCV()">
            <i class="fa-solid fa-download me-1"></i> Download CV
        </button>
    </div>

    <div id="cv-content" class="cv-a4 bg-white p-5 shadow mx-auto">

        <!-- Header Foto & Nama -->
        <div class="d-flex align-items-center mb-4" style="gap: 30px;">
            <img src="assets/img/passfoto.jpeg" alt="Candra Yuliawan" width="140" height="140" class="rounded-circle border border-3 border-warning shadow object-fit-cover">
            <div>
                <h1 class="fw-bold mb-1">Curriculum Vitae</h1>
                <h3 class="fw-bold mb-1">Candra Yuliawan</h3>
                <p class="text-muted mb-0">Office Administrator | Web Developer Enthusiast</p>
                <small>Air Sugihan, Sumatera Selatan | candrayln275@gmail.com | 082269482581</small>
            </div>
        </div>

        <hr>

        <!-- Profil Singkat -->
        <h5 class="fw-bold mb-2 text-uppercase text-warning">Profil Singkat</h5>
        <p class="small text-muted">
            Lulus Sekolah Menengah Atas Negeri jurusan Ilmu Pengetahuan Sosial, cukup berpengalaman dalam bidang perkantoran dan sangat antusias di dunia pengembangan web. Terbiasa menggunakan Microsoft Office, mampu membuat aplikasi web menggunakan HTML, CSS, JavaScript, dan PHP, mampu mengintegrasikan AI dalam dunia kerja dan siap berkembang bersama tim.
        </p>

        <!-- Pendidikan & Pengalaman -->
        <div class="row mt-4">
            <div class="col-md-6">
                <h6 class="fw-bold text-uppercase text-success">Pendidikan</h6>
                <ul class="small">
                    <li>
                        <strong>SMA Negeri 2 Air Sugihan</strong><br>
                        Ilmu Pengetahuan Sosial (2018 - 2021)
                    </li>
                    <li>
                        <strong>Madrasah Tsanawiyah Darussyafa'at</strong><br>
                        (2015 - 2018)
                    </li>
                    <li>
                        <strong>SD Negeri 1 Mekar Wangi</strong><br>
                        (2009 - 2015)
                    </li>
                    <li>
                        <strong>TK Dharma Wanita Mekar Wangi</strong><br>
                        (2008 - 2009)
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold text-uppercase text-success">Pengalaman Kerja</h6>
                <ul class="small">
                    <li>
                        <strong>Staf Operasional Lapangan – PT Selatan Agro Makmur Lestari</strong><br>
                        Mei 2021 – Juli 2023<br>
                        Monitoring penerimaan TBS via armada sungai, menyusun laporan bongkar TBS, house keeping.
                    </li>
                    <li>
                        <strong>Staf Administrasi – PT Selatan Agro Makmur Lestari</strong><br>
                        Juli 2023 – Sekarang<br>
                        Membuat laporan harian, menyusun dokumen operasional, input dan pengarsipan data produksi.
                    </li>
                </ul>
            </div>
        </div>

        <!-- Hard Skills -->
        <h6 class="fw-bold mt-4 text-uppercase text-success">Hard Skills</h6>
        <ul class="row small list-unstyled">
            <li class="col-6">✔ Microsoft Office</li>
            <li class="col-6">✔ HTML, CSS, JavaScript</li>
            <li class="col-6">✔ PHP & MySQL</li>
            <li class="col-6">✔ Git, GitHub</li>
            <li class="col-6">✔ Bootstrap</li>
        </ul>

        <!-- Soft Skills -->
        <h6 class="fw-bold mt-3 text-uppercase text-success">Soft Skills</h6>
        <ul class="row small list-unstyled">
            <li class="col-6">✔ Komunikasi Efektif</li>
            <li class="col-6">✔ Problem Solving</li>
            <li class="col-6">✔ Manajemen Waktu</li>
            <li class="col-6">✔ Kepemimpinan</li>
            <li class="col-6">✔ Kerja Tim</li>
        </ul>

        <!-- Tools -->
        <h6 class="fw-bold mt-3 text-uppercase text-success">Tools & Software</h6>
        <div class="d-flex flex-wrap gap-3 mt-2">
            <img src="https://img.icons8.com/color/48/microsoft-word-2019--v1.png" height="32" title="MS Word" />
            <img src="https://img.icons8.com/color/48/microsoft-excel-2019--v1.png" height="32" title="MS Excel" />
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" height="32" title="VS Code" />
            <img src="https://www.apachefriends.org/images/xampp-logo-ac950edf.svg" height="32" title="XAMPP" />
            <img src="https://laragon.org/logo.svg" height="32" title="Laragon" />
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/ChatGPT_logo.svg" height="32" title="ChatGPT" />
            <img src="https://static.canva.com/web/images/8439b51bb7a19f6e65ce1064bc37c197.svg" height="32" title="Canva" />
        </div>

        <!-- Sertifikasi -->
        <h6 class="fw-bold mt-4 text-uppercase text-success">Sertifikasi</h6>
        <ul class="small">
            <li>✔ Bootcamp Fullstack Web Developer – Codepolitan (Jan 2024 – Sekarang)</li>
        </ul>
    </div>

</main>

<script>
    function printCV() {
        window.print();
    }
</script>

<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #cv-content,
        #cv-content * {
            visibility: visible;
        }

        #cv-content {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            box-shadow: none !important;
        }
    }

    .cv-a4 {
        width: 210mm;
        min-height: 297mm;
        background: white;
        padding: 30px;
        border-radius: 8px;
    }

    @media screen and (max-width: 768px) {
        .cv-a4 {
            width: 100%;
            padding: 20px;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>