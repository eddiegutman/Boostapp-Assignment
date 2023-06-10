@props(['product'])

<div class="card text-end" style="width: 14rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ '₪' . $product->price }}</h6>
        
        <span>
            <form action="/cart/{{ $product->id }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="image" src="icons/cart-plus.svg" alt="Submit" class="btn btn-primary px-5">
            </form>
        </span>
        <span>
            <form action="/products/{{ $product->id }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="favorite" value={{ $product->favorite ? 'false' : 'true'}} />
                <input type="image" src="icons/star{{ $product->favorite ? '-fill' : ''}}.svg" alt="Submit">
            </form>
        </span>
    </div>
</div>
