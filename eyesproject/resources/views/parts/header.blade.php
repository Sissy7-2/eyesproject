@extends('layouts.parts.header')
@section('title', 'header')

@section('content')
    <header class="container">
        <div class="row">
            <p class="site-title">eye's project</p>
            <nav>
                <ul class="row">
                    <li><a href="#">profile</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">details</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a class="instagram-btn" href="#">instagram</a></li>
                </ul>
            </nav>
            <p class="language_change-btn">言語変更ボタン</p>
        </div>
    </header>
@endsection
