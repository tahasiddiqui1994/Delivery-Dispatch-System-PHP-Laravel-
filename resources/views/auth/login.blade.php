@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
        <div class="page-container">
            <div class="page-content">
                <div class="content-wrapper">

                <div class="content pb-20">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="panel panel-body login-form">

                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group">Login to your account <small class="display-block"> <div class="content-divider text-muted form-group"><span>Your credentials</span></div></small></h5>
                            </div>
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

                                    <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required="required" autofocus>
                                    <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                    </div>

                            </div>

                            <div class="form-group has-feedback has-feedback-left">

                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password"  required="required">
                                    
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="styled" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                                        </label>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="{{ route('password.request') }}">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                            <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
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
