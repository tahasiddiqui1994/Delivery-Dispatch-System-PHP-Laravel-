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

                    <form method="POST" action="{{ route('password.request') }}">
                        @csrf
                        <div class="panel panel-body login-form">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="text-center">
                                <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
                                <h5 class="content-group">Password recovery</h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                    <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>

                                    <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                    </div>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                    <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                    <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                    <button class="btn bg-blue btn-block" type="submit" class="btn btn-primary">
                                        Reset Password <i class="icon-spinner10" style="color: white"></i>
                                    </button>
                            </div>

                        </div>
                    </form>


                    <!-- Footer -->
                    <div class="footer text-muted text-center" style="color:lightgrey">
                        &copy; 2015. <a href="#" style="color:darkgrey">Limitless Web App Kit</a> by <a style="color:darkgrey" href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
@endsection
