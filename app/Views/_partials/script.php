<!-- Modernizer JS -->
<script src="<?php echo base_url();?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
<!-- jQuery JS -->
<script src="<?php echo base_url();?>/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url();?>/assets/js/vendor/bootstrap.min.js"></script>
<!-- wow JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/wow.min.js"></script>
<!-- Swiper Slider JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/swiper.min.js"></script>
<!-- Light gallery JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/lightgallery.min.js"></script>
<!-- Waypoints JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/waypoints.min.js"></script>
<!-- Counter down JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/countdown.min.js"></script>
<!-- Isotope JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/isotope.min.js"></script>
<!-- Masonry JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/masonry.min.js"></script>
<!-- ImagesLoaded JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/images-loaded.min.js"></script>
<!-- Wavify JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/wavify.js"></script>
<!-- jQuery Wavify JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/jquery.wavify.js"></script>
<!-- circle progress JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/circle-progress.min.js"></script>
<!-- counterup JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/counterup.min.js"></script>
<!-- animation text JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/animation-text.min.js"></script>
<!-- Vivus JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/vivus.min.js"></script>
<!-- Some plugins JS -->
<script src="<?php echo base_url();?>/assets/js/plugins/some-plugins.js"></script>
<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
<!-- <script src="<?php echo base_url();?>/assets/js/plugins/plugins.min.js"></script>  -->
<!-- Main JS -->
<script src="<?php echo base_url();?>/assets/js/main.js"></script>

<script>
    $(document).ready(function() {
        $(".link-contactus").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    window.location.hash = hash;
                });
            }
        });
    });
</script>