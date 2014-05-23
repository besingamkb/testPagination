<?php //echo "<pre>"; echo print_r($page); echo "</pre>"; ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
<?php foreach ($page->items as $items) { ?>
	<tr>
		<td><?php echo $items->film_id; ?></td>
		<td><?php echo $items->title; ?></td>
		<td><?php echo $items->description; ?></td>
	</tr>
<?php } ?>
</table>
<?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/pagination', 'first')); ?> 
<?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/pagination?page=' . $page->before, 'Previous')); ?> 
<?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/pagination?page=' . $page->next, 'Next')); ?> 
<?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/pagination?page=' . $page->last, 'Last')); ?> 
<br />
<?php echo 'You are in page ' . $page->current . ' of ' . $page->total_pages; ?>