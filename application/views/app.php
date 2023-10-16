
<!-- Header -->
<?php $this->load->view('include/header') ?>
<!-- Header -->

<!-- sidebar -->
<?php $this->load->view('include/sidebar') ?>
<!-- sidebar -->

<!-- topbar -->
<?php $this->load->view('include/topbar')  ?>
<!--/ topbar -->

<!-- content -->
<section style="height: -webkit-fill-available;">
        <?php $this->load->view($page)  ?>
</section>
<!--/ content -->


<!-- footer -->
<?php $this->load->view('include/footer') ?>
<!-- footer -->