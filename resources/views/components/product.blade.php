@props(['product'])

<div>
    <div>
        <p>
            {{ $product->name }}
        </p>
        <p>
            {{ $product->price . 'ש"ח' }}
        </p>
    </div>
    <footer>
        <p>
            <span>
                <a href="">הוסף לסל</a>
            </span>
        </p>
        <p>
            <span>
                <form id="favorite-form-{{ $product->id }}" action="/products/{{ $product->id }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="fav/{{ $product->id }}">favorite</label>
                    <input type="checkbox" name="favorite" id="fav/{{ $product->id }}" @checked($product->favorite)
                        onchange="document.getElementById('favorite-form-{{ $product->id }}').submit()">
                </form>
            </span>
        </p>
    </footer>
</div>
