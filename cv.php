<?php include 'includes/header.php'; ?>
<main class="bg-light py-4">
    <div class="container text-end mb-3">
        <button class="btn btn-danger me-2" onclick="downloadPDF()">
            <i class="fa-solid fa-file-pdf me-1"></i> Download CV
        </button>
    </div>

    <div id="cv-a4" class="a4-sheet mx-auto shadow bg-white p-4 p-md-5">
        <div class="row">
            <!-- KIRI -->
            <div class="col-md-4 text-center text-md-start border-end pe-md-4 mb-4 mb-md-0">
                <img src="assets/img/passfoto.jpeg" alt="Candra Yuliawan" class="rounded-circle img-thumbnail mb-3" style="width: 140px; height: 140px; object-fit: cover;">
                <h3 class="fw-bold">CANDRA YULIAWAN</h3>
                <p class="text-muted">Office Administrator & Web Developer</p>

                <hr>

                <ul class="list-unstyled small">
                    <li><i class="fa-solid fa-phone me-2"></i> 0822-6948-2581</li>
                    <li><i class="fa-solid fa-envelope me-2"></i> candrayln275@gmail.com</li>
                    <li><i class="fa-solid fa-globe me-2"></i> cyuliawanportofolio.site</li>
                    <li><i class="fa-solid fa-location-dot me-2"></i> Air Sugihan, Sumatera Selatan</li>
                </ul>

                <hr>

                <h6 class="fw-bold">PENDIDIKAN</h6>
                <p class="mb-1"><strong>SMA Negeri 2 Air Sugihan</strong><br><small>IPS | 2018–2021</small></p>
                <p class="mb-1"><strong>MTs Darussyafa’at</strong><br><small>2015–2018</small></p>

                <hr>

                <h6 class="fw-bold">KEMAMPUAN</h6>
                <ul class="small ps-3">
                    <li>Microsoft Office</li>
                    <li>HTML, CSS, PHP</li>
                    <li>Web Development</li>
                    <li>CRUD & Database</li>
                    <li>Editing & Desain</li>
                </ul>
            </div>

            <!-- KANAN -->
            <div class="col-md-8 ps-md-4">
                <h6 class="fw-bold text-uppercase text-primary">PROFIL</h6>
                <p class="small">
                    Lulusan IPS dengan pengalaman dalam bidang administrasi dan operasional lapangan di perusahaan sawit. Memiliki semangat belajar tinggi, mahir menggunakan teknologi dan antusias mengembangkan solusi digital dengan pendekatan modern.
                </p>

                <h6 class="fw-bold text-uppercase text-primary mt-4">PENGALAMAN KERJA</h6>
                <p class="mb-1"><strong>Staf Administrasi</strong> – PT Selatan Agro Makmur Lestari<br><small>2023 – Sekarang</small></p>
                <ul class="small">
                    <li>Mengelola laporan harian hingga bulanan.</li>
                    <li>Input data, pengarsipan dokumen digital & fisik.</li>
                </ul>

                <p class="mb-1 mt-3"><strong>Staf Operasional Lapangan</strong> – PT SAML<br><small>2021 – 2023</small></p>
                <ul class="small">
                    <li>Kontrol bongkar muat armada TBS sungai.</li>
                    <li>Monitoring operasional lapangan.</li>
                </ul>

                <h6 class="fw-bold text-uppercase text-primary mt-4">PROYEK & PORTOFOLIO</h6>
                <ul class="small">
                    <li><strong>Dermaga System</strong> – PT. Selatan Agro Makmur Lestari</li>
                    <li><strong>Voting Best Staff</strong> – PT. Selatan Agro Makmur Lestari</li>
                    <li><strong>Personal Website</strong> – cyuliawanportofolio.site</li>
                </ul>

                <h6 class="fw-bold text-uppercase text-primary mt-4">LAINNYA</h6>
                <ul class="small">
                    <li><strong>Tempat & Tanggal Lahir:</strong> Tugu Mulyo, 12 Juli 2003</li>
                    <li><strong>Agama:</strong> Islam</li>
                    <li><strong>Status:</strong> Belum Menikah</li>
                    <li><strong>Sertifikasi:</strong> Bootcamp Fullstack Web Developer – Codepolitan</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<!-- Script download PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    function downloadPDF() {
        const element = document.getElementById('cv-a4');
        const opt = {
            margin: 0,
            filename: 'CV_Candra_Yuliawan.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'portrait'
            }
        };
        html2pdf().set(opt).from(element).save();
    }
</script>

<style>
    .a4-sheet {
        width: 210mm;
        min-height: 297mm;
        background: white;
        border: 1px solid #ccc;
        font-family: 'Segoe UI', sans-serif;
        font-size: 15px;
        line-height: 1.6;
        padding: 30px 40px;
    }

    .img-thumbnail {
        border-radius: 50%;
    }

    @media screen and (max-width: 768px) {
        .a4-sheet {
            width: 100%;
            min-height: auto;
            padding: 20px !important;
        }

        .a4-sheet img {
            width: 100px !important;
            height: 100px !important;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>