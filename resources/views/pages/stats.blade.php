@extends('app')

@section('title', 'Stats | FaceMash v1.0')

@section('content')

<div class="hom">
    <div class="container">
        <div class="row text-left align">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-50">
                <ul class="list-inline pull-right">
                  <li class="active"><a href="{{ url('game') }}" class="btn btn-sm btn-green">Play Game</a></li>
                  <li><a href="{{ url('images/stats') }}" class="btn btn-sm btn-orange">View Statistics</a></li>
                  <li><a href="{{ url('share') }}" class="btn btn-sm btn-cyan">Share</a></li>
                </ul>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-100">
                @if(count($images) >= 1)
                @foreach($images as $image)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="media">
                          <a class="media-left" href="{{ url('img/models/'.$image->filename) }}">
                            <img src="{{ url('img/models/'.$image->filename) }}" style="width: 200px">
                          </a>
                          <div class="media-body margin-top-20">
                          @if($image->rank != 0)
                            <h4 class="media-heading">{{ $image->rank }}</h4>
                          @else
                            <h4 class="media-heading">Not enough data to build ranking</h4>
                          @endif
                            <ul class="ist-inline list-unstyled margin-top-10 small">
                               <li><p class="font120">Won: <strong><span class="text-success">{{ $image->wins }}</span></strong></p></li>
                               <li><p class="font120">Lost: <strong><span class="text-success">{{ $image->losses }}</span></strong></p></li>
                               <li><p class="font120">Score: <strong><span class="text-success">{{ $image->score }}</span></strong></p></li>
                            </ul>
                          </div>
                        </div>
                    </div>
                @endforeach
                @else
                    <p class="text-danger">Sorry, no images found today, consider <a href="{{ url('images') }}">uploading some.</a></p>
                @endif
            </div>
        </div>
    </div>
</div>

@stop