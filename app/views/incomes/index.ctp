<!-- File: /app/views/posts/index.ctp -->

<h3>Incomes</h3>
<?php echo $this->Html->link('Add Income', array('controller' => 'incomes', 'action'=> 'add')); ?>
<br /><br />
<table>
	<tr class="player-list-tr">
		<th>Κωδικός</th>
		<th>Ημμ.καταχώρισης</th>
                <th></th>
	</tr>

	<!-- Here is where we loop through our $players array, printing out post info -->
	<?php //$players = $this->requestAction('posts/index/sort:title/direction:asc/limit:3') ?>
	<?php foreach ($incomes as $income): ?>
	<tr>
		<td>
		<?php echo $income['Income']['id']; ?>
		</td>
		<td><?php echo date("d-m-Y", $income['Income']['time_stamp']); ?></td>
		<td>
		<?php echo $this->Html->link('Delete Income record', array('action' => 'delete' , $income['Income']['id']), null, 'Are you sure?');?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $income['Income']['id']));?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php
echo $html->div(
  null,
  $paginator->prev(
    '<< Previous',
    array(
      'class' => 'PrevPg'
    ),
    null,
    array(
      'class' => 'PrevPg DisabledPgLk'
    )
  ).
  $paginator->numbers().
  $paginator->next(
    'Next >>',
    array(
      'class' => 'NextPg'
    ),
    null,
    array(
      'class' => 'NextPg DisabledPgLk'
    )
  ),
  array(
    'style' => 'width: 100%;'
  )
);
?>