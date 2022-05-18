@extends('layouts.app')


@section('content')
<div class="w3-content" style="max-width:1160px">
  <div class="w3-card-4 w3-margin w3-white ">
    <div class="article_image" style="background:url('{{$article->image}}') no-repeat;display:block;margin-left:auto;margin-right:auto;background-size:cover; width:100%; background-position: 0px 0px; height:640px;"></div>
    <div class="w3-container w3-padding-8">
        <h3 class="article_heading"><b>{{$article->title}}</b></h3>
    </div>

    <div class="w3-container">
      <div style="height:auto; width:100%; overflow:auto;">
        {!! $article->body !!}
      </div>
  </div>
</div>

<hr>
    
@stop