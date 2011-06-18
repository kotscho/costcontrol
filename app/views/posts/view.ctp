<!-- File: /app/views/posts/view.ctp -->
<h1><?php echo $post['Post']['title']; ?></h1>
<?php echo $this->Html->link('previous page', array('controller' => 'posts', 'action' => 'index')); ?>
<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo $post['Post']['body']; ?></p>
