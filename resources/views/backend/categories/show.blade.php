@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Category
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Id Field -->
                    <div class="form-group col-sm-6">
                        <label for="id">Id:</label>
                        <p>1</p>
                    </div>

                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        <label for="name">Name:</label>
                        <p>Lorem Ipsum</p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Created At Field -->
                    <div class="form-group col-sm-6">
                        <label for="created_at">Created At:</label>
                        <p>16-05-2017</p>
                    </div>

                    <!-- Updated At Field -->
                    <div class="form-group col-sm-6">
                        <label for="updated_at">Updated At:</label>
                        <p>21-05-2017</p>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-sm-12">
                        <a href="{{ route('categories.index') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop