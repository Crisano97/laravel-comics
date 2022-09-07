@extends('layout.main')

@section('main-content')
@dump($comics)
    <div class="jumbotron"></div>
    <div class="wrapper position-relative">
        <h4 class="current-series-comics">CURRENT SERIES</h4>
        <div class="cards d-flex justify-content-between flex-wrap">
            @foreach($comics as $comic)
            <div class="comic-card">
                <div class="image-container">
                    <img src="{{$comic->image}}" alt="comicType">
                </div>
                <h6 class="text-uppercase mt-4">
                    {{$comic->title}}
                </h6>
            </div>
            @endforeach
        </div>
        <div class="btn-container">
            <button class="btn-more">LOAD MORE</button>    
        </div>     
    </div>
    <div class="wrapper">
        <div class="main-nav">
                <div class="link-wrapper d-flex justify-content-between p-4 align-items-center">
                    <div class="link">
                        <img class="link-img" src="" alt="link.text">
                        <span class="text-uppercase ms-2">  </span>
                    </div>
                    
                </div>
        </div>
    </div>
@endsection