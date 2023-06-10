@props(['product'])

<div class="card text-end shadow" style="width: 14rem;">
    <div class="card-body p-2">
        <div class="d-flex justify-content-between">
            <span class="p-2">
                <x-products._favorite-button :product="$product" />
            </span>
            <span class="d-flex flex-column p-2">
                <h5 class="card-title p-2">{{ $product->name }}</h5>
                <h6 class="card-subtitle pb-2 pt-1 px-2 text-body-secondary">{{ '₪' . $product->price }}</h6>
            </span>
        </div>
        <div class="d-flex justify-content-center">
            <x-products._add-button :product="$product" />
        </div>
    </div>
</div>
