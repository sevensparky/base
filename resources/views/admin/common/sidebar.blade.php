<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="/admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{ __('dashboard') }}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i></div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.panel') }}">
                <div class="parent-icon"><i class="bx bxs-dashboard"></i>
                </div>
                <div class="menu-title">{{ __('dashboard') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('categories.index') }}">
                <div class="parent-icon"><i class="bx bx-list-ul"></i>
                </div>
                <div class="menu-title">{{ __('categories') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('articles.index') }}">
                <div class="parent-icon"><i class='bx bx-news'></i>
                </div>
                <div class="menu-title">{{ __('articles') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('users.index') }}">
                <div class="parent-icon"><i class='bx bx-user'></i></div>
                <div class="menu-title">{{ __('users') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('panel.calendar') }}">
                <div class="parent-icon"><i class='bx bxs-calendar'></i></div>
                <div class="menu-title">{{ __('calendar') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('settings.index') }}">
                <div class="parent-icon"><i class='bx bx-wrench'></i></div>
                <div class="menu-title">{{ __('settings') }}</div>
            </a>
        </li>

    </ul>
</div>
