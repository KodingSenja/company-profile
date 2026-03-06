<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Hubungi Kami</h2>
        <p>
            Punya ide project, ingin membuat website, sistem ERP, atau aplikasi bisnis?
            Silakan hubungi kami untuk konsultasi dan diskusi kebutuhan digital bisnis Anda.
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <!-- Contact Info -->
            <div class="col-lg-5">

                <div class="info-wrap">

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Kota Bekasi, Jawa Barat, Indonesia</p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>WhatsApp</h3>
                            <p>+62 896-6277-5429</p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>hello@wintechdev.com</p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h3>Jam Operasional</h3>
                            <p>Senin - Jumat : 09.00 - 18.00 WIB</p>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <iframe src="https://www.google.com/maps?q=Bekasi%20City&output=embed" frameborder="0"
                        style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy">
                    </iframe>

                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">

                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">

                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label class="pb-2">Nama</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="pb-2">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="col-md-12">
                            <label class="pb-2">Jenis Project</label>
                            <input type="text" name="subject" class="form-control"
                                placeholder="Website, ERP, Sistem Bisnis, dll" required>
                        </div>

                        <div class="col-md-12">
                            <label class="pb-2">Detail Kebutuhan</label>
                            <textarea name="message" rows="8" class="form-control" placeholder="Ceritakan kebutuhan project Anda..." required></textarea>
                        </div>

                        <div class="col-md-12 text-center">

                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan Anda berhasil dikirim. Terima kasih!</div>

                            <button type="submit" class="btn btn-primary">
                                Kirim Pesan
                            </button>

                        </div>

                    </div>

                </form>

            </div>
            <!-- End Contact Form -->

        </div>

    </div>

</section>
<!-- /Contact Section -->
