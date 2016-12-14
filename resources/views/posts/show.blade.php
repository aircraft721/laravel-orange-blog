@extends('main')

@section('title', '| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">

            <h1>{{ $post->title }}</h1>

            <p class="lead">{{ $post->body }}</p>



        </div>

        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <label>Url:</label>
                    <p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Category:</label>
                    <p>{{ $post->category->name }}</p>
                </dl>


                <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Last Updated:</label>
                    <p>{{ $post->updated_at->diffForHumans() }}</p>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-12">
                        <a href="/posts" class="btn btn-default btn-block bt1">Back to Posts</a>
                    </div>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-sm-6">

                        {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}

                    </div>

                    <div class="col-sm-6">

                        {!! Form::open(['route'=>['posts.destroy',$post->id], 'method'=>'DELETE']) !!}

                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection