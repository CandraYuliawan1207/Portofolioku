<footer class="bg-dark text-white pt-5 pb-3">
  <div class="container">
    <div class="row text-start">

      <!-- Kolom 1: Brand Info -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold" style="color: #efb509;">CYuliawan</h5>
        <p style="font-size: 0.875rem;">
          Portofolio pribadi Candra Yuliawan yang menampilkan berbagai proyek dan keahlian 
          di bidang Web Development & Administrasi Perkantoran.
        </p>
      </div>

      <!-- Kolom 2: Navigasi -->
      <div class="col-md-2 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Navigasi</h6>
        <ul class="list-unstyled" style="font-size: 0.875rem;">
          <li><a href="index.php" class="text-white text-decoration-none">Beranda</a></li>
          <li><a href="about.php" class="text-white text-decoration-none">Tentang Saya</a></li>
          <li><a href="projects.php" class="text-white text-decoration-none">Proyek</a></li>
          <li><a href="contact.php" class="text-white text-decoration-none">Kontak</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Lainnya -->
      <div class="col-md-2 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Lainnya</h6>
        <ul class="list-unstyled" style="font-size: 0.875rem;">
          <li><a href="skill.php" class="text-white text-decoration-none">Keahlian</a></li>
          <li><a href="sertifikasi.php" class="text-white text-decoration-none">Sertifikat</a></li>
          <li><a href="cv.php" class="text-white text-decoration-none">Lihat CV</a></li>
          <li><a href="lokasi.php" class="text-white text-decoration-none">Lokasi</a></li>
          <li><a href="services.php" class="text-white text-decoration-none">Services</a></li>
        </ul>
      </div>

      <!-- Kolom 4: Kontak -->
      <div class="col-md-4 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Kontak</h6>
        <p style="font-size: 0.875rem;">
          <i class="fa-solid fa-envelope me-2 text-success"></i> candrayln275@gmail.com<br>
          <i class="fa-solid fa-phone me-2 text-success"></i> +62 822-8207-6291<br>
          <i class="fa-solid fa-location-dot me-2 text-success"></i> Air Sugihan, Sumatera Selatan, 30656
        </p>
      </div>

    </div>

    <hr class="border-secondary">

    <div class="text-center" style="font-size: 0.8rem;">
      <p class="mb-0">&copy;<?= date("Y") ?> <strong>CYuliawan Web Developer</strong>. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Vendor Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

<!-- Init AOS -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
      duration: 800,
      easing: "ease-in-out",
      once: true,
      offset: 120
    });
  });

  window.addEventListener("load", function () {
    setTimeout(() => {
      AOS.refresh();
    }, 1000); // kasih waktu lebih lega
  });
</script>

<!-- Form Handler -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch("https://formsubmit.co/ajax/candrayln275@gmail.com", {
            method: "POST",
            headers: { 'Accept': 'application/json' },
            body: formData
          })
          .then(response => {
            if (response.ok) {
              Swal.fire({
                icon: 'success',
                title: 'Terkirim!',
                text: 'Email kamu berhasil terkirim.',
                confirmButtonColor: '#198754'
              });
              this.reset();
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Gagal mengirim. Coba lagi nanti.',
                confirmButtonColor: '#dc3545'
              });
            }
          })
          .catch(() => {
            Swal.fire({
              icon: 'error',
              title: 'Kesalahan',
              text: 'Terjadi kesalahan jaringan.',
              confirmButtonColor: '#dc3545'
            });
          });
      });
    }
  });
</script>
</body>
</html>
