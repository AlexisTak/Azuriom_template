@extends('layouts.app')

@section('title', trans('messages.posts.posts'))

@section('content')
    <div class="container content-parent">
        <h1 class="title-block">{{ trans('messages.posts.posts') }}</h1>

        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
            @foreach($posts as $post)
                <div class="nk-news-box-item-image">
                    @if($post->hasImage())
                            <img src="{{ $post->imageUrl() }}" class="post-img img-fluid" height="350" alt="{{ $post->title }}">
                        @endif
                            <h3 class="nk-news-box-item-title">
                                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h3>
                            <p class="nk-news-box-item-text">{{ Str::limit(strip_tags($post->content)) }}</p>
                            <a class="btn btn-primary" href="{{ route('posts.show', $post->slug) }}">{{ trans('messages.posts.read') }}</a>

                            <div class="nk-news-box-item-date">
                                <span class="fa fa-calendar">{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}</span>
                            </span>
                            </div>

                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
