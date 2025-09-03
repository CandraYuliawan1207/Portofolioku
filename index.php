<?php include 'includes/header.php'; ?>

<!-- PRELOADER LOTTIE -->
<div id="preloader" 
     class="position-fixed top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center text-white-50" 
     style="z-index: 9999; background-color: rgba(0, 0, 0, 0.85);">
     
    <!-- Lottie Animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player
        src="https://assets2.lottiefiles.com/packages/lf20_usmfx6bp.json"
        background="transparent"
        speed="1"
        style="width: 200px; height: 200px; margin-bottom: -3em;"
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
            alt="Waving silhouette man"
            class="img-fluid"
            style="position: absolute; top: 8%; left: 50%; transform: translateX(-50%); max-width: 450px; height: auto;"
            data-aos="fade-down" data-aos-duration="1000" />

        <div data-aos="fade-up" data-aos-delay="500">
            <h1 class="display-4 fw-bold">Candra Yuliawan</h1>
            <p class="lead">Office Administrator | Web Developer Enthusiast</p>
            <a href="projects.php" class="btn btn-warning mt-3">Lihat Proyek Saya</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<!-- CSS -->
<style>
    #preloader {
        transition: opacity 0.8s ease;
    }
    body.loading {
        overflow: hidden; /* halaman ga bisa di-scroll saat loading */
    }
</style>

<!-- JS Loader Control -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    let preloader = document.getElementById("preloader");
    let progress = document.getElementById("progress");
    document.body.classList.add("loading");

    let count = 0;
    let interval = setInterval(() => {
        count++;
        if (progress) progress.innerText = count + "%";

        if (count >= 100) {
            clearInterval(interval);

            // animasi hilang
            preloader.style.opacity = "0";
            document.body.classList.remove("loading");

            setTimeout(() => {
                preloader.style.display = "none"; 
                preloader.style.zIndex = "-1"; // biar ga nutup halaman
            }, 800);
        }
    }, 70); // ~7 detik total
});
</script>
