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
                                <th>{{ __('Category') }}</th>
                                <th>{{ __('Created_at') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>
                                    <a class="text-dark" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                </td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->created_at->format('d F Y H:i') }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post) }}">
                                        {{ __('Edit') }}
                                    </a>

                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                            onsubmit="return confirm('Are You Sure?')" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            {{ __('Delete') }}
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
