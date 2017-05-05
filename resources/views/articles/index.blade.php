
@extends('layouts.app')

@section('content')
   
    
<div class="w3-content" style="max-width:1400px">
	 
	@if (auth()->check())
   	@if (auth()->user()->id == 1  || auth()->user()->author)
  	  <p><a href="/articles/create"> [Add New Article] </a></p>
  	@endif
	@endif

	<br>

	@foreach ($articles as $article)
    <a href="/articles/{{$article->id}}">
      <div class="w3-col l4 m6 s12">
        <div class="w3-card-4 w3-margin w3-white ">
         
          <div class="article_image" style="background:url('/{{$article->image}}') no-repeat;display:block;margin-left:auto;margin-right:auto;background-size:cover; width:100%; background-position: 0px -50px; height:170px;"> </div>
          <div class="w3-container w3-padding-8">
            <h3 class="article_heading"><b>{{$article->title}}</b></h3>
            <p><a href="/authors/{{$article->author->id}}">{{$article->author->name}}</a><span class="w3-opacity" style="float:right;padding-right:25px;">{{ date('d M Y ', $article->created_at->timestamp) }}</span></p>
            <h5>{{$article->description}}</h5>
          </div>

          <div class="w3-container">
            @if ($article->tags)
        	    <p>Tags:
              	@foreach ($article->tags as $tag)
              		<a href="/tags/{{$tag->id}}" class="w3-tag w3-black w3-margin-bottom">{{$tag->name}}</a>  
              	@endforeach
            	</p>
            @endif
          </div>
        		
        	@if (auth()->check())
           	@if (auth()->user()->id == 1  || (auth()->user()->author && auth()->user()->author->id == $article->author->id))
            	{{ Form::open(array('url' => URL::to('/articles/' . $article->id . '/edit'), 'method' => 'GET', 'style'=>'display:inline-block')) }}
                <button type="submit" class="btn btn-primary " style="margin-bottom: 10px;"  >Edit</button>
            	{{ Form::close() }}

            	{{ Form::open(array('url' => URL::to('/articles/' . $article->id), 'method' => 'DELETE', 'style'=>'display:inline-block')) }}
                <button type="submit" class="btn btn-primary " style="margin-bottom: 10px;" >Delete</button>
            	{{ Form::close() }}
        	  @endif
        	@endif

        </div>
      </div>
    </a>
  @endforeach
   

</div>

@stop