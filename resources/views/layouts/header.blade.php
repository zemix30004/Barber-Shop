<header class="p-3 bg-secondary text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="" class="nav-link px-2 text-white">Barber-Shop</a></li>
                <li><a class="nav-link text-white" href="/">Главная</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link px-2 text-white">Контакты</a></li>
                <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Панель администратора</a></li>
                {{-- @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            </ul>

            {{-- <div class="text-end">
                @guest
                    <a class="btn btn-outline-light me-2" href="{{ route('login') }}">@lang('Войти')</a>
                @else
                    <a class="btn btn-outline-light me-2" href="{{ route('get-logout') }}">@lang('main.logout')</a>
                @endguest
                    @auth
                        @admin
                        (Auth::user()->isAdmin()){{ Auth::user()->name }}
                            <a class="btn btn-outline-light me-2" href="{{ route('admin.index') }}">@lang('main.admin_panel')</a>
                        @endadmin
                    @else
                    <a href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a>
                    @endauth
                    @guest
                        <a class="btn btn-outline-light me-2" href="{{ route('register') }}">@lang('Регистрация')</a>
                    @endguest
            </div> --}}
        </div>
    </div>
    <div class="col-md-12">
    <form method="get" action="">
        <div class="form-row">
            <div class="form-group col-md-10">
                <input type="text" class="form-control form-control-dark" id="s" name="s" value="{{request()->s}}" placeholder="Поиск по сайту..." aria-label="Search"></div>
                <div class="form-group col-md-2">
                <button type="submit" class="btn btn-secondary btn-block" value="Найти">Найти</p>
                </div>
            </form>
        </div>
    </div>
</header>
