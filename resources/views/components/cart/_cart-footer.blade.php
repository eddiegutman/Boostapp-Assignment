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