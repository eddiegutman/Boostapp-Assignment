<x-layout>

    <div class="container">
        <div class="columns">
            <div class="column is-one-fifth">
                <h1>CART</h1>
            </div>

            <div class="column">
                <div class="columns is-multiline">

                    @foreach ($favorites as $product)
                        <div class="column is-2">
                            <x-product :product="$product" />
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>


</x-layout>
