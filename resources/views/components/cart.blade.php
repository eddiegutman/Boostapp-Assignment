@props(['cart'])

@php
    $GLOBALS['sum'] = 0;
@endphp

<div class="container-fluid d-flex flex-column flex-fill">
    <header class="p-2 d-flex justify-content-between">
        <span class="p-2 ms-3">סיכום</span>
        <span class="p-2 me-3">שם מוצר</span>
    </header>
    <hr>
    <div class="p-2 d-flex flex-column overflow-y-auto" style="height: 39rem">
        @foreach ($cart as $item)
            <div class="p-2">
                <x-cart-item :item="$item" />
            </div>
        @endforeach
    </div>
    <footer class="p-2 d-flex flex-column mt-auto">
        <hr>
        <div class="d-flex justify-content-between">
            <span class="ms-3"> {{ '₪' . number_format($GLOBALS['sum'] * 0.17, 1) }}</span>
            <span class="me-3 d-flex">
                <p>מע"מ</p> &nbsp;
                <p>17%</p>
            </span>
        </div>
        <div class="d-flex justify-content-between">
            <span class="ms-3"> {{ '₪' . $GLOBALS['sum'] }}</span>
            <span class="me-3 mb-2">סה"כ</span>
        </div>
    </footer>
</div>
