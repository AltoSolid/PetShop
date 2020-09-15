<div class="column">

<form action="{{ route('product.removeCart') }}" method="POST">
    @csrf
    <button class="button_personalized" type="submit">Delete cart items</button>
</form>
</div>
<div class="column">
<form action="{{ route('product.showCart') }}" method="GET">
    @csrf
    <button class="button_personalized" type="submit">See cart</button>
</form>
</div>