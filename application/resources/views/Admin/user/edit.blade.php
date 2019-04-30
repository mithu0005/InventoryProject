<form method="post" action="{{action('Admin\UserController@update', $user['id'])}}"
      enctype="multipart/form-data">
    <input name="_method" type="hidden" value="PATCH">
    @csrf


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <a href="http://localhost/SoftDelete/admin"
                       class="w3-button w3-black btn btn-dark"><strong>Home</strong><br></a>
                    <a href="http://localhost/SoftDelete/admin/user"
                       class="w3-button w3-black btn btn-danger"><strong>User</strong><br></a>

                    <div class="card-header">User Edit Form</div>

                    <div class="card-body">


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{   old('name') ?: $user->name }}">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{  old('email') ?: $user->email }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password')  }}">

                                    <p id="passwordHelpBlock" class="form-text text-muted" style="display: none">
                                        Your password must be more than 6 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
                                    </p>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                        <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">

    $(document).ready(function(){
        var $regexpassword =/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/;
        $('#password').on('keyup',function(){

            if (!$(this).val().match($regexpassword)) {

                // there is a mismatch, hence show the error message

                $("#passwordHelpBlock").show();

            }
            else{
                // else, do not display message\
                $("#passwordHelpBlock").hide();

            }
        });
    });
</script>

@endsection
