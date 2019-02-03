<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#">STOCK</a>
            <div id="close-sidebar">
                <i class="fas fa-angle-double-left"></i>
            </div>
        </div>
        <div class="sidebar-header">
            <div class="user-info">
                <a href="">
                    <span class="user-name">Jhon
                        <strong>Smith</strong>
                    </span>
                </a>
                <span class="user-role">Administrator</span>
            </div>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>Панель управления</span>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Склад</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Остатки</a>
                            </li>
                            <li>
                                <a href="#">Приход</a>
                            </li>
                            <li>
                                <a href="#">Обмен</a>
                            </li>
                            <li>
                                <a href="#">Брак</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <span>Клиенты</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Список клиентов</a>
                            </li>
                            <li>
                                <a href="#">Добавить нового клиента</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-chart-line"></i>
                        <span>Статистика</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">По менеджерам</a>
                            </li>
                            <li>
                                <a href="#">По клиентам</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @if(Auth::user()->hasRole('superadministrator'))
                <li class="header-menu">
                    <span>Администратирование</span>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-users-cog"></i>
                        <span>Управление менеджерами</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Прайс</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <span>{{ __('Выйти') }}</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>
