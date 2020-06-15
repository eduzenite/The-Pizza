<div class="card mb-4 shadow-sm">
    <a href="{{ route('product', [$product->category_slug, $product->id]) }}">
        <img src="{{ $product->photos[0]->url }}"
             class="img-fluid" alt="{{ $product->name }}">
    </a>
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <strong class="card-text">{{ $product->name }}</strong>
            <span><small class="money_symbol">$</small> {{ number_format($product->price, 2) }}</span>
        </div>
    </div>
    <div class="btn-group btn-group-justified">
        <a href="#" class="btn btn-light add-to-cart" data-category="{{ $product->category_name }}" data-name="{{ $product->name }}" data-id="{{ $product->id }}" data-price="{{ $product->price }}"><i class="fa fa-shopping-basket"></i> Add to cart</a>
        <a href="{{ route('product', [$product->category_slug, $product->id]) }}"
           class="btn btn-light"><i
                class="fa fa-chevron-right"></i> Show Details</a>
    </div>
</div>
