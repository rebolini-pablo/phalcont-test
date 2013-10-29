{% if success %}
  <h1>Post deleted!</h1>
  <a href="{{url('admin/list')}}">Back to list</a>
{% else %}
  {% if post %}
    <h1>Delete post #{{ post.id }}</h1>
    <form method="post">
      <label>Confirm delete</label>
      <input type="submit" value="delete">
    </form>
  {% endif %}
{% endif %}