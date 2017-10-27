@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Story
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Id Field -->
                    <div class="form-group col-sm-6">
                        <label for="id">Id:</label>
                        <p>{{ $story->id }}</p>
                    </div>

                    <!-- Username Field -->
                    <div class="form-group col-sm-6">
                        <label for="title">Title:</label>
                        <p>{{ $story->title }}</p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Fullname Field -->
                    <div class="form-group col-sm-6">
                        <label for="author">Author:</label>
                        <p><p>{{ $story->author }}</p>
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        <label for="category">Category:</label>
                        <p><p>{{ $story->categories->name }}</p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Image Field -->
                    <div class="form-group col-sm-6">
                        <label for="image">Image:</label>
                        <p>
                            <img src="{{ asset('storage/stories/' . $story->image) }}" alt="" class="img-responsive" width="150px" height="auto" style="border: 1px solid #cccccc">
                        </p>
                    </div>

                    <!-- Upload by Field -->
                    <div class="form-group col-sm-6">
                        <label for="upload_by">Upload by:</label>
                        <p>{{ $story->users->name }}</p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- File Field -->
                    <div class="form-group col-sm-6">
                        <label for="file">File:</label>
                        <p><a href="{{ asset('storage/stories-pdf/' . $story->file) }}" target="_blank">{{ $story->title }}</a></p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Created At Field -->
                    <div class="form-group col-sm-6">
                        <label for="created_at">Created At:</label>
                        <p>{{ $story->created_at }}</p>
                    </div>

                    <!-- Updated At Field -->
                    <div class="form-group col-sm-6">
                        <label for="updated_at">Updated At:</label>
                        <p>{{ $story->updated_at }}</p>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-sm-12">
                        <a href="{{ route('stories.index') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop