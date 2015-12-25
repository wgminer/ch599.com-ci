<?php $this->load->view('partials/head'); ?>
<?php $this->load->view('partials/toolbar'); ?>
<?php $this->load->view('partials/controls'); ?>

<div class="hero">
    <p><?php echo $genre->name; ?></p>
</div>

<div class="feed" reload>
    <?php $this->load->view('partials/songs'); ?>
</div>

<button class="paginate">Moar</button>

<?php $this->load->view('partials/footer'); ?>