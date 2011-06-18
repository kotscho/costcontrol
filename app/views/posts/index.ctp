<!-- File: /app/views/posts/index.ctp -->
	<?php $this->Html->css('default.css',  null, array("inline"=>false )); ?>
<h1>Blog posts</h1>
<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action'=> 'add')); ?>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->
	<?php //$posts = $this->requestAction('posts/index/sort:title/direction:asc/limit:3') ?>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link('Delete Post', array('action' => 'delete' , $post['Post']['id']), null, 'Are you sure?');?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
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