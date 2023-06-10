@props(['cart'])

@php
    $GLOBALS['sum'] = 0;
@endphp

<div class="container-fluid d-flex flex-column flex-fill">
    <x-cart._cart-header />
    <hr>
    <div class="p-2 d-flex flex-column overflow-y-auto" style="height: 39rem">
        @foreach ($cart as $item)
            <div class="p-2">
                <x-cart.cart-item :item="$item" />
            </div>
        @endforeach
    </div>
    <x-cart._cart-footer />
</div>
