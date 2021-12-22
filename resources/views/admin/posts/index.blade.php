@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-success mb-3" href="{{ route('admin.posts.create') }}">{{ __('Add Post') }}</a>

            <div class="card">
                <strong class="card-header">{{ __('Posts') }}</strong>

                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Post Title') }}</th>
                                <th>{{ __('Categories') }}</th>
                                <th>{{ __('Tags') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category }}</td>
                                <td>{{ $post->tag }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('admin.posts.update', $post) }}">
                                        {{ __('Edit') }}
                                    </a>

                                    <form action="{{ route('admin.posts.destroy') }}" method="POST"
                                            onsubmit="return confirm('Are You Sure?')" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            {{ __('Submit') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
