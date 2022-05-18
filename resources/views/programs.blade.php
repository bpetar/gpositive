@extends('layouts.app')

@section('content')
<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1170px;display:block;background-attachment: fixed;background-size:cover; width:100%;background-position:fixed;">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32" >
    <b><h1 class="{{ Request::is('positive') ? 'active' : '' }}"><h1 class="djek" style="font-family: 'Gloria Hallelujah', cursive; padding-bottom: 10px;" =>@lang('various.programs')</h1></h1></b>
</header>

  <div class="w3-row" style="text-align: center;">
  @foreach ($articles as $article)

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white" style="width:1160px; display: inline-block;">

    <div class="article_image" style="background:url('{{$article->image}}') no-repeat; background-size:cover; width:100%; background-position: 0px 0px; height:640px;"> </div>
    <div class="w3-container w3-padding-8">
      <h3 class="article_heading"><b><a href="/articles/{{$article->id}}">{{$article->title}}</a></b></h3>
      <h5 style="font-style: italic;">{{$article->description}}</h5>
    </div>
  </div>
 
  @endforeach


  </div>
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>







@endsection
