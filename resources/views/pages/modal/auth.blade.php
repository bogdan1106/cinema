


<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Login</h4>
                <div class="login-form">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="E-mail">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input type="password" name="password" placeholder="Password" required="">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="tp">
                            <input type="submit" value="LOGIN NOW">
                        </div>
                        <div class="forgot-grid">
                            <div class="log-check">
                                <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                            </div>
                            <div class="forgot">
                                <a href="" data-toggle="modal" data-target="#myModal6">Forgot Password?</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal1 -->


<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Register</h4>
                <div class="login-form">
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Name" >
                        <input type="email" name="email" placeholder="E-mail" >
                        <input type="password" name="password" placeholder="Password" >
                        <input type="password" name="password-confirmation" placeholder="Confirm Password" >
                        {{--<div class="signin-rit">--}}
                        {{--<span class="agree-checkbox">--}}
                        {{--<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        <div class="tp">
                            <input type="submit" value="REGISTER NOW">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" >

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Password Recovery</h4>
                <div class="login-form">
                    <form action="{{route('recovery')}}" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="E-mail" >

                        <div class="tp">
                            <input type="submit" value="resetPassword">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>