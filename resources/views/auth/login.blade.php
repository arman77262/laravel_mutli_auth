<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('userback/panel/assets/images/favicon.png')}}" >
        <!--Page title-->
        <title>User Login</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{asset('userback/panel/assets/css/bootstrap.min.css')}}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{asset('userback/panel/assets/css/all.min.css')}}">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{asset('userback/panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('userback/panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css')}}">
        <!-- chart -->

        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{asset('userback/panel/assets/css/style.css')}}">
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{asset('userback/panel/assets/images/preloader.gif')}}" alt="">
        </div>


        <!-- wrapper -->
          <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                    <!-- page content -->
                    <div class="login_page center_container">
                        <div class="center_content">
                            <div class="logo">
                                <img src="{{asset('userback/panel/assets/images/logo.png')}}" alt="" class="img-fluid">
                            </div>
    <form method="POST" action="{{ isset($guard) ? url($guard.'/login')  : route('login') }}">
        @csrf
                                <div class="form-group icon_parent">
                                     <label for="password">Email</label>
         {{-- <input id="email" type="email" class="form-control  name="email" value=" " required autocomplete="email" autofocus placeholder="Email Address"> --}}

         <input id="email" class="form-control"  type="email" name="email" :value="old('email')" required autofocus  placeholder="Email Address"/>
              <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>

                                </div>
                                <div class="form-group icon_parent">
                                    <label for="password">Password</label>
       {{-- <input id="password" type="password" class="form-control   name="password" required autocomplete="current-password" placeholder="Password"> --}}

       <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password"   placeholder="Password"/>

                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                                </div>
                                <div class="form-group">
                                    <label class="chech_container">Remember me
                                        <input type="checkbox" id="remember_me" name="remember" >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <a class="registration" href=" ">Create new account</a><br>
                                    <a href="{{ route('password.request') }}" class="text-white">I forgot my password</a>
                                    <button type="submit" class="btn btn-blue">Login</button>
                                </div>
     </form>
                            <div class="footer">
                               <p>Copyright &copy; 2020 <a href="https://github.com/arman77262">AHR</a>. All rights reserved.</p>
                            </div>

                        </div>
                    </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->



        <!-- jquery -->
        <script src="{{asset('userback/panel/assets/js/jquery.min.js')}}"></script>
        <!-- popper Min Js -->
        <script src="{{asset('userback/panel/assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{asset('userback/panel/assets/js/bootstrap.min.js')}}')}}"></script>
        <!-- Fontawesome-->
        <script src="{{asset('userback/panel/assets/js/all.min.js')}}')}}"></script>
        <!-- metis menu -->
        <script src="{{asset('userback/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js')}}"></script>
        <script src="{{asset('userback/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js')}}"></script>
        <!-- nice scroll bar -->
        <script src="{{asset('userback/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('userback/panel/assets/plugins/scrollbar/scroll.active.js')}}"></script>
        <!-- counter -->
        <script src="{{asset('userback/panel/assets/plugins/counter/js/counter.js')}}"></script>
        <!-- chart -->
        <script src="{{asset('userback/panel/assets/plugins/chartjs-bar-chart/Chart.min.js')}}"></script>
        <script src="{{asset('userback/panel/assets/plugins/chartjs-bar-chart/chart.js')}}"></script>
        <!-- pie chart -->
        <script src="{{asset('userback/panel/assets/plugins/pie_chart/chart.loader.js')}}"></script>
        <script src="{{asset('userback/panel/assets/plugins/pie_chart/pie.active.js')}}"></script>


        <!-- Main js -->
        <script src="{{asset('userback/panel/assets/js/main.js')}}"></script>





    </body>
</html>






{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ isset($guard) ? url($guard.'/login')  : route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
