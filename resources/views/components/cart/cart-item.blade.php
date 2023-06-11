@props(['item'])

@php
    $product = $item->product;
    $discounted_price = ($product->price * (100 - $product->discount)) / 100;
    $GLOBALS['sum'] += $discounted_price * $item->quantity;
@endphp

<div class="card text-end shadow">
    <div class="card-body d-flex justify-content-between flex-row-reverse p-1">
        <div class="d-flex">
            <x-cart._item-details :product="$product" />
            <x-cart._item-quantity :item="$item" />
        </div>

        <div class="d-flex">
            <x-cart._delete-button :item="$item" />
            <x-cart._item-price :discounted_price="$discounted_price" :item="$item" :product="$product" />
        </div>
    </div>
</div>
