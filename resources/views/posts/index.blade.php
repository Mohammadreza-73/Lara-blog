@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <strong class="card-header">{{ __('Latest Posts') }}</strong>

                <div class="card-body">
                    <div class="row">
                        @foreach ($posts as $post)
                        <div>
                            <a href="{{ route('posts.show', $post) }}">
                                @if($post->image)
                                <img src="{{ asset('storage/uploads/' . $post->image) }}" class="img-fluid">
                                @else
                                <img src="{{ asset('no_image.jpg') }}" width="100" height="100" class="img-fluid">
                                @endif
                            </a>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="text-muted">{{ $post->created_at->format('d F Y') }}</div>
                            <div class="">
                                <a href="#" class="font-weight-bolder text-info">{{ $post->category->name }}</a>
                            </div>
                        </div>

                        <a href="{{ route('posts.show', $post) }}" class="font-weight-bold text-success">
                            <h3 class="">{{ $post->title }}</h3>
                        </a>
                        <p class=" text-muted">{{ $post->excerpt }}</p>

                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary">{{ __('Read More »') }}</a>
                        </div>
                        @endforeach

                        <div class="justify-content-center">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
