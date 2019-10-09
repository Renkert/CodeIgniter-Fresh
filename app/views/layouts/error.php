<?php $this->load->view('blocks/head'); ?>
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

<?php $this->load->view('blocks/error_footer'); ?>
