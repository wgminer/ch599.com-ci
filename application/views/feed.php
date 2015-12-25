<?php $this->load->view('partials/head'); ?>
<?php $this->load->view('partials/toolbar'); ?>
<?php $this->load->view('partials/controls'); ?>


<div class="hero">
	<p>You're on <a href="<?php echo base_url() ?>">Channel 599</a>,<br> a music blog started in Rob's room.</p>
</div>

<div class="feed" reload>
    <?php $this->load->view('partials/songs'); ?>
</div>

<button class="paginate">Moar</button>

<?php $this->load->view('partials/footer'); ?>
