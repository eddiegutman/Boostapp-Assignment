<x-layout>
    <div class="container-fluid d-flex h-100">
        <div class="row d-flex flex-fill">
            <div class="col-3 d-flex flex-fill flex-column">
                <h1 class="display-6 text-end">סל מוצרים</h1>
                <x-cart.cart :cart="$cart" />
            </div>
            <div class="col-9">
                <h1 class="display-6 text-end">קופה</h1>
                <x-_nav-bar />
                <x-products.products :products="$products" />
            </div>
        </div>

</x-layout>
