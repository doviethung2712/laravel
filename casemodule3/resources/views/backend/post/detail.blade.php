<div class="container">
    <table border="1">
        <tr>
            <th>Name</th>
            <td>{{$post->username}}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{$post->title}}</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>{{$post->content}}</td>
        </tr>
        <tr>
            <th>Comments</th>
            <td>{{$post->comment}}</td>
        </tr>
    </table>
</div>
<a href="{{route('post.index')}}">Post List</a>
