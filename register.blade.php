@extends('layouts.app')

@section('content')

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Advanced login -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                <h5 class="content-group">
                                    Create account
                                    <small class="display-block">
                                        <div class="content-divider text-muted form-group">
                                            <span>
                                                All fields are required
                                            </span>
                                        </div>
                                    </small>

                                    <small class="display-block">
                                        <div class="content-divider text-muted form-group">
                                            <span>
                                                Your credentials
                                            </span>
                                        </div>
                                    </small>
                                </h5>
                            </div>

                                    @if ($errors->has('name'))
                                        <div class="alert alert-warning" style="text-align: center; font-size: 12px;">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('email'))
                                        <div class="alert alert-warning" style="text-align: center; font-size: 12px;">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('password'))
                                        <div class="alert alert-warning" style="text-align: center; font-size: 12px;">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif

                            <div class="form-group has-feedback has-feedback-left">
                                    <input id="name" type="text" placeholder="Eugene" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
                                    <!--<span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> This username is already taken</span>-->
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                    <input placeholder="Your email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-mention text-muted"></i>
                                    </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                    <input placeholder="Create password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                    <input placeholder="Confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="styled" checked="checked">
                                        Send me <a href="#">test account settings</a>
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="styled" checked="checked">
                                        Subscribe to monthly newsletter
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input  type="checkbox" class="styled">
                                        Accept <a href="#">terms of service</a>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn bg-teal btn-block btn-lg">Signup <i class="icon-circle-right2 position-right"></i></button><br/>
                            <div class="content-divider text-muted form-group"><span>OR</span></div>
                            <a href="login" class="btn btn-default btn-block content-group">Login</a>
                        </div>
                    </form>
                    <!-- Footer -->
                    <div class="footer text-muted text-center" style="color:lightgrey">
                        &copy; 2015. <a href="#" style="color:darkgrey">Limitless Web App Kit</a> by <a style="color:darkgrey" href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                    </div>
                    <!-- /footer -->
                </div>
            </div>
        </div>
    </div>
@endsection
