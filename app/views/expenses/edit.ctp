 <!-- File: /app/views/posts/edit.ctp -->
 <h3>Edit expense record</h3>
 <?php echo $this->Html->link('previous page', array('controller' => 'players', 'action' => 'index'));
 ?>
 <br /><br />
 <?php

 //echo $this->Html->link($this->Html->image('thumbs/'.basename($thumb)),'/img/'.basename($thumb),array('escape'=>false, 'id'=>'fancy_img'));
 ?>
 <br /><br />
<div class="player-inp"><!-- i'm using matchstats css, it serves well for this pupose-->
<?php
 echo $this->Form->create('Expense', array('action' => 'add', 'type' => 'file', 'inputDefaults' => array('error' => array('class' => 'custom-error-message'))));
 echo $this->Form->input('fixphone', array('label' => 'ΟΤΕ','between'=> '<br />'));
 echo $this->Form->input('energy',array('label' => 'ΔΕΙ','between'=> '<br />'));
 echo $this->Form->input('water',array('label' => 'ΕΥΔΑΠ','between'=> '<br />'));

 echo $this->Form->input('mobile',array('label' => 'Κιν. τηλέφωνο','between'=> '<br />'));
 echo $this->Form->input('healthinsurence',array('label' => 'ΤΕΒΕ','between'=> '<br />'));
 echo $this->Form->input('vat',array('label' => 'Φ.Π.Α','between'=> '<br />'));
 echo $this->Form->input('national_bank',array('label' => 'Εθνική','between'=> '<br />'));
 echo $this->Form->input('euro_bank',array('label' => 'Euro','between'=> '<br />'));

 echo $this->Form->input('alpha_bank',array('label' => 'Alpha','between'=> '<br />'));
 echo $this->Form->input('attica_bank',array('label' => 'Αττική','between'=> '<br />'));
 echo $this->Form->input('gas',array('label' => 'Βενζίνη','between'=> '<br />'));
 echo $this->Form->input('food',array('label' => 'Supermarket','between'=> '<br />'));
 echo $this->Form->input('entertainment',array('label' => 'Entertainment','between'=> '<br />'));
 echo $this->Form->input('miscellaneous',array('label' => 'Διάφορα','between'=> '<br />'));
 echo $this->Form->input('time_stamp', array('label' => 'Ημμ.','type'=>'date', 'empty'=>true,
 'minYear'=>2000, 'maxYear'=>2011, 'format'=>'dmy', 'between' => '<br />'));
 echo '<br />';
 echo $this->Form->end('Save expense');
 ?>
</div>