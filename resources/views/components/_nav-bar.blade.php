<nav>
    <ul class="nav nav-tabs justify-content-end">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('favorites') ? 'active' : ''}}" href="/favorites">מועדפים</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('products') ? 'active' : ''}}" href="/products">מוצרים</a>
        </li>
    </ul>
</nav>