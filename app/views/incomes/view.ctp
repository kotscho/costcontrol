<h3><?php echo $income['Income']['id']; ?></h3>
<?php echo $this->Html->link('previous page', array('controller' => 'incomes', 'action' => 'index')); ?>
<p><small>Καταχώριση στης: <?php echo date("d-m-Y", $income['Income']['time_stamp']); ?></small></p>
