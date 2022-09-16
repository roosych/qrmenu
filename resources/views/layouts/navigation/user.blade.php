<ul>
    <li>
        <div class="menu-title">ПАНЕЛЬ УПРАВЛЕНИЯ</div>
        <ul>
            <li>
                <a href="{{route('profile.index')}}" class="{{request()->routeIs('profile.index') ? 'active' : ''}}">
                    <span>
                        <i class="iconly-Curved-Home"></i>
                        <span>Главная</span>
                    </span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <div class="menu-title">ЗАВЕДЕНИЕ</div>
        <ul>
            <li>
                <a href="{{route('profile.info')}}" class="{{request()->routeIs('profile.info') ? 'active' : ''}}">
                    <span>
                        <i class="iconly-Curved-InfoSquare"></i>
                        <span>Информация</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('profile.schedule')}}" class="{{request()->routeIs('profile.schedule') ? 'active' : ''}}">
                    <span>
                        <i class="iconly-Curved-TimeSquare"></i>
                        <span>Часы работы</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('profile.social')}}" class="{{request()->routeIs('profile.social') ? 'active' : ''}}">
                    <span>
                        <i class="iconly-Curved-Play"></i>
                        <span>Социальные сети</span>
                    </span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <div class="menu-title">МЕНЮ</div>
        <ul>
            <li>
                <a href="{{route('category.index')}}" class="{{request()->routeIs('category.index') ? 'active' : ''}}">
                    <span>
                        <i class="iconly-Curved-Category"></i>
                        <span>Категории</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <span>
                        <i class="iconly-Curved-Document"></i>
                        <span>Позиции</span>
                    </span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <div class="menu-title">ПРОМО</div>
        <ul>
            <li>
                <a href="{{route('promo.index')}}" class="{{request()->routeIs('promo.index') ? 'active' : ''}}">
                    <span>
                        <i class="iconly-Curved-Discount"></i>
                        <span>Акции</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('promo.share')}}" class="{{request()->routeIs('promo.share') ? 'active' : ''}}">
                    <span>
                        <i class="iconly-Curved-Send"></i>
                        <span>Поделиться</span>
                    </span>
                </a>
            </li>
        </ul>
    </li>
</ul>