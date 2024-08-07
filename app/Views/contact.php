<?php echo $this->extend('layouts/default'); ?>
<?php echo $this->section('content'); ?>

<div class="container p-5 mb-10 bg-body-tertiary bg-success rounded-3">

    <!-- Section Title -->
    <div class="container section-title text-white py-5" data-aos="fade-up">
        <h2>Kontak</h2>
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-5">
                <div class="info-wrap">
                    <div class="info-item d-flex text-white" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Jl. Raya Keadilan No.A-17, Graha Graisena, Kec. Pancoran Mas, Kota Depok, Jawa Barat
                                16434</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="info-item d-flex text-white" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>No. Hp</h3>
                            <p>+62 895 0510 2424</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="info-item d-flex text-white" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>muhammadalfan2304.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9570076119253!2d106.77699707453357!3d-6.3995416625897805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef37212bb3f7%3A0xd8e3e2654ccd307b!2sGUNTARA%20Research%20and%20Creative%20Agency%20Jakarta!5e0!3m2!1sid!2sid!4v1723016867873!5m2!1sid!2sid"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6 text-white">
                            <label for="name-field" class="pb-2">Nama</label>
                            <input type="text" name="name" id="name-field" class="form-control" required="">
                        </div>

                        <div class="col-md-6 text-white">
                            <label for="email-field" class="pb-2">Email</label>
                            <input type="email" class="form-control" name="email" id="email-field" required="">
                        </div>

                        <div class="col-md-12 text-white">
                            <label for="subject-field" class="pb-2">Tema</label>
                            <input type="text" class="form-control" name="subject" id="subject-field" required="">
                        </div>

                        <div class="col-md-12 text-white">
                            <label for="message-field" class="pb-2">Deskripsi</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field"
                                required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center text-white">
                            <div class="error-message"></div>
                            <button class="btn btn-warning" type="submit">Kirim Pesan</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

    </section><!-- /Contact Section -->

    <?php echo $this->endSection(); ?>