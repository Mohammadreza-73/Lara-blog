@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <strong class="card-header">{{ $post->title }}</strong>

                <div class="card-body">
                    <div class="">
                        @if($post->image)
                        <img src="{{ asset('storage/uploads/' . $post->image) }}" class="img-fluid">
                        @else
                        <img src="{{ asset('no_image.jpg') }}" width="100" height="100" class="img-fluid">
                        @endif
                    </div>

                    <div class="my-5">{!! nl2br($post->body) !!}</div>

                    @foreach ($post->tags as $tag)
                    <a href="#" class="btn btn-outline-secondary">#{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
