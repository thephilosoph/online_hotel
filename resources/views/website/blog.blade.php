@extends('website.layout.app')


@section('main-content')

<div class="blog-item">
    <div class="container">
      <div class="row">


        @foreach ($all_posts as $item)
            
        <div class="col-md-4">
          <div class="inner">
            <div class="photo">
              <img src="{{asset('uploads/'.$item->photo)}}" alt="" />
            </div>
            <div class="text">
              <h2>
                <a href="{{route('post',$item->id)}}">{{$item->heading}}</a>
              </h2>
              <div class="short-des">
                <p>
                  {{$item->short_content}}
                </p>
              </div>
              <div class="button">
                <a href="{{route('post',$item->id)}}" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div>

      <div class="row">
        <div class="col-md-12">
          {{$all_posts->links()}}
        </div>
      </div>
    </div>
  </div>
  @endsection