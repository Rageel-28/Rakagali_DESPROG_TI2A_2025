<?php
include 'header.php';
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | Lab NCS</title>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <div class="page-wrapper">
        
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Tentang Kami</h2>
                <ul class="nionx-breadcrumb list-unstyled">
                    <li><a href="index.html">Beranda</a></li>
                    <li><span>Profil Lab NCS</span></li>
                </ul>
            </div>
        </section>
        
        <section class="lab-sejarah pt-120 pb-80" id="sejarah">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-two__left">
                            <div class="about-two__thumb">
                                <div class="about-two__thumb__item">
                                    <img src="assets/images/about/about-2-1.png" alt="lab history">
                                </div>
                                <div class="about-two__thumb__item about-two__thumb__item--two">
                                    <img src="assets/images/about/about-s-2-1.png" alt="lab secondary image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-two__right">
                            <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                                <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Sejarah Lab" class="sec-title__img">Sejarah Lab</h6>
                                <h3 class="sec-title__title">Perjalanan Lab NCS dalam Keamanan Siber</h3>
                            </div>
                            <p class="about-two__top__text">**[KONTEN DARI ADMIN]** Laboratorium Cyber Security (NCS) didirikan pada tahun **20XX** sebagai respons terhadap meningkatnya kebutuhan akan tenaga ahli dan penelitian mendalam di bidang keamanan siber, khususnya di Polinema.</p>
                            <p>Sejak awal, kami berkomitmen untuk menjadi garda terdepan dalam edukasi dan inovasi, dimulai dari fokus pada forensik digital dasar hingga pengembangan solusi keamanan berbasis kecerdasan buatan.</p>
                            
                            <div class="about-two__link">
                                <a href="#" class="about-two__link__btn laboix-btn">Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="lab-visi-misi join-us-tow pt-120 pb-120" id="visi-misi">
            <div class="join-us-tow__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/juin-us-bg.png);"></div>
            <div class="container">
                <div class="sec-title sec-title--two text-center wow fadeInUp mb-5" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="Visi Misi" class="sec-title__img">Tujuan dan Cita-cita</h6>
                    <h3 class="sec-title__title">Visi dan Misi Laboratorium NCS</h3>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="join-us-tow__item text-center">
                            <div class="join-us-tow__content">
                                <div class="join-us-tow__icon">
                                    <i class="icon-trophy-1"></i> 
                                </div>
                                <h4 class="join-us-tow__title">Visi</h4>
                                <p class="join-us-tow__text">**[KONTEN DARI ADMIN]** Menjadi pusat unggulan riset dan edukasi keamanan siber terkemuka di tingkat nasional dan diakui secara internasional pada tahun 20XX.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="join-us-tow__item text-center">
                            <div class="join-us-tow__content">
                                <div class="join-us-tow__icon">
                                    <i class="icon-test-tubes-1"></i> 
                                </div>
                                <h4 class="join-us-tow__title">Misi</h4>
                                <ul class="list-unstyled text-start">
                                    <li><i class="fas fa-check-circle text-primary me-2"></i> Melaksanakan penelitian inovatif di bidang Cyber Security.</li>
                                    <li><i class="fas fa-check-circle text-primary me-2"></i> Mendukung kegiatan akademik dan pelatihan praktis bagi mahasiswa.</li>
                                    <li><i class="fas fa-check-circle text-primary me-2"></i> Berkontribusi pada masyarakat dan industri melalui layanan keamanan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="lab-struktur-organisasi testimonials-one pt-120 pb-120" id="struktur-organisasi">
            <div class="container">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Struktur Lab" class="sec-title__img">Pengelola Lab</h6>
                    <h3 class="sec-title__title">Struktur Organisasi Lab NCS</h3>
                </div>
                
                <p class="text-center mb-5 text-muted"></p>

                <div class="testimonials-one__carousel laboix-owl__carousel laboix-owl__carousel--with-shadow owl-carousel" data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": true,
                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-arrow\"></span>"],
                    "dots": false,
                    "autoplay": true,
                    "responsive": {
                        "0": {"items": 1},
                        "768": {"items": 2, "margin": 30},
                        "992": {"items": 3, "margin": 30}
                    }
                }'>
                    
                    <div class="item">
                        <div class="testimonials-one__item text-center">
                            <div class="testimonials-one__author">
                                <div class="testimonials-one__author__thumb mb-3">
                                    <img src="assets/images/about/about-3-1.png" alt="Kepala Lab">
                                </div>
                                <div class="testimonials-one__author__content">
                                    <h5 class="testimonials-one__author__name">Dr. Budi Santoso</h5>
                                    <span class="testimonials-one__author__deg">Kepala Laboratorium</span>
                                </div>
                            </div>
                            <p class="testimonials-one__text mt-3">Penanggung jawab seluruh operasional dan arah riset strategis Lab NCS.</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="testimonials-one__item text-center">
                            <div class="testimonials-one__author">
                                <div class="testimonials-one__author__thumb mb-3">
                                    <img src="assets/images/about/about-s-3-1.png" alt="Teknisi Lab">
                                </div>
                                <div class="testimonials-one__author__content">
                                    <h5 class="testimonials-one__author__name">Siti Aminah, M.Kom</h5>
                                    <span class="testimonials-one__author__deg">Teknisi & Administrasi Lab</span>
                                </div>
                            </div>
                            <p class="testimonials-one__text mt-3">Bertanggung jawab atas pemeliharaan infrastruktur teknis dan aset lab.</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="testimonials-one__item text-center">
                            <div class="testimonials-one__author">
                                <div class="testimonials-one__author__thumb mb-3">
                                    <img src="assets/images/about/about-4-1.png" alt="Asisten Koordinator">
                                </div>
                                <div class="testimonials-one__author__content">
                                    <h5 class="testimonials-one__author__name">Dian Permata</h5>
                                    <span class="testimonials-one__author__deg">Koordinator Asisten</span>
                                </div>
                            </div>
                            <p class="testimonials-one__text mt-3">Mengelola jadwal, pelatihan, dan kegiatan harian para asisten lab.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="lab-kelebihan choose-us-one pt-120 pb-120" id="kelebihan-fasilitas">
            <div class="choose-us-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/shapes/why-choose-us.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-us-one__left">
                            <div class="choose-us-one__top">
                                <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='1500ms'>
                                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="Kelebihan Lab" class="sec-title__img">Kelebihan Kami</h6>
                                    <h3 class="sec-title__title">Mengapa Lab NCS Unggul?</h3>
                                </div>
                                <p class="choose-us-one__top__text">Lab NCS adalah pusat riset terkemuka di Polinema yang didukung oleh sumber daya manusia dan peralatan spesialis yang jarang ditemukan. Fokus kami pada keamanan siber dan forensik digital menciptakan lingkungan belajar dan penelitian yang tak tertandingi.</p>
                            </div>
                            
                            <div class="choose-us-one__feature">
                                <div class="choose-us-one__feature__item">
                                    <div class="choose-us-one__feature__thumb">
                                        <i class="fas fa-microscope fa-3x text-primary d-block mb-3"></i>
                                    </div>
                                    <h4 class="choose-us-one__feature__title">Fokus Cyber Crime Tunggal</h4>
                                    <p class="choose-us-one__feature__text">Satu-satunya lab di Polinema yang fokus pada investigasi dan pencegahan kejahatan siber.</p>
                                </div>
                                <div class="choose-us-one__feature__item">
                                    <div class="choose-us-one__feature__thumb">
                                        <i class="fas fa-user-shield fa-3x text-primary d-block mb-3"></i>
                                    </div>
                                    <h4 class="choose-us-one__feature__title">SDM Tersertifikasi</h4>
                                    <p class="choose-us-one__feature__text">Tim pengelola dan peneliti bersertifikasi internasional dalam forensik dan keamanan jaringan.</p>
                                </div>
                            </div>
                            
                            <ul class="about-two__list list-unstyled">
                                <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Kurikulum terapan yang *up-to-date* dengan ancaman global. </li>
                                <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Jaringan kerjasama dengan industri dan instansi keamanan nasional.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="choose-us-one__right">
                            <div class="choose-us-one__thumb">
                                <h3 class="sec-title__title mb-3">Fasilitas Laboratorium</h3>
                                <ul class="list-unstyled about-two__list">
                                    <li class="about-two__list__item"><i class="fas fa-tools text-danger"></i> **Peralatan Forensic Digital:** Software berlisensi seperti EnCase dan FTK Imager.</li>
                                    <li class="about-two__list__item"><i class="fas fa-tools text-danger"></i> **Server Isolasi Khusus:** Lingkungan aman untuk analisis *malware*.</li>
                                    <li class="about-two__list__item"><i class="fas fa-tools text-danger"></i> **Area Blue Team/Red Team:** Fasilitas simulasi serangan dan pertahanan.</li>
                                    <li class="about-two__list__item"><i class="fas fa-tools text-danger"></i> **Jaringan Gigabit Terpisah:** Untuk kecepatan dan keamanan riset.</li>
                                </ul>
                                <img src="assets/images/about/why-choos-2-1.png" alt="laboix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </section>

        <footer class="main-footer main-footer--one">
            </footer>
    </div>
    
    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script> 
    <script src="assets/js/laboix.js"></script>
    
</body>

                <style>
                .choose-us-one__right h3.sec-title__title {
                    color: #ffffff; /* Ubah jadi putih atau warna kontras lain */
                    text-shadow: 0 1px 4px rgba(0, 0, 0, 0.5); /* Tambah bayangan agar lebih jelas */
                }

                .choose-us-one__right ul.about-two__list li {
                    color: #f1f1f1; /* Warna teks terang */
                    font-weight: 500;
                }

                .choose-us-one__right ul.about-two__list li i {
                    color: #ff4d4d; /* Warna ikon tetap merah */
                }

                /* Jika masih tampak gelap, tambahkan lapisan transparan pada background */
                .choose-us-one__thumb {
                    padding: 20px;
                    border-radius: 12px;
                }

                /* --- FIX: list di kolom kiri juga dibikin terang --- */
                .lab-kelebihan .about-two__list .about-two__list__item {
                    color: #fff;               /* bikin putih biar kontras */
                }

                .lab-kelebihan .about-two__list .about-two__list__item i {
                    color: #4dd0ff;            /* boleh ganti, ini ikon checklist */
                    margin-right: 6px;
                }

                </style>

<?php
include 'footer.php';
?>
</html>

