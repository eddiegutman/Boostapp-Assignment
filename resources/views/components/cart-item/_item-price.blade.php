@props(['discounted_price', 'item', 'product'])

<div class="d-flex flex-column justify-content-center text-center p-2">
    <p class="mb-0">{{ '₪' . $discounted_price * $item->quantity }}</p>
    <p class="mb-0 {{ $product->discount == 0 ? 'd-none' : '' }}">
        <s>{{ '₪' . $product->price * $item->quantity }}</s>
    </p>
</div>
