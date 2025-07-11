<?php include 'includes/header.php'; ?>
<main>
    <section class="container py-5" style="overflow-x: hidden;">
        <!-- Judul -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">Keahlian Saya</h2>
            <p class="text-muted">Berikut adalah keahlian teknis dan non-teknis yang saya kuasai selama perjalanan karier saya.</p>
        </div>

        <!-- Hard Skills -->
        <div class="mb-5" data-aos="fade-up">
            <h4 class="fw-bold mb-4"><i class="fa-solid fa-laptop-code me-2 text-success"></i>Hard Skills</h4>
            <div class="row g-4">
                <?php
                $hardSkills = [
                    ['HTML5', 90, 'html5', 'danger'],
                    ['CSS3', 85, 'css3', 'primary'],
                    ['JavaScript', 70, 'javascript', 'warning'],
                    ['PHP & MySQL', 85, 'php', 'success', 'mysql'],
                    ['Bootstrap', 80, 'bootstrap', 'info'],
                    ['Git & GitHub', 75, 'git', 'dark', 'github']
                ];

                $delay = 0;
                foreach ($hardSkills as $skill) {
                    echo '<div class="col-md-6" data-aos="fade-up" data-aos-delay="' . $delay . '">';
                    echo '<div class="d-flex align-items-center mb-2">';
                    echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/' . $skill[2] . '/' . $skill[2] . '-original.svg" alt="' . $skill[0] . '" height="30" class="me-2">';
                    if (isset($skill[4])) {
                        echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/' . $skill[4] . '/' . $skill[4] . '-original.svg" alt="' . $skill[4] . '" height="30" class="me-2">';
                    }
                    echo '<strong>' . $skill[0] . ' (' . $skill[1] . '%)</strong>';
                    echo '</div>';
                    echo '<div class="progress" style="height: 8px;">';
                    echo '<div class="progress-bar bg-' . $skill[3] . '" style="width: ' . $skill[1] . '%;"></div>';
                    echo '</div>';
                    echo '</div>';
                    $delay += 100;
                }
                ?>
            </div>
        </div>

        <!-- Soft Skills -->
        <div class="mb-5" data-aos="fade-right">
            <h4 class="fw-bold mb-4"><i class="fa-solid fa-brain me-2 text-success"></i>Soft Skills</h4>
            <div class="row g-4">
                <?php
                $softSkills = [
                    ['fa-comments', 'Komunikasi Efektif', 'Mampu menyampaikan ide dan informasi dengan jelas dan profesional.'],
                    ['fa-users', 'Kerja Tim', 'Kolaboratif dalam tim dan berkontribusi pada hasil terbaik.'],
                    ['fa-clock', 'Manajemen Waktu', 'Mampu mengelola waktu dan menyelesaikan tugas tepat waktu.'],
                    ['fa-lightbulb', 'Problem Solving', 'Mampu menganalisis permasalahan dan menemukan solusi efektif secara mandiri.'],
                    ['fa-laptop', 'Adaptasi Teknologi', 'Cepat beradaptasi dengan tools dan teknologi baru dalam dunia digital.'],
                    ['fa-person-chalkboard', 'Kepemimpinan', 'Mampu mengarahkan tim dan mengambil keputusan strategis saat dibutuhkan.']
                ];

                $delay = 0;
                foreach ($softSkills as $soft) {
                    echo '<div class="col-md-4" data-aos="zoom-in" data-aos-delay="' . $delay . '">';
                    echo '<div class="card border-0 shadow-sm p-3 text-center">';
                    echo '<i class="fa-solid ' . $soft[0] . ' fa-2x text-success mb-2"></i>';
                    echo '<h6 class="fw-bold">' . $soft[1] . '</h6>';
                    echo '<p class="small text-muted">' . $soft[2] . '</p>';
                    echo '</div></div>';
                    $delay += 150;
                }
                ?>
            </div>
        </div>

        <!-- Tools & Software -->
        <div class="mb-5" data-aos="fade-left">
            <h4 class="fw-bold mb-4"><i class="fa-solid fa-toolbox me-2 text-success"></i>Tools & Software</h4>
            <div class="d-flex flex-wrap gap-4 justify-content-center align-items-center">
                <img src="https://img.icons8.com/color/48/microsoft-word-2019--v1.png" alt="Microsoft Word" height="40" data-aos="flip-up">
                <img src="https://img.icons8.com/color/48/microsoft-excel-2019--v1.png" alt="Microsoft Excel" height="40" data-aos="flip-up" data-aos-delay="100">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" alt="VS Code" height="40" data-aos="flip-up" data-aos-delay="200">
                <img src="https://www.apachefriends.org/images/xampp-logo-ac950edf.svg" alt="XAMPP" height="40" data-aos="flip-up" data-aos-delay="300">
                <img src="https://laragon.org/logo.svg" alt="Laragon" height="40" data-aos="flip-up" data-aos-delay="400">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/ChatGPT_logo.svg" alt="ChatGPT" height="40" data-aos="flip-up" data-aos-delay="500">
                <img src="https://static.canva.com/web/images/8439b51bb7a19f6e65ce1064bc37c197.svg" alt="Canva" height="40" data-aos="flip-up" data-aos-delay="600">
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="contact.php" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold shadow">
                <i class="fa-solid fa-handshake me-2"></i> Ayo Kolaborasi
            </a>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>