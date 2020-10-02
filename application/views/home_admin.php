<?php $this->load->view('global/head') ?>
	<?php $this->load->view('global/sidebar') ?>
		<?php $this->load->view('global/page_header') ?>
			<!-- Isi Konten Start -->
			<h1>Welcome, <?php echo $this->session->userdata("nama_user"); ?> To Dashboard</h1>
			<!-- Isi Konten Ends -->
		<?php $this->load->view('global/footer') ?>
		<!-- basic scripts -->
	<?php $this->load->view('global/script.php') ?>