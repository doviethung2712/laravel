<div class="container">
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Title</th>
                <th>content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key => $post)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td><a href="{{route('post.edit',$post->id)}}">Update</a></td>
                <td><a href="{{route('post.detail',$post->id)}}">Detail</a></td>
                <td><a onclick="return confirm('Are you sure')" href="{{route('post.delete',$post->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
