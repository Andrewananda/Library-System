<script src="<?= base_url(); ?>/public/assets/js/vendor/jquery.min.js"></script>
<script src="<?= base_url(); ?>/public/assets/js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/public/assets/js/plugins.js"></script>
<script src="<?= base_url(); ?>/public/assets/js/app.js"></script>

<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="<?= base_url(); ?>/public/assets/js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="<?= base_url(); ?>/public/assets/js/pages/index.js"></script>
<script>
    $(function() {
        Index.init();
    });
</script>
</body>

</html>