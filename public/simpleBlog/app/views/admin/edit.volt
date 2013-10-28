<h1>Edit post #{{post.id}}</h1>

<form method="post" action="{{ url('admin/edit/') }}{{post.id}}">
 <p>
    <label for="title">Title</label>
    <input type="text" name="title" value="{{post.title}}">
 </p>

 <p>
    <label for="description">description</label>
      <input type="text" name="description" value="{{post.description}}">
 </p>

 <p>
    <label for="content">Content</label>
    <textarea name="content">{{ post.content }}</textarea>
 </p>

 <p>
    <input type="submit" value="Save">
 </p>
  
</form>

<a href="{{ url('admin/list') }}">Back to list</a>