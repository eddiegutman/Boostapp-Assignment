<x-layout>

    <div>
        <div>
            <h1>CART</h1>
        </div>

        <div>
            @foreach ($products as $product)
                <div>
                    <x-product :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
