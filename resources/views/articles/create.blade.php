@extends('main.layout')

@section('tab_title')
    {{ __('menu.news') }}
@endsection

@section('content')
    <section class="hero is-primary is-medium">
        <div class="blur news-img"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('menu.news') }}
                </h1>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="box">
                <form action="{{ route('articles.store', session('lang')) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                                   type="text" name="title" placeholder="Text input" value="{{ old('title') }}">
                            @if($errors->has('title'))
                                <span class="icon is-small is-right">
                                  <i class="fa fa-warning"></i>
                                </span>
                            @endif
                        </div>
                        @if($errors->has('title'))
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label class="label">Title (FR)</label>
                        <div class="control">
                            <input class="input {{ $errors->has('title_fr') ? 'is-danger' : '' }}" type="text"
                                   name="title_fr"
                                   value="{{ old('title_fr') }}"
                                   placeholder="Text input">
                            @if($errors->has('title_fr'))
                                <span class="icon is-small is-right">
                                  <i class="fa fa-warning"></i>
                                </span>
                            @endif
                        </div>
                        @if($errors->has('title_fr'))
                            <p class="help is-danger">{{ $errors->first('title_fr') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label class="label">Body</label>
                        <div class="control">
                            <textarea class="textarea {{ $errors->has('body') ? 'is-danger' : '' }}"
                                      name="body"
                                      placeholder="Textarea">{{ old('body') }}</textarea>
                            @if($errors->has('body'))
                                <span class="icon is-small is-right">
                                  <i class="fa fa-warning"></i>
                                </span>
                            @endif
                        </div>
                        @if($errors->has('body'))
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label class="label">Body (FR)</label>
                        <div class="control">
                            <textarea class="textarea {{ $errors->has('body_fr') ? 'is-danger' : '' }}"
                                      name="body_fr"
                                      placeholder="Textarea">{{ old('body_fr') }}</textarea>
                            @if($errors->has('body_fr'))
                                <span class="icon is-small is-right">
                                  <i class="fa fa-warning"></i>
                                </span>
                            @endif
                        </div>
                        @if($errors->has('body_fr'))
                            <p class="help is-danger">{{ $errors->first('body_fr') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <div class="file">
                            <label class="file-label">
                                <input class="file-input {{ $errors->has('picture') ? 'is-danger' : '' }}" type="file" name="picture" id="file">
                                <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fa fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Choose a file…
                                        </span>
                                    </span>
                                <span class="file-name" id="filename">
                                </span>
                            </label>
                        </div>
                        @if($errors->has('picture'))
                            <p class="help is-danger">{{ $errors->first('picture') }}</p>
                        @endif
                    </div>


                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">
                                Submit
                            </button>
                        </div>
                        <div class="control">
                            <a class="button is-text"
                               href="{{ route('articles.index', session('lang')) }}">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        var file = document.getElementById("file");
        file.onchange = function () {
            if (file.files.length > 0) {
                document.getElementById('filename').innerHTML = file.files[0].name;

            }
        };
    </script>
@endsection