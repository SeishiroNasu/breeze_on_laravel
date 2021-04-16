@extends('project.layout')
@section('title', 'Book Shelf')
@include('project/navbar')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2" id="sidebar">
            @include('project/sidebar')
        </div>

        <div class="col-md-10" mt-5 pr-5>

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>書籍一覧</h1>
                    @include('project/table')
                    <a class="btn btn-lg btn-primary" href="/porject/create" role="button">新規作成</a>
                    </p>
            </div>
        </div>
    </div> <!-- /container -->
</div>
@endsection