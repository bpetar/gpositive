@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit: {{$article->title}}
                </div>
                <div class="panel-body">

            {!! Form::model($article, array('url' => URL::to('/articles/' . $article->id), 'class'=>'form-horizontal', 'method' => 'PUT', 'files' => true)) !!}

            @include('articles.partials.form')

            {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('jscode')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('#technig').summernote({
                height:300,
                callbacks: {
                    onImageUpload: function(files, editor, $editable) {
                        sendFile(files[0],editor,$editable);
                    }
                }
            });

            function sendFile(file,editor,welEditable) {
                data = new FormData();
                data.append("file", file);
                jQuery.ajax({
                    url: "{{ url('/upload/image') }}",
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(s){
                        console.log("good summernote upload");
                        jQuery('#technig').summernote("insertImage", s);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert("error with picture upload!");
                        console.log(textStatus+" gi "+errorThrown);
                    }
                });
            }
        });
    </script>
@stop