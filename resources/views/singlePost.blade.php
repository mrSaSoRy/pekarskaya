@extends('layouts/blog_details')

@section('page')
    @if ($post->count() === 0)
        <script> window.location = "/all";</script>

    @else
        @foreach( $post as $p)
        <div class="feature-img">
            <img class="img-fluid" src="{{$p->img}}" alt="">
        </div>
        <div class="blog_details">
            <h2>{{$p->title}}</h2>

            {!! $p->text!!}
        </div>


        @endforeach
    @endif
@endsection

@section('category')

    @foreach ($categories as $category)
        <li>
            <a href="/category/{{$category->id}}" class="d-flex">
                <p>{{$category->title}}</p>

            </a>
        </li>
    @endforeach


@endsection

@section('new_page')
    @foreach ($lastPages as $last)
        <div class="media post_item">
            <img src="{{$last->img_small}}" alt="post">
            <div class="media-body">
                <a href="blog_details.html">
                    <h3>{{$last->title}}</h3>
                </a>
                <p>{{$last->created_at}}</p>
            </div>
        </div>
    @endforeach
@endsection
