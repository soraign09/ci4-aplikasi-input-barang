<html>
    <head>
        <tittle></tittle>
        <link href="<?=base_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet"  />
</head>
<body>

        <?=$this->renderSection('isiweb')?>

        <script src="<?=base_url('/assets/js/bootstrap.bundle.min.js')?>"></script>
</body>

<?=$this->renderSection('isiweb')?>
 <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url('/assets/node_modules/jquery/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('/assets/node_modules/popper/popper.min.js')?>"></script>
    <script src="<?=base_url('/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</html>