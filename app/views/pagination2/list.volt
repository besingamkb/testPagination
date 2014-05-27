<table>
	<tr>
		<th>FILD ID</th>
		<th>TITLE</th>
		<th>DESCRIPTION</th>
	</tr>
	{% for film in page.items %}
	<tr>
		<td>{{ film.film_id }}</td>
		<td>{{ film.title }}</td>
		<td>{{ film.description }}</td>
	</tr>
	{% endfor %}
</table>
<p><span>{{ link_to(url.getBaseUri() ~ "pagination2/list/", "first") }} {{ link_to(url.getBaseUri() ~ "pagination2/list/" ~ page.before, "Previous") }} {{ link_to(url.getBaseUri() ~ "pagination2/list/" ~ page.next, "next") }} {{ link_to(url.getBaseUri() ~ "pagination2/list/" ~ page.last, "last") }} </span> <span>Your are currently in {{ page.current ~ " out of " ~ page.total_pages }}</span></p>