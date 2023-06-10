@props(['item'])

@php
    $product = $item->product;
    $discounted_price = ($product->price * (100 - $product->discount)) / 100;
    $GLOBALS['sum'] += $discounted_price;
@endphp

<div class="card text-end shadow">
    <div class="card-body d-flex justify-content-between flex-row-reverse p-1">
        <div class="d-flex flex-column justify-content-center p-1">
            <span class="card-title">{{ $product->name }}</span>
            <span class="d-flex card-subtitle justify-content-center">
                <span class="d-flex p-1 text-body-secondary">
                    <p class="mb-0">הנחה</p> &nbsp;
                    <p class="mb-0">{{ $product->discount . '%' }}</p>
                </span>
                <span class="p-1">{{ '₪' . $product->price }}</span>
            </span>
        </div>
        <div class="d-flex">
            <div class="d-flex align-self-center p-2">
                <x-cart._delete-button :item="$item" />
            </div>
            <div class="d-flex flex-column justify-content-center p-2">
                <p class="mb-0">{{ '₪' . $discounted_price }}</p>
                <p class="mb-0"><s>{{ '₪' . $product->price }}</s></p>
            </div>

        </div>
    </div>
</div>
