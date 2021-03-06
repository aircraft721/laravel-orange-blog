@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')


    {!! Html::style('css/select2.min.css') !!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code',
            menubar: false
        });
    </script>
@endsection

@section('content')

    <div class="row">

        {!! Form::model($post, ['route'=>['posts.update',$post->id], 'method'=>'PUT','files'=>true]) !!}

        <div class="col-md-8">

            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control input-lg']) !!}

            {{ Form::label('slug','Slug:',['class'=>'form-spacing-top']) }}
            {{ Form::text('slug', null,['class'=>'form-control']) }}

            {{ Form::label('category_id', 'Category:') }}
            {{ Form::select('category_id',$categories, null, ['class'=>'form-control']) }}


            {{ Form::label('tags','Tags:',['class'=>'form-spacing-top']) }}
            {{ Form::select('tags[]',$tags,null,['class'=>'select2-multi form-control', 'multiple'=>"multiple"]) }}

            {{ Form::label('featured_image','Update image') }}
            {{ Form::file('featured_image') }}


            {!! Form::label('body','Body:', ['class'=>'form-spacing-top']) !!}
            {!! Form::textarea('body',null,['class'=>'form-control']) !!}

            <h1>{{ $post->title }}</h1>

            <p class="lead">{{ $post->body }}</p>

        </div>

        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ $post->created_at->diffForHumans() }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ $post->updated_at->diffForHumans() }}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">

                        {!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}

                    </div>

                    <div class="col-sm-6">

                        {!! Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) !!}


                    </div>
                </div>

            </div>
        </div>

        {!! Form::close() !!}
    </div>

@stop

@section('scripts')


    {!! Html::script('js/select2.full.min.js') !!}

    <script type="text/javascript">
        $.('select2-multi').select2();
        $.('select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');
    </script>

@endsection