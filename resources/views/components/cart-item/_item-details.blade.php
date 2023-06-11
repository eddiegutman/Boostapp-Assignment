@props(['product'])

<div class="d-flex flex-column justify-content-center p-1">
    <span class="card-title">{{ $product->name }}</span>
    <span class="d-flex card-subtitle justify-content-center">
        <span class="d-flex p-1 text-body-secondary">
            <p class="mb-0 {{ $product->discount === 0 ? 'd-none' : ''}}">הנחה</p> &nbsp;
            <p class="mb-0 {{ $product->discount === 0 ? 'd-none' : ''}}">{{ $product->discount . '%' }}</p>
        </span>
        <span class="p-1">{{ '₪' . $product->price }}</span>
    </span>
</div>