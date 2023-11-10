@extends('front.layouts.main')


@push('header-scripts')
@endpush
@php
$page_name = 'about';
@endphp
@foreach($seo as $seo_about)
        @if($seo_about->page == 'about')
                @include('front.components.meta',['meta' => $seo_about])
        @break
        @endif
@endforeach
@section('content')
<!-- START BREADCRUMB -->
{{-- <nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('front.home') }}">{{ __('main.home_title') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('about::about.about') }}</li>
        </ol>
    </div>
</nav> --}}
<!-- END BREADCRUMB -->

{{-- <div class="container mb-3">
    <div class="section-title mb-2">
        <h1 class="title text-center">{{ __('about::about.about') }}</h1>
    </div>
    @foreach ($seo as $seo_about)
        @if ($seo_about->page == 'about')
            @if ($seo_about->show_short_description)
                @include('front.components.breif', ['short_description' => $seo_about->short_description])
            @endif
        @endif
    @endforeach
</div> --}}


<!-- START about-page  -->
<section class="about-page py-5">
    <div class="container mt-5 col-lg-6 col-12">

        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">دخول</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">تسجيل</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form method="POST" id="" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    {{-- <div class="text-center mb-3">
          <p>Sign in with:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div> --}}

                    {{-- <p class="text-center">or:</p> --}}

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="loginName">اسم المستخدم</label>

                        <input type="email" name="email" id="loginName" class="form-control" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="loginPassword">كلمة المرور</label>

                        <input type="password" name="password" id="loginPassword" class="form-control" required />
                    </div>

                    <!-- 2 column grid layout -->
                    {{-- <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                                    checked />
                                <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
                    </div> --}}

                    <!-- Submit button -->
                    <div class="text-center">

                        <button type="submit" class="btn btn-primary btn-block mb-4">تسجيل الخول</button>
                    </div>

                    <!-- Register buttons -->
                    {{-- <div class="text-center">
          <p>Not a member? <a href="#!">Register</a></p>
        </div> --}}
                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form>
                    {{-- <div class="text-center mb-3">
          <p>Sign up with:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div> --}}

                    {{-- <p class="text-center">or:</p> --}}

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerName">الاسم كامل</label>
                        <input type="text" id="registerName" class="form-control" />
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">اسم المستخدم</label>

                        <input type="text" id="registerUsername" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">رقم الجوال</label>

                        <input type="number" id="registerEmail" class="form-control" />
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">البريد الاليكترونى</label>

                        <input type="email" id="registerEmail" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">كلمتة المرور</label>

                        <input type="password" id="registerPassword" class="form-control" />
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerRepeatPassword">تاكيد كلمة المرور</label>
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                    </div>

                    <!-- Checkbox -->
                    {{-- <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
            aria-describedby="registerCheckHelpText" />
          <label class="form-check-label" for="registerCheck">
            I have read and agree to the terms
          </label>
        </div> --}}

                    <!-- Submit button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">انشاء حساب</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END about-page  -->




          <script>
          document.addEventListener("DOMContentLoaded", function() {
            // Get the login and register tab links
            const loginTab = document.getElementById("tab-login");
            const registerTab = document.getElementById("tab-register");

            // Get the login and register form panes
            const loginForm = document.getElementById("pills-login");
            const registerForm = document.getElementById("pills-register");

            // Add click event listeners to the register tab link
            registerTab.addEventListener("click", function(event) {
              // Prevent the default behavior of the link
              event.preventDefault();

              // Show the register form pane and hide the login form pane
              registerForm.classList.add("show", "active");
              loginForm.classList.remove("show", "active");

              // Update the active class on the tab links
              registerTab.classList.add("active");
              loginTab.classList.remove("active");
            });

            // Add click event listeners to the login tab link
            loginTab.addEventListener("click", function(event) {
              // Prevent the default behavior of the link
              event.preventDefault();

              // Show the login form pane and hide the register form pane
              loginForm.classList.add("show", "active");
              registerForm.classList.remove("show", "active");

              // Update the active class on the tab links
              loginTab.classList.add("active");
              registerTab.classList.remove("active");
            });
          });
          </script>
@endsection
