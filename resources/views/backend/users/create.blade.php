@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create user
        </h1>
    </section>

    <section class="content">
        @if($errors->count()>0)
            <ul class="alert alert-danger" style="list-style-type: none">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <form method="POST" action="{{ route('users.store') }}" accept-charset="UTF-8" id="users">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <!-- Fullname Field -->
                            <div class="col-sm-6">
                                <label for="fullname">Fullname:</label>
                                <input class="form-control" name="name" type="text" id="name">
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <!-- Password Field -->
                            <div class="col-sm-6">
                                <label for="password">Password:</label>
                                <input class="form-control" name="password" type="password" id="password">
                            </div>
                            <!-- Repassword Field -->
                            <div class="col-sm-6">
                                <label for="repassword">Repassword:</label>
                                <input class="form-control" name="repassword" type="password" id="repassword">
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <!-- Email Field -->
                            <div class="col-sm-6">
                                <label for="email">Email:</label>
                                <input class="form-control" name="email" type="email" id="email">
                            </div>
                            <!-- Role Field -->
                            <div class="col-sm-6">
                                <label for="email">Role:</label>
                                <select class="form-control select2" style="width: 100%" name="role">
                                    <option value="2">Admin</option>
                                    <option value="1">Mod</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <!-- Image Field -->
                            <div class="col-sm-6">
                                <label for="image">Image:</label>
                                <input class="form-control" name="image" type="file" id="image" onchange="viewImg(this)">
                                <br>
                                <p><img id="avartar-img-show" src="{{ asset('storage/avatars/avatar.png') }}" alt="avatar" class="img-responsive" width="200px" height="auto"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <!-- Submit Field -->
                            <div class="col-sm-12">
                                <input class="btn btn-primary" type="submit" value="Save">
                                <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
@stop

@section('script')
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script type="text/javascript">
        $('.select2').select2();
    </script>

    <script>
        function viewImg(img) {
            var fileReader = new FileReader;
            fileReader.onload = function(img) {
                var avartarShow = document.getElementById("avartar-img-show");

                avartarShow.src = img.target.result
            }, fileReader.readAsDataURL(img.files[0])
        }
    </script>
@stop