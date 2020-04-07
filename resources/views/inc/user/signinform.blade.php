<div id="toTop"></div><!-- Back to top button -->
	
<div class="layer"></div><!-- Opacity Mask Menu Mobile -->

<!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="modal_header">
        <h3>Sign In</h3>
    </div>
    <form method="POST" action="{{ route('login') }}" >
        @csrf	<div class="sign-in-wrapper">
        
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email">
                <i class="icon_mail_alt"></i>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="{{ route('password.request') }}">Forgot Password?</a></div>
            </div>
            <div class="text-center">
                <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                Don’t have an account? <a href="/register">Sign up</a>
            </div>
            
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->