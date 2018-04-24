@extends('layouts.app')

@section('content')

<br/><br/><br/><br/><br/>
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="panel panel-body login-form">
                            
                            <div class="text-center">
                                <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
                                <h5 class="content-group">Password recovery <small class="display-block">We'll send you instructions in email</small></h5>
                            </div>
                    @if (session('status'))
                        <div class="alert alert-success" style="text-align: center; font-size: 12px;">
                            {{ session('status') }}
                        </div>
                    @endif

                                    @if ($errors->has('email'))
                                        <div class="alert alert-warning" style="text-align: center; font-size: 12px;">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                            <div class="form-group has-feedback">

                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    
                                    <div class="form-control-feedback">
                                        <i class="icon-mail5 text-muted"></i>
                                    </div>

                            </div>
                            
                            <button type="submit" class="btn bg-blue btn-block">
                                Reset password
                                <i class="icon-arrow-right14 position-right"></i>
                            </button>

                        </div>
                    </form>
                                        <div class="footer text-muted text-center" style="color:lightgrey">
                        Copyright &copy; 2014. <a href="#" style="color:darkgrey">Limitless admin template</a> by <a href="http://interface.club" style="color:darkgrey">Eugene Kopyov</a>
                </div>
            </div>
    </div>
</div>
@endsection
