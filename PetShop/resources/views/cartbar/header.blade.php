<!-- Autor: Felipe Ríos López & Juan Felipe Londoño -->
<div class="column" >

    <form action="{{ route('product.removeCart') }}" method="POST">
        @csrf
        <button class="button_personalized" type="submit">{{ __('information.header.delete')}}</button>
    </form>
</div>


<div class="row">
    <div class="parts1">
        <form action="{{ route('product.showCart') }}" method="GET">
            @csrf
            <button class="button_personalized" type="submit">{{ __('information.header.see')}}</button>
        </form>
    </div>

    <div class="parts2">
        <form action="{{ route('product.viewOrders') }}" method="GET">
            @csrf
            <button class="button_personalized" type="submit"> {{__('information.header.vieworders') }} </button>
        </form>  
    </div>
</div>


