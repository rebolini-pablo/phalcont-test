{% if post %}
  <h1>{{ post.title }}</h1>
  <h2>{{ post.description }}</h2>
  <p>{{ post.content }}</p>

  <a href="../../">Back to post list.</a>
{% else %}
  <h1>Invalid Post ID</h1>
{% endif %}