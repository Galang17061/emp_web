</div>
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url()?>asset/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url()?>asset/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url()?>asset/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="<?= base_url()?>asset/dist/js/app.min.js"></script>
<script src="<?= base_url()?>asset/dist/js/app.init.mini-sidebar.js"></script>
<script src="<?= base_url()?>asset/dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url()?>asset/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url()?>asset/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url()?>asset/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url()?>asset/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url()?>asset/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="<?= base_url()?>asset/assets/extra-libs/c3/d3.min.js"></script>
<script src="<?= base_url()?>asset/assets/extra-libs/c3/c3.min.js"></script>
<script src="<?= base_url()?>asset/dist/js/pages/dashboards/dashboard4.js"></script>
<!-- Extra Script -->
<?php 
    if(!empty($extra_script)){
        if(is_array($extra_script)){
            foreach($extra_script as $script){
                echo $script;
            };
        }
        else{
            echo $extra_script;
        }
    }
?>
<!-- End Extra Script -->
</body>

</html>
