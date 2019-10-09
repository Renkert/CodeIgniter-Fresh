<?php $this->load->view('blocks/head'); ?>
<?php $this->load->view('blocks/header'); ?>
<?php
if (isset($view) && $view != "") {
	$this->load->view($view);
}
?>

<?php
if (isset($content) && $content != "") {
	echo $content;
}
?>

<?php $this->load->view('blocks/footer'); ?>
