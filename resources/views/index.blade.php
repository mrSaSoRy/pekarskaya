@extends('layouts/blog')

@section('page')
    @foreach ($pages as $page)


    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="{{$page->img}}" alt="">
            <a href="#" class="blog_item_date">
                <h3>{{$page->created_at->format('d')}}</h3>
                <p>{{$page->created_at->format('M - Y')}}</p>
            </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="/post/{{$page->slug}}">
                <h2>{{$page->title}}</h2>
            </a>
            <p>{{$page->small_text}}</p>
        </div>
    </article>
    @endforeach

    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                {{$pages->links()}}
            </li>
        </ul>
    </nav>
@endsection

@section('category')

    @foreach ($categories as $category)
        <li>
            <a href="/category/{{$category->id}}" class="d-flex">
                <p>{{$category->title}}</p>
                <!--<p>(37)</p>-->
            </a>
        </li>
    @endforeach


@endsection

@section('new_page')
    @foreach ($lastPages as $last)
    <div class="media post_item">
        <img src="{{$last->img_small}}" alt="post">
        <div class="media-body">
            <a href="post/{{$last->id}}">
                <h3>{{$last->title}}</h3>
            </a>
            <p>{{$last->created_at}}</p>
        </div>
    </div>
    @endforeach
@endsection
