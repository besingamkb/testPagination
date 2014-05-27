<table>
	<tr>
		<th>FILD ID</th>
		<th>TITLE</th>
		<th>DESCRIPTION</th>
	</tr>
	<?php foreach ($page->items as $film) { ?>
	<tr>
		<td><?php echo $film->film_id; ?></td>
		<td><?php echo $film->title; ?></td>
		<td><?php echo $film->description; ?></td>
	</tr>
	<?php } ?>
</table>
<p><span><?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'pagination2/list/', 'first')); ?> <?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'pagination2/list/' . $page->before, 'Previous')); ?> <?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'pagination2/list/' . $page->next, 'next')); ?> <?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'pagination2/list/' . $page->last, 'last')); ?> </span> <span>Your are currently in <?php echo $page->current . ' out of ' . $page->total_pages; ?></span></p>