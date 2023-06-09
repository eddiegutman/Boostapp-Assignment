@props(['product'])

<div class="card text-end" style="width: 14rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $product->price . 'ש"ח' }}</h6>
        <a href="#" class="card-link">הוסף לסל</a>
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
    </div>
</div>
