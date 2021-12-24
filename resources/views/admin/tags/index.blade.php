@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-success mb-3" href="{{ route('admin.tags.create') }}">{{ __('Add Tag') }}</a>

            <div class="card">
                <strong class="card-header">{{ __('Tags') }}</strong>

                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('admin.tags.edit', $tag) }}">
                                        {{ __('Edit') }}
                                    </a>

                                    <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST"
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

                    <div class="d-flex justify-content-center">
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
