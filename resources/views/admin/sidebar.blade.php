<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('users.index') ? 'active' : '' }}">
                    <a href="{{route('users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Пользователь</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('posts.index') ? 'active' : '' }} ">
                    <a href="{{route('posts.index')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Новости</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('massage.index') ? 'active' : '' }}">
                    <a href="{{route('massage.index')}}">
                        <i class="fas fa-envelope"></i>
                        <p>Сообщении</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('abouts.index') ? 'active' : '' }}">
                    <a href="{{route('abouts.index')}}">
                        <i class="fas fa-building"></i>
                        <p>Команда</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('services.index') ? 'active' : '' }}">
                    <a href="{{route('services.index')}}">
                        <i class="fas fa-cog"></i>
                        <p>Сервисы</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('projects.index') ? 'active' : '' }}">
                    <a href="{{route('projects.index')}}">
                        <i class="fas fa-project-diagram"></i>
                        <p>Проекты</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('categories.index') ? 'active' : '' }}">
                    <a href="{{route('categories.index')}}">
                        <i class="fas fa-folder-open"></i>
                        <p>Категория</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('courses.index') ? 'active' : '' }}">
                    <a href="{{route('courses.index')}}">
                        <i class="fas fa-folder-open"></i>
                        <p>Курсы</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('bookings.index') ? 'active' : '' }}">
                    <a href="{{route('bookings.index')}}">
                        <i class="fas fa-folder-open"></i>
                        <p>Бронировать</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


