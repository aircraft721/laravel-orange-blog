@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog!</h1>
                <p class='lead'>Test blog with laravel.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at consequatur culpa deserunt dolore, eaque earum eius eos esse excepturi ipsa laborum nesciunt odit praesentium, quasi ullam vel. Amet, quibusdam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at consequatur culpa deserunt dolore, eaque earum eius eos esse excepturi ipsa laborum nesciunt odit praesentium, quasi ullam vel. Amet, quibusdam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at consequatur culpa deserunt dolore, eaque earum eius eos esse excepturi ipsa laborum nesciunt odit praesentium, quasi ullam vel. Amet, quibusdam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at consequatur culpa deserunt dolore, eaque earum eius eos esse excepturi ipsa laborum nesciunt odit praesentium, quasi ullam vel. Amet, quibusdam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection