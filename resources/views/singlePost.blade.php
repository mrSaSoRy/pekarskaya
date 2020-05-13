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

            <p>{{$p->text}}</p>
        </div>

            <!--
            <p class="excert"> не понимаю разницы
                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                fraction of the camp price. However, who has the willpower
            </p>

            <div class="quote-wrapper"> отдельноый блок
                <div class="quotes">
                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                    should have to spend money on boot camp when you can get the MCSE study materials yourself at
                    a fraction of the camp price. However, who has the willpower to actually sit through a
                    self-imposed MCSE training.
                </div>
            </div>
            -->
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
