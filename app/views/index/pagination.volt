<?php //echo "<pre>"; echo print_r($page); echo "</pre>"; ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
{% for items in page.items %}
	<tr>
		<td>{{ items.film_id }}</td>
		<td>{{ items.title }}</td>
		<td>{{ items.description }}</td>
	</tr>
{% endfor %}
</table>
{{link_to(url.getBaseUri() ~ "index/pagination", "first")}} 
{{link_to(url.getBaseUri() ~ "index/pagination?page=" ~ page.before, "Previous")}} 
{{link_to(url.getBaseUri() ~ "index/pagination?page=" ~ page.next, "Next")}} 
{{link_to(url.getBaseUri() ~ "index/pagination?page=" ~ page.last, "Last")}} 
<br />
{{ "You are in page " ~ page.current ~ " of " ~ page.total_pages }}