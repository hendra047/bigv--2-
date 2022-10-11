{{-- PRODUCT VOUCHER --}}
<h4 class="heading-7 ml-2 mb-3">Product Discount Voucher</h4>
<div id="productVoucher" class="d-flex flex-column modal-list-container-2">
    @foreach($productDiscounts as $productDiscount)
        <div class="delivery-add-item w-auto mr-2 ml-2 flex-column align-items-start discount-button cursor-pointer">
            <h4 class="heading-7">{{ $productDiscount->code }}</h4>
            <div class="text-size-small">{{ $productDiscount->description }}</div>
        </div>
    @endforeach
</div>
<div class="div-line ml-3 mr-3"></div>

{{-- SHIPPING VOUCHER --}}
<h4 class="heading-7 ml-2 mb-3">Shipping Discount Voucher</h4>
<div id="shippingVoucher" class="d-flex flex-column modal-list-container-2">
    @foreach($shippingDiscounts as $shippingDiscount)
        <div class="delivery-add-item w-auto mr-2 ml-2 flex-column align-items-start discount-button cursor-pointer">
            <h4 class="heading-7">{{ $shippingDiscount->code }}</h4>
            <div class="text-size-small">{{ $shippingDiscount->description }}</div>
        </div>
    @endforeach
</div>

<script>
    $(".discount-button").on('click', function() {
        $(".discount-button").removeClass("product-discount-button-active");
        $(this).addClass("product-discount-button-active");

        console.log($(this).parent());
    });
</script>