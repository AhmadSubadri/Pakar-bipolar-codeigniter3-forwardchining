<div id="home" class="parallax wow fadeIn" data-stellar-background-ratio="0.4"></div>
<div id="about" class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-content">
                        <h2 class="card-text">Selamat datang di sistem pakar<br>diagnosa penyakit bipolar Argodadi!</h2>
                    </div>
                    <div class="card-image">
                        <img src="<?= base_url(); ?>assets/images/about_03.jpg" alt="Gambar" width="200" height="100" />
                    </div>
                </div><br>
                <div class="heading">
                    <span class="icon-logo"><img src="<?= base_url(); ?>assets/images/icon-logo.png" alt="#"></span>
                    <h2>Artikel Terkini</h2>
                </div>
                <div class="message-box row">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row g-0">
                            <?php if (!$berita) : ?>
                                <h1>Berita kosong</h1>
                            <?php else : ?>
                                <?php foreach ($berita as $item) : ?>
                                    <div class="col-sm-3 text-center">
                                        <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('assets/images/' . $item->gambar); ?>" height="100%" width="100%">
                                    </div>
                                    <div class="col-md-9">
                                        <a href="<?= site_url('detail-berita/' . $item->slug); ?>">
                                            <h4><?= $item->judul; ?></h4>
                                        </a>
                                        <p class="small"><i class="fa fa-calendar-o"></i> <?= $item->date; ?> <i class="fa fa-user"> </i> <?= $item->pembuat; ?></p>
                                        <p><?= word_limiter($item->konten, 10); ?> <a href="<?= site_url('detail-berita/' . $item->slug); ?>">selengkapnya...</a></p>
                                    </div>
                                    <!-- <hr class="hr1"> -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="pagination">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
                <hr class="hr1">
                <div class="row">
                    <div class="heading">
                        <h2>Artikel Terkait</h2>
                    </div>
                    <?php if (!$child) : ?>
                        <h1>Berita kosong</h1>
                    <?php else : ?>
                        <?php foreach ($child as $item) : ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="service-widget">
                                    <div class="post-media wow fadeIn">
                                        <a href="<?= base_url('assets/images/' . $item->gambar); ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                        <img src="<?= base_url('assets/images/' . $item->gambar); ?>" alt="" class="img-responsive">
                                    </div>
                                    <h3>
                                        <a href="<?= site_url('detail-berita/' . $item->slug); ?>">
                                            <?= $item->judul; ?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-4">
                <div class="appointment-form">
                    <h3 class="text-center"><span>+</span> Maps</h3>
                    <div class="form">
                        <div class="post-media wow fadeIn">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7905.544726390774!2d110.24935337770997!3d-7.813904399999981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af9e9d315a8f5%3A0x73bd6940df674fcd!2sKantor%20Kapanewon%20Sedayu!5e0!3m2!1sid!2sid!4v1684077167052!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="appointment-form">
                    <h3 class="text-center"><span>+</span> Galeri</h3>
                    <div class="row">
                        <hr class="hr1">
                        <?php if (!$galeri) : ?>
                            <h1>Berita kosong</h1>
                        <?php else : ?>
                            <?php foreach ($galeri as $item) : ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="service-widget">
                                        <div class="post-media wow fadeIn">
                                            <a href="<?= base_url('assets/images/' . $item->gambar); ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                            <img src="<?= base_url('assets/images/' . $item->gambar); ?>" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="appointment-form">
                    <h3 class="text-center"><span>+</span> Media Sosial</h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn text-center">
                                    <div class="footer-social">
                                        <a href="#" class="btn btn-lg grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn btn-lg grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn btn-lg grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn btn-lg grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card {
        display: flex;
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
        height: 200px;
        padding: 10px;
        box-shadow: 2px 2px 2px 2px;
    }

    .card-content {
        flex: 1;
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-text {
        font-weight: bold;
        text-align: left;
    }

    .card-image {
        position: relative;
        width: 30%;
        height: 100%;
    }

    .wave {
        fill: #f2f2f2;
    }

    .wave-svg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>