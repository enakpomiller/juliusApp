

<?php $this->view('layout/fragment/header') ?>
<?php $this->view('layout/fragment/slider') ?>

<?php require('pages/'.$page_title.'.php'); ?>
<?php $this->view('layout/fragment/footer') ?>
