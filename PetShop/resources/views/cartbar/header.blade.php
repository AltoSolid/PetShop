<!-- Autor: Felipe Ríos López -->
<div class="column">

<form action="{{ route('product.removeCart') }}" method="POST">
    @csrf
    <button class="button_personalized" type="submit">{{ __('information.header.delete')}}</button>
</form>
</div>
<div class="column">
<form action="{{ route('product.showCart') }}" method="GET">
    @csrf
    <button class="button_personalized" type="submit">{{ __('information.header.see')}}</button>
</form>
</div>