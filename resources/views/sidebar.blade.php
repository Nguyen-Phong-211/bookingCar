<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home.home') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Chức năng</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('booking.booking') }}">
                <i class="menu-icon mdi mdi mdi-calendar"></i>
                <span class="menu-title">Lên lịch đặt xe</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('report.report') }}">
                <i class="menu-icon mdi mdi mdi-book-settings-outline"></i>
                <span class="menu-title">Báo cáo</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-star-settings"></i>
                <span class="menu-title">Quản lý</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('car.car') }}">Quản lý xe khách</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('carRoute.carRoute') }}">Quản lý tuyến đường</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('schedule.schedule') }}">Quản lý lịch trình</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('notification.notification') }}">Quản lý thông báo</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="">Quản lý khuyến mãi & ưu đãi</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('sendingEmail.sendingEmail') }}">
                <i class="menu-icon mdi mdi mdi-email"></i>
                <span class="menu-title">Gửi email</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('account.account') }}">
                <i class="menu-icon mdi mdi mdi-account"></i>
                <span class="menu-title">Tài khoản</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('setting.setting') }}">
                <i class="menu-icon mdi mdi mdi-application-settings"></i>
                <span class="menu-title">Cài đặt</span>
            </a>
        </li>

    </ul>
</nav>