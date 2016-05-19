




<h1>{{ $article->title}}</h1>
<hr>
{{$article->content}}

<hr>
{{$article->user->name}} | {{$article->category->name}}
@foreach($article->tags as $tag)
    {{$tag->name}}
    @endforeach

@for($i = 0; $i<=5; $i++)
    {{$i}}
@endfor



