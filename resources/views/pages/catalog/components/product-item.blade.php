<div class="single-product shop-quick-view-ajax">

    <div class="ajax-modal-title">
        <h2>{{ $shopProduct->title }}</h2>
    </div>

    <div class="product modal-padding">

        <div class="row gutter-40 col-mb-50">
            <div class="col-md-6">
                <div class="product-image">
                    <div class="fslider" data-pagi="false">
                        <div class="flexslider">
                            <img src="{{ $shopProduct->img }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 product-desc">
                <div class="product-price">
                    <ins>{{ $shopProduct->price }} руб.</ins>
                </div>
                <div class="clear"></div>
                <div class="line"></div>

                <!-- Product Single - Quantity & Cart Button
                ============================================= -->
                <form class="cart mb-0" method="post" enctype='multipart/form-data'>
                    <div class="quantity">
                        <input type="button" value="-" class="minus">
                        <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                        <input type="button" value="+" class="plus">
                    </div>
                    <button type="submit" class="add-to-cart button m-0">В корзину</button>
                </form><!-- Product Single - Quantity & Cart Button End -->

                <div class="clear"></div>
                <div class="line"></div>
                <p>{{ $shopProduct->description }}</p>
                <ul class="iconlist">
                    <li><i class="icon-weight-hanging"></i>Вес: {{ $shopProduct->weight_in_grams }}г</li>
                    <li><i class="icon-fire1"></i>Энерг.ценность: {{ $shopProduct->calories }}кКал</li>
                    <li><i class="icon-ok"></i>{{ $shopProduct->availability }}</li>
                    <li><i class="icon-stopwatch1"></i>Срок годности: {{ $shopProduct->self_life }} дней</li>
                </ul>
            </div>
        </div>

    </div>

</div>