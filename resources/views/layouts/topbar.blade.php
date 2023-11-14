<style>
     .mdi.mdi-web {
        color: white;
        font-size: 20px;
    }
    .mdi.mdi-lightbulb-on-outline {
        color: #5CA346;
        font-size: 20px;
    }
    .dark-mode .mdi-lightbulb-on-outline {
        color: #fff;
    }
    .nav li.active > a {
        color: #5CA346;
    }
</style>

<div class="center-top">
    <div class="bar">
        <nav class="nav">
            <ul>
                <li class="nav-img">
                    <img src="/assets/image/logo.svg">
                </li>
                <div class="flex content-center gap-40">
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'company' ? 'active' : '' }}">
                        <a href="{{ route('company') }}">Company</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'trading' ? 'active' : '' }}">
                        <a href="{{ route('trading') }}">Trading</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'partnership' ? 'active' : '' }}">
                        <a href="{{ route('partnership') }}">Partner</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'support' ? 'active' : '' }}">
                        <a href="{{ route('support') }}">Support</a>
                    </li>
                    <li>
                        <i class="mdi mdi-web"></i>
                    </li>
                      <!-- light/dark mode -->
                    <li class="{{ Request::is('dark-mode') ? '' : 'active' }}" id="mode-toggle" style="cursor: pointer;">
                        <i class="mdi mdi-lightbulb-on-outline"></i>
                    </li>
                </div>
                
                <div style="margin-left: 53px;" class="flex gap-10">
                    <!-- log in -->
                    <li class="nav-btn">
                        <a href="#">
                            <button class="btn1 btn-primary"><a class="log" href="http://127.0.0.1:8080/login">
                                <span>Register</span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-btn">
                        <a href="#">
                            <button class="btn1 btn-primary"><a class="log" href="http://127.0.0.1:8080/login">
                                <span>Log In</span>
                            </button>
                        </a>
                    </li>
                </div>
            </ul>
        </nav>
    </div>
</div>