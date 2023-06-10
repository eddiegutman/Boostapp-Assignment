@props(['product'])

<form action="/products/{{ $product->id }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="favorite" value={{ $product->favorite ? 'false' : 'true'}} />
    <input type="image" src="icons/star{{ $product->favorite ? '-fill' : ''}}.svg" alt="Submit">
</form>