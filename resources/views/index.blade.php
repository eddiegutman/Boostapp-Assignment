<x-layout>

    <div class="container">
        <div class="d-flex justify-content-end flex-wrap">
            @foreach ($products as $product)
                <div class="p-2">
                    <x-product :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
