<h2 style="text-align: center">posts</h2>
<table style="width: 100%">
    <tr>
        <th>title</th>
        <th>text</th>
        <th>likes</th>
    </tr>
    <tr>
    @foreach ($posts as $post)

            <th>{{$post->title}}</th>
            <th>{{$post->text}}</th>
            <th>{{$post->likes}}</th>
        </tr>
@endforeach
</table>

