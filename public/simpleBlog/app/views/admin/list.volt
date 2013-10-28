{% if posts %}
  <h1>Posts</h1>
  <ul>
    {% for post in posts %}
      <li>{{ post.title }} - <a href="{{ url('admin/edit/') }}{{post.id}}">Edit</a> - <a href="{{ url('admin/delete/') }}{{post.id}}">Delete</a></li>
    {% endfor %}
  </ul>
{% else %}
  <h1>No posts loaded</h1>
{% endif %}

<a href="{{ url('admin/create') }}">Create post</a>