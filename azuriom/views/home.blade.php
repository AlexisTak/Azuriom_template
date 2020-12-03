@extends('layouts.app')

@section('title', trans('messages.home'))

@section('content')
<div class="nk-gap-2"></div>
<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Derniere</span> News</span></h3>
<div class="nk-gap"></div>


<div class="nk-news-box">
    <div class="nk-news-box-list">
        <div class="nano">
            <div class="nano-content">

                <div class="nk-news-box-item nk-news-box-item-active">
                        <div class="nk-news-box-item-img">
                @foreach($posts as $post)
                        <img src="assets/images/post-1-sm.jpg" alt="Smell magic in the air. Or maybe barbecue">
                    </div>
                    <img src="assets/images/post-1.jpg" alt="Smell magic in the air. Or maybe barbecue" class="nk-news-box-item-full-img">
                    <h3 class="nk-news-box-item-title">{{ $post->title }}</h3>

                    <div class="nk-news-box-item-text">
                        <p>{{ Str::limit(strip_tags($post->content), 50, '...') }}</p>
                    </div>
                    <a href="{{ route('posts.show', $post->slug) }}" class="nk-news-box-item-url">Commantaires</a>
                    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span>{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
             <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <!-- There will be inserted info about selected news-->
                    <div class="nk-news-box-item-image">
                        <img src="assets/images/post-1.jpg" alt="">
                    </div>
                    <h3 class="nk-news-box-item-title">{{ $post->title }}</h3>
                    <div class="nk-news-box-item-text">
                        <p>{{ Str::limit(strip_tags($post->content), 380, '...') }}</p>
                    </div>
                    <a href="{{ route('posts.show', $post->slug) }}" trans('messages.posts.read') class="nk-news-box-item-more">Commentaires</a>
                    <div class="nk-news-box-item-date">
                        <span class="fa fa-calendar">{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
