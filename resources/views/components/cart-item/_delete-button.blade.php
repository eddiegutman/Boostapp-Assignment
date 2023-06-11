@props(['item'])

<div class="d-flex align-self-center p-2">
    <form action="/cart/{{ $item->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <input type="image" src="icons/trash.svg" alt="Submit">
    </form>
</div>
