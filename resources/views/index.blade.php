@extends('layouts/blog')

@section('page')
    @foreach ($pages as $page)


    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
            <a href="#" class="blog_item_date">
                <h3>{{$page->created_at->format('d')}}</h3>
                <p>{{$page->created_at->format('M - Y')}}</p>
            </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="blog_details.html">
                <h2>{{$page->title}}</h2>
            </a>
            <p>{{$page->small_text}}</p>
        </div>
    </article>
    @endforeach
@endsection

@section('category')

    @foreach ($categories as $category)
        <li>
            <a href="#" class="d-flex">
                <p>{{$category->title}}</p>
                <p>(37)</p>
            </a>
        </li>
    @endforeach


@endsection

@section('new_page')
    @foreach ($pages as $page)
    <div class="media post_item">
        <img src="assets/img/post/post_1.png" alt="post">
        <div class="media-body">
            <a href="blog_details.html">
                <h3>{{$page->title}}</h3>
            </a>
            <p>{{$page->created_at->format('M d, Y')}}</p>
        </div>
    </div>
    @endforeach
@endsection
