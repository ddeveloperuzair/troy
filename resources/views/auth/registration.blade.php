@extends('mainlayout')

@section('content')

<body class="body header-fixed is_dark">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <div id="page" class="clearfix">


            <section class="tf-login tf-section">
                <div class="themesflat-container">
                    <div class="row" style="margin-top:50px;">
                        <div class="col-12">
                            <h2 class="tf-title-heading ct style-1">
                                Signup To NFTs
                            </h2>


                            <div class="flat-form box-login-email">
                                <div class="box-title-login">
                                    <h5>Register with email</h5>
                                </div>

                                <div class="form-inner">
                                    <form action="{{ route('register.custom') }}" method="POST" id="contactform" novalidate="novalidate">
                                        @csrf
                                        <input id="name" name="name" tabindex="1" value="" aria-required="true" required="" type="text" placeholder="Your Full Name">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        <input id="email" name="email" tabindex="2" value="" aria-required="true" type="email" placeholder="Your Email Address" required="">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <input id="password" name="password" tabindex="2" value="" aria-required="true" type="password" placeholder="************" required="">
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        <button class="submit">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /#page -->
        <a id="scroll-top"></a>
</body>
</html>

<!-- 
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> -->
@endsection