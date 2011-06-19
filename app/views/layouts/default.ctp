<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title><?php echo $title_for_layout; ?> </title>
 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
 <!-- Include external files and scripts here (See HTML helper for more info.) -->
 <?php echo $this->element('fancybox_links'); ?>
 <?php echo $this->element('livequery_link'); ?>
 <?php echo $this->Html->css('default'); ?>
 <script type="text/javascript">
 $(document).ready(function() {
	$("#fancy_img").fancybox({
	'padding': 0,
	'autoScale': false
	});
});
$(document).ready(function(){
	setTimeout(function(){
	/* success message */
	$('.message').fadeOut("slow", function () {
	$('.message').remove();
	});
        /* general error message */
	$('.message-error').fadeOut("slow", function () {
	$('.message-error').remove();
	});
	/* validation error message */
	$('.error-message').fadeOut("slow", function () {
	$('.error-message').remove();
	});
        /* custom validation error message */
        $('.custom-error-message').fadeOut("slow", function () {
	$('.custom-error-message').remove();
	});

	}, 2000);
});

<?php
//$(this).parent('span').parent('li').addClass('li-selected');
?>
</script>
 </head>
 <body>

 <!-- If you'd like some sort of menu to
 show up on all of your views, include it here -->
 <div id="skeleton">
  <div id="header">
  <div id="topsection">
  <div id="logo"><?php echo $this->Html->link($this->Html->image('costcontrol.png'),'/',array('escape'=>false));  ?></div>

  </div>
 <div id="menu">
 <ul>
  <?php echo $this->element('menu',
  			array("menu" =>
  			array(
  				  'Expenses' => array('expenses'=>'index'), //controller/action pair
  				   //static view 'About' => 'about',
  				  'Incomes'=> array('incomes'=>'index')
  			))); ?>
  </ul>
 </div>
 </div>
 <!-- Here's where I want my views to be displayed -->
 <div class="viewcontainer">
 <?php echo $content_for_layout ?>
   </div>
 <!-- Add a footer to each displayed page -->
 <div class="spacer"></div>
 </div>
 <div id="footer">&copy; 2011 - con IT Solutions</div>
 <div id="<?php if(isset($message) )echo $message; ?>">
 <?php
 	echo $session->flash();
 ?>
 </div>
 </body>
 </html>