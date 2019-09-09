@extends('layouts.app2')

@section('main')
<section class="login-section auth-section">
		<div class="container">
			<div class="row">
				<div class="form-box col-lg-5 col-12 offset-lg-2">
					<h1 class="form-box-heading logo text-center">
						<span class="pe-icon pe-7s-box2 icon"></span><span class="highlight">Bebwhite</span>C
					</h1>
					
					<div class="form-box-inner">
						<h2 class="title text-center">Login to Your Account</h2>
						<div class="row">
							<div class="form-container col-lg-12 col-12">
                                <form class="login-form" method="POST" action="{{ route('login') }}">
                                    @csrf
									<div class="form-group email">
										<label class="sr-only" for="login-email">Email or username</label>
										<span class="fa fa-user icon"></span>
                                        {{-- <input id="login-email" type="email" class="form-control login-email" placeholder="Email or username"> --}}
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        {{-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
									</div>
									
									<div class="form-group password">
										<label class="sr-only" for="login-password">Password</label>
										<span class="fa fa-lock icon"></span>
                                        {{-- <input id="login-password" type="password" class="form-control login-password" placeholder="Password"> --}}
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        {{-- @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror --}}
                                        @if (Route::has('password.request'))
                                            <p class="forgot-password"><a href="{{ route('password.request') }}">Forgot password?</a></p>
									    @endif  
										</div>
									
									<button type="submit" class="btn btn-block btn-primary"> {{ __('Login') }}</button>
									<div class="checkbox remember pt-2">
										<label>
											<input type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}> Remember me
										</label>
									</div>
									
									{{-- <p class="alt-path">Need an account? <a class="signup-link" href="signup.html">Sign up now</a></p> --}}
								</form>
							</div>
							
							{{-- <div class="social-btns col-lg-5 col-12 offset-lg-1">
								<div class="divider"><span>Or</span></div>
								<ul class="list-unstyled social-login">
									<li>
										<button class="social-btn twitter-btn btn" type="button"><i class="fab fa-twitter"></i>Log in with Twitter</button>
									</li>
									<li>
										<button class="social-btn facebook-btn btn" type="button"><i class="fab fa-facebook-f"></i>Log in with Facebook</button>
									</li>
									<li>
										<button class="social-btn github-btn btn" type="button"><i class="fab fa-github-alt"></i>Log in with Github</button>
									</li>
									<li>
										<button class="social-btn google-btn btn" type="button"><i class="fab fa-google"></i>Log in with Google</button>
									</li>
								</ul>
							</div> --}}
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			{{-- <div class="copyright text-center">
				&copy; 2019 - Appify
				<br> Bootstrap 4 Admin Theme
			</div>	 --}}
		</div>
		
	</section>
@endsection