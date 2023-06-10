@props(['item'])

@php
    $product = $item->product;
    $discounted_price = ($product->price * (100 - $product->discount)) / 100;
    $GLOBALS['sum'] += $discounted_price;
@endphp

<div class="card text-end" style="height: 8rem">
    <div class="card-body d-flex justify-content-between flex-row-reverse">
        <div>
            <p class="card-title">{{ $product->name }}</p>
            <p class="card-subtitle mb-2 text-body-secondary">{{ '₪' . $product->price }}</p>
            <span class="card-text d-flex">
                <p class="p-2" >הנחה</p> &nbsp;
                <p class="p-2">{{ $product->discount . '%' }}</p>
            </span>
        </div>
        <div class="justify-content-end">
            <p>{{ '₪' . $discounted_price }}</p>
            <p><s>{{ '₪' . $product->price }}</s></p>
        </div>
        <div>
            <span>
                <form action="/cart/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="מחק">
                </form>
            </span>
        </div>

    </div>
</div>
