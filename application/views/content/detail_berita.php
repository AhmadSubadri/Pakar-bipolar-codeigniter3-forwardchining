<div id="home" class="parallax wow fadeIn" data-stellar-background-ratio="0.4"></div>
<div id="about" class="section wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="heading">
                    <span class="icon-logo"><img src="<?= base_url(); ?>assets/images/icon-logo.png" alt="#"></span>
                    <h2>Detail Artikel</h2>
                </div>
                <div class="message-box row">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <h2><?= $data->judul; ?></h2>
                                <p class="small"><i class="fa fa-calendar-o"></i> <?= $data->date; ?> <i class="fa fa-user"> </i> <?= $data->pembuat; ?></p>
                                <div class="text-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('assets/images/' . $data->gambar); ?>" height="100%" width="100%">
                                </div>
                                <p><?= $data->konten; ?></p>
                            </div>
                            <hr class="hr1">
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