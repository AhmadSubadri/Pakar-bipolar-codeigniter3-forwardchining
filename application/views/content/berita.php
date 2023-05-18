<div id="home" class="parallax wow fadeIn" data-stellar-background-ratio="0.4"></div>
<div id="about" class="section wow fadeIn">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="<?= base_url(); ?>assets/images/icon-logo.png" alt="#"></span>
            <h2>Artikel Terkini</h2>
        </div>
        <div class="row dev-list">
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="<?= base_url(); ?>assets/images/kecil_1683597252APU.jpg" width="100%" height="100%" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <br>
                            <a href=""><small>Politik Uang Bawa Pengaruh Buruk Untuk Demokrasi Indonesia</small></a>
                            <p class="small"><i class="fa fa-calendar-o"></i> <?= date('Y-m-d'); ?> <i class="fa fa-user"> </i> Admin pinilih</p>
                        </div>
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta. <a href="">Selengkapnya...</a></p>
                    </div><!--widget -->
                </div><!-- end col -->
            <?php endfor; ?>
        </div><!-- end row -->
    </div><!-- end row -->
</div><!-- end row -->