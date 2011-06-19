
<h3>Add an income record</h3>
<?php echo $this->Html->link('previous page', array('controller' => 'expenses', 'action' => 'index')); ?>
<br /><br />
<div class="player-inp"><!-- i'm using matchstats css, it serves well for this pupose-->
<?php
 echo $this->Form->create('Income', array('action' => 'add', 'type' => 'file', 'inputDefaults' => array('error' => array('class' => 'custom-error-message'))));
 echo $this->Form->input('salary', array('label' => 'ΟΤΕ','between'=> '<br />'));
 echo $this->Form->input('tax_refunds',array('label' => 'Επιστροφή Φόρου','between'=> '<br />'));
 echo $this->Form->input('pension',array('label' => 'Συντάξης','between'=> '<br />'));


 echo $this->Form->input('miscellaneous',array('label' => 'Διάφορα','between'=> '<br />'));
 echo $this->Form->input('time_stamp', array('label' => 'Ημμ.','type'=>'date', 'empty'=>true,
 'minYear'=>2000, 'maxYear'=>2011, 'format'=>'dmy', 'between' => '<br />'));
 echo '<br />';
 echo $this->Form->end('Save income');
 ?>
</div>
