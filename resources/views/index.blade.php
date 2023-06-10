<x-layout>
    <div class="container-fluid d-flex h-100">
        <div class="row d-flex flex-fill">
            <div class="col-3 d-flex flex-fill flex-column" style="background-color: red">
                <h1 class="display-6 text-end">סל מוצרים</h1>
                <x-cart :cart="$cart" />
            </div>
            <div class="col-9">
                <h1 class="display-6 text-end">קופה</h1>
                <i class="bi bi-trash"></i>
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
                <x-products :products="$products" />
            </div>
        </div>

</x-layout>
