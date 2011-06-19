<!-- File: /app/views/posts/index.ctp -->

<h3>Expenses</h3>
<?php echo $this->Html->link('Add Expense', array('controller' => 'expenses', 'action'=> 'add')); ?>
<br /><br />
<table>
	<tr class="player-list-tr">
		<th>Κωδικός</th>
		<th>Ημμ.καταχώρισης</th>
                <th></th>
	</tr>

	<!-- Here is where we loop through our $players array, printing out post info -->
	<?php //$players = $this->requestAction('posts/index/sort:title/direction:asc/limit:3') ?>
	<?php foreach ($expenses as $expense): ?>
	<tr>
		<td>
		<?php echo $expense['Expense']['id']; ?>
		</td>
		<td><?php echo date("d-m-Y", $expense['Expense']['time_stamp']); ?></td>
		<td>
		<?php echo $this->Html->link('Delete Expense record', array('action' => 'delete' , $expense['Expense']['id']), null, 'Are you sure?');?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $expense['Expense']['id']));?>
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