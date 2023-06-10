@props(['product'])

<form action="/cart/{{ $product->id }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <input type="image" src="icons/cart-plus.svg" alt="Submit" class="btn btn-primary px-5">
</form>