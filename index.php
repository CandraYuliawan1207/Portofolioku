<?php include 'includes/header.php'; ?>
<!-- PRELOADER LOTTIE -->
<div id="preloader" class="position-fixed top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center bg-black text-light" style="z-index: 9999;">
    <!-- Lottie Animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player
        src="https://assets2.lottiefiles.com/packages/lf20_usmfx6bp.json"
        background="transparent"
        speed="1"
        style="width: 200px; height: 200px;"
        loop
        autoplay>
    </lottie-player>

    <h4 class="fw-bold mt-3">Loading... <span id="progress">0%</span></h4>
</div>

<main style="margin-bottom: 0;">
    <section class="hero text-black text-center d-flex align-items-center justify-content-center"
        style="height: 80vh; position: relative;">
        
        <!-- Animasi Wave -->
        <img src="https://threedio-prod-var-cdn.icons8.com/if/preview_sets/previews/WdouIOZIHd9p4jHt.webp"
            alt="Waving silhouette man" style="
            position: absolute;
            top: 8%;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 450px;
            height: auto;" data-aos="fade-down" data-aos-duration="1000" />

        <div data-aos="fade-up" data-aos-delay="500">
            <h1 class="display-4 fw-bold">Candra Yuliawan</h1>
            <p class="lead">Office Administrator | Web Developer Enthusiast</p>
            <a href="projects.php" class="btn btn-warning mt-3">Lihat Proyek Saya</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<!-- CSS Optional -->
<style>
    #preloader {
        transition: opacity 0.6s ease;
    }
</style>

<!-- JS Loader Control -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let percent = 0;
        const progressText = document.getElementById("progress");
        const preloader = document.getElementById("preloader");

        const interval = setInterval(() => {
            percent++;
            progressText.textContent = percent + "%";

            if (percent >= 100) {
                clearInterval(interval);
                preloader.style.opacity = "0";
                setTimeout(() => {
                    preloader.style.display = "none";
                }, 400); // Waktu hilangnya preloader
            }
        }, 40); // 70ms x 100 = 7000ms (7 detik)
    });
</script>
