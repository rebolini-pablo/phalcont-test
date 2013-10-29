<h1>Posts Cargados</h1>

{% if posts is empty %}
  Sorry...No posts loaded
{% else %}
<ul>
  {% for post in posts %}
    <li><a href="post/read/{{ post.id }}">{{ post.title }}</a></li>
  {% endfor %}
</ul>
{% endif %}