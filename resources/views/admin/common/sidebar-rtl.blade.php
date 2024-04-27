<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i></div>
        <div>
            <h4 class="logo-text">{{ __('dashboard') }}</h4>
        </div>
        <div>
            <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon">
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.panel') }}">
                <div class="menu-title">{{ __('dashboard') }}</div>
                <div class="parent-icon"><i class="bx bxs-dashboard"></i>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('categories.index') }}">
                <div class="menu-title">{{ __('categories') }}</div>
                <div class="parent-icon"><i class="bx bx-list-ul"></i>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('articles.index') }}">
                <div class="menu-title">{{ __('articles') }}</div>
                <div class="parent-icon"><i class='bx bx-news'></i>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('users.index') }}">
                <div class="menu-title">{{ __('users') }}</div>
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('panel.calendar') }}">
                <div class="menu-title">{{ __('calendar') }}</div>
                <div class="parent-icon"><i class='bx bxs-calendar'></i>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('settings.index') }}">
                <div class="menu-title">{{ __('settings') }}</div>
                <div class="parent-icon"><i class='bx bx-wrench'></i>
                </div>
            </a>
        </li>

    </ul>
</div>
