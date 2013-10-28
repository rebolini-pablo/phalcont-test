<h1>Posts Cargados</h1>

{% if posts %}
<ul>
  {% for post in posts %}
  <li><a href="post/read/{{ post.id }}">{{ post.title }}</a></li>
  {% endfor %}
</ul>
{% else %}
  Sorry...No posts loaded
{% endif %}