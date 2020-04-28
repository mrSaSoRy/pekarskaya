@extends('layouts/blog')

@section('page')
    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
            <a href="#" class="blog_item_date">
                <h3>15</h3>
                <p>Jan</p>
            </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="blog_details.html">
                <h2>Google inks pact for new 35-storey office</h2>
            </a>
            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.</p>
            <ul class="blog-info-link">
                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
            </ul>
        </div>
    </article>
@endsection

@section('category')
    <li>
        <a href="#" class="d-flex">
            <p>Resaurant food</p>
            <p>(37)</p>
        </a>
    </li>
    <li>
        <a href="#" class="d-flex">
            <p>Travel news</p>
            <p>(10)</p>
        </a>
    </li>
@endsection

@section('new_page')
    <div class="media post_item">
        <img src="assets/img/post/post_1.png" alt="post">
        <div class="media-body">
            <a href="blog_details.html">
                <h3>From life was you fish...</h3>
            </a>
            <p>January 12, 2019</p>
        </div>
    </div>
@endsection
