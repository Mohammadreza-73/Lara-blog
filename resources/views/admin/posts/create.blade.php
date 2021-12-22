@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <strong class="card-header">{{ __('Add Post') }}</strong>

                <div class="card-body">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group my-3">
                            <label class="required" for="title">{{ __('Title') }}</label>
                            <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text"
                                name="title" id="title" value="{{ old('title') }}" required>
                            @if($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                            @endif
                            <span class="help-block"> </span>
                        </div>

                        <div class="form-group my-3">
                            <label class="required" for="slug">{{ __('Slug') }}</label>
                            <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text"
                                name="slug" id="slug" value="{{ old('slug') }}" required>
                            @if($errors->has('slug'))
                            <div class="invalid-feedback">
                                {{ $errors->first('slug') }}
                            </div>
                            @endif
                            <span class="help-block"> </span>
                        </div>

                        <div class="form-group my-3">
                            <label class="required" for="image">{{ __('Image') }}</label>
                            <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" type="file"
                                name="image" id="image" value="{{ old('image') }}" required>
                            @if($errors->has('image'))
                            <div class="invalid-feedback">
                                {{ $errors->first('image') }}
                            </div>
                            @endif
                            <span class="help-block"> </span>
                        </div>

                        <div class="form-group my-3">
                            <label class="required" for="tags">{{ __('Tags') }}</label>
                            <input class="form-control {{ $errors->has('tags') ? 'is-invalid' : '' }}" type="text"
                                name="tags" id="tags" value="{{ old('tags') }}" required>
                            @if($errors->has('tags'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tags') }}
                            </div>
                            @endif
                            <span class="help-block text-muted">{{ __('Separated by comma') }}</span>
                        </div>

                        <div class="form-group my-3">
                            <label class="required" for="category">{{ __('Category') }}</label>
                            <select class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}"
                                name="category" id="category" required>
                                <option value="0">--- {{ __('SELECT CATEGORY') }} ---</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == old('category')) selected
                                    @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                            <div class="invalid-feedback">
                                {{ $errors->first('category') }}
                            </div>
                            @endif
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group my-3">
                            <label for="excerpt">{{ __('Excerpt') }}</label>
                            <textarea class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : '' }}"
                                name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                            @if($errors->has('excerpt'))
                            <div class="invalid-feedback">
                                {{ $errors->first('excerpt') }}
                            </div>
                            @endif
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group my-3">
                            <label for="body">{{ __('Body') }}</label>
                            <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body"
                                id="body">{{ old('body') }}</textarea>
                            @if($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $errors->first('body') }}
                            </div>
                            @endif
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
