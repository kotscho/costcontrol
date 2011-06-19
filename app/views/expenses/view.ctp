<h3><?php echo $expense['Expense']['id']; ?></h3>
<?php echo $this->Html->link('previous page', array('controller' => 'expenses', 'action' => 'index')); ?>
<p><small>Καταχώριση στης: <?php echo date("d-m-Y", $expense['Player']['time_stamp']); ?></small></p>

