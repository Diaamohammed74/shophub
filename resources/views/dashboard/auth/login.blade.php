@section('title', 'Login')
<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets-dashboard') }}/" data-template="vertical-menu-template-free">
@include('dashboard.auth.partials.head')


<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        @include('dashboard.auth.partials.logo')
                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome to Back login! 👋</h4>
                        {{-- <p class="mb-4"></p> --}}
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form id="formAuthentication" class="mb-3" action="{{ route('dashboard.login') }}"
                            method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" placeholder="Enter your email or username" autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="{{-- route('back.password.request') --}}">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        :value="__('Password')"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('dashboard.social.login', ['provider' => 'github']) }}"
                                    class="btn btn-dark d-grid w-100">
                                    <i class="fab fa-github"> Login With GitHub </i>
                                </a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('dashboard.social.login', ['provider' => 'google']) }}"
                                    class="btn btn-dark d-grid w-100">
                                    <i class="fab fa-google"> Login With Google </i>
                                </a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('dashboard.social.login', ['provider' => 'tiktok']) }}"
                                    class="btn btn-dark d-grid w-100">
                                    <i class="fab fa-tiktok"> Login With TIKTOK </i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    @include('dashboard.auth.partials.scripts')
</body>

</html>
