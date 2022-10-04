@extends('template.layout')

@section('page-title')
Checkout - Big V
@endsection

@section('head-extra')
<link href="{{asset('assets/css/style-cart-checkout.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="content">
    <div class="max-width flex vertical">
        <h2 class="text-color-grey ea-top">Checkout</h2>
        <div class="cart-wrapper w-100">
            <div class="vendors-column flex-shrink-0 flex-grow-0 w-50">
                <div class="vendors-card">
                    <div>
                        <h4>Shipping Method</h4>
                        <div>
                            <div class="checkout-buttons">
                                <a href="#" class="shipping-button shipping-button-active w-inline-block" id="deliveryShippingButton">
                                    <svg width="33" height="33" viewBox="0 0 33 33" class="shipping-icon" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.125 9.625C26.125 8.1125 24.8875 6.875 23.375 6.875H19.25V9.625H23.375V13.2687L18.59 19.25H13.75V12.375H8.25C5.21125 12.375 2.75 14.8362 2.75 17.875V22H5.5C5.5 24.2825 7.3425 26.125 9.625 26.125C11.9075 26.125 13.75 24.2825 13.75 22H19.91L26.125 14.2313V9.625ZM9.625 23.375C8.86875 23.375 8.25 22.7563 8.25 22H11C11 22.7563 10.3812 23.375 9.625 23.375Z" />
                                        <path d="M6.875 8.25H13.75V11H6.875V8.25ZM26.125 17.875C23.8425 17.875 22 19.7175 22 22C22 24.2825 23.8425 26.125 26.125 26.125C28.4075 26.125 30.25 24.2825 30.25 22C30.25 19.7175 28.4075 17.875 26.125 17.875ZM26.125 23.375C25.3687 23.375 24.75 22.7563 24.75 22C24.75 21.2437 25.3687 20.625 26.125 20.625C26.8813 20.625 27.5 21.2437 27.5 22C27.5 22.7563 26.8813 23.375 26.125 23.375Z" />
                                    </svg>
                                    <div class="text-size-small">Delivery</div>
                                </a>
                                <a href="#" class="shipping-button w-inline-block" id="pickupShippingButton">
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="shipping-icon" fill="#444349" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 1.5C12.9946 1.5 13.9484 1.89509 14.6517 2.59835C15.3549 3.30161 15.75 4.25544 15.75 5.25V6H8.25V5.25C8.25 4.25544 8.64509 3.30161 9.34835 2.59835C10.0516 1.89509 11.0054 1.5 12 1.5ZM17.25 6V5.25C17.25 3.85761 16.6969 2.52226 15.7123 1.53769C14.7277 0.553123 13.3924 0 12 0C10.6076 0 9.27226 0.553123 8.28769 1.53769C7.30312 2.52226 6.75 3.85761 6.75 5.25V6H1.5V21C1.5 21.7956 1.81607 22.5587 2.37868 23.1213C2.94129 23.6839 3.70435 24 4.5 24H19.5C20.2956 24 21.0587 23.6839 21.6213 23.1213C22.1839 22.5587 22.5 21.7956 22.5 21V6H17.25Z" />
                                    </svg>
                                    <div class="text-size-small">Self Collection</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="div-line"></div>
                    <div id="deliveryShippingDetail">
                        <h4 class="heading-6 margin-vertical margin-small">Select Delivery Address</h4>
                        <div class="delivery-add-item">
                            <div>
                                <h4 class="heading-7">Neilson Soeratman</h4>
                                <div class="text-size-small">082337363440</div>
                                <div class="text-size-small">
                                    [Block Number] [Street Name] <br>
                                    #[Unit Level]-[Unit Number] [Building Name] <br>
                                    Singapore [Postal Code]
                                </div>
                            </div>
                            <button type="button" class="btn" data-toggle="modal" style="background: rgba(0,0,0,0); box-shadow: none !important;" data-target=".addressModal">
                                <img src="{{asset('assets/630b9533cf47ce568d633011_pencil.svg')}}" loading="lazy" alt="" class="image-21 cursor-pointer" />
                            </button>
                        </div>
                        <div class="different-add-div">
                            <div class="div-block-26 cursor-pointer" id="diffShippingAddress">
                                <h4 class="heading-7">Ship to a Different Address?</h4>
                                <img src="{{asset('assets/circle.svg')}}" id="iconShippingAddress" loading="lazy" alt="" />
                            </div>
                            <div id="shippingAddress" style="display: none;">
                                <div class="div-line"></div>
                                <div class="div-block-26">
                                    <div>
                                        <h4 class="heading-7">Neilson Soeratman</h4>
                                        <div class="text-size-small">082337363440</div>
                                        <div class="text-size-small">
                                            [Block Number] [Street Name] <br>
                                            #[Unit Level]-[Unit Number] [Building Name] <br>
                                            Singapore [Postal Code]
                                        </div>
                                    </div>
                                    <button type="button" class="btn" data-toggle="modal" style="background: rgba(0,0,0,0); box-shadow: none !important;" data-target=".addressModal">
                                        <img src="{{asset('assets/630b9533cf47ce568d633011_pencil.svg')}}" loading="lazy" alt="" class="image-21 cursor-pointer" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pickupShippingDetail" class="d-none">
                        <h4 class="heading-6 margin-vertical margin-small">Select Pickup Address</h4>
                        <div class="d-flex flex-column">
                            @for ($i = 0; $i < 4; $i++) 
                            <div class="delivery-add-item w-auto flex-column align-items-start pickup-address-button cursor-pointer">
                                <h4 class="heading-7">Big V North</h4>
                                <div class="text-size-small">
                                    [Block Number] [Street Name] <br>
                                    #[Unit Level]-[Unit Number] [Building Name] <br>
                                    Singapore [Postal Code]
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="div-line"></div>
                    <h4 class="heading-6 margin-vertical margin-small text-color-dark-grey">Shipping/Pickup Time</h4>
                    <div class="position-relative w-100 h-auto">
                        <?php date_default_timezone_set('Asia/Singapore'); 
                        $minDate = date("Y-m-d", strtotime(date("Y-m-d")."+ 8 days")); ?>
                        <input type="date" class="delivery-add-time w-100" id="shippingDate" min="<?= $minDate ?>">
                        <div class="position-absolute d-flex justify-content-between align-items-center" style="top:18px; left:18px; width: calc(100% - 36px); background: #f7f7f7; pointer-events:none;">
                            <div class="d-flex flex-column">
                                <div class="text-size-small text-color-grey">Delivery Date</div>
                                <h5 class="text-color-grey" id="shippingDateFormat">Monday, 4th July</h5>
                            </div>
                            <!-- Only 8th day onwards  -->
                            <!-- No shipping on sunday / public holiday -->
                            <img src="{{asset('assets/630b987de146c81e1ccb7e54_chevron-expand.svg')}}" loading="lazy" alt="" class="image-21" />
                        </div>
                    </div>
                    <div class="div-block-27">
                        <a href="#" class="time-button time-button-active w-inline-block">
                            <div>AM</div>
                        </a>
                        <a href="#" class="time-button w-inline-block">
                            <div>PM</div>
                        </a>
                    </div>
                </div>
                @for ($i = 0; $i < 2; $i++) 
                <div class="vendors-card ea-left">
                    <div class="flex gap-medium"><img src="{{asset('assets/630193c64ebe68075a463721_profile-005.jpg')}}" loading="lazy" alt="" class="image-17" />
                        <div>
                            <h5 class="text-color-dark-grey">Polia</h5>
                            <div class="text-size-small text-color-grey">Location: East</div>
                        </div>
                    </div>
                    <div class="div-line"></div>
                    @for ($j = 0; $j < 5; $j++) 
                    <div class="vendor-item">
                        <div class="flex gap-medium">
                            <img src="https://bigvsg.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-28-at-11.47.58.jpeg" loading="lazy" srcset="https://bigvsg.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-28-at-11.47.58.jpeg" alt="" class="image-18" />
                            <div>
                                <h5 class="text-color-dark-grey">Cute Tiger Aroma Stone Set</h5>
                                <div class="text-size-small text-color-grey">Color: white</div>
                                <div class="text-size-small text-color-grey">$10</div>
                            </div>
                        </div>
                        <div class="flex gap-small">
                            <p class="m-0">x1</p>
                        </div>
                    </div>
                    @endfor
                </div>
                @endfor
            </div>
            <div class="sticky-summary flex-shrink-0 flex-grow-0 w-50">
                <div class="cart-summary">
                    <h4 class="text-color-dark-grey">Discount</h4>
                    <div class="div-block-28" data-toggle="modal" data-target=".discountModal">
                        <div class="dropdown-toggle w-dropdown-toggle">
                            <img src="{{asset('assets/6312035b7fb097b080627244_discount icon.svg')}}" loading="lazy" alt="" />
                            <div class="text-block-3 text-color-dark-grey">Apply Discount</div>
                            <div class="icon-3 w-icon-dropdown-toggle"></div>
                        </div>
                    </div>
                    <h4 class="heading-8 text-color-dark-grey">Summary</h4>
                    <div class="div-block-24 text-color-grey">
                        <div class="inline">Total Price (30 items)</div>
                        <div class="inline">$201</div>
                    </div>
                    <div class="div-block-24 text-color-grey">
                        <div class="inline">Shipping Price</div>
                        <div class="inline">$30</div>
                    </div>
                    <div class="div-block-24 text-color-grey">
                        <div class="inline">Discounts</div>
                        <div class="inline">- $3</div>
                    </div>
                    <div class="div-line-sumarry"></div>
                    <div class="div-block-24 text-color-dark-grey">
                        <div class="inline text-weight-bold">Total</div>
                        <div class="inline text-weight-bold">$228</div>
                    </div><a href="#" class="checkout-button oh-grow w-button">Place Order</a>
                    <a href="#" class="payment-gateway-button w-inline-block">
                        <div class="text-weight-bold">HitPay Payment Gateway</div><img src="{{asset('assets/6312dbbdcf1b3f0de3362511_Hitpay.png')}}" loading="lazy" alt="" />
                    </a>
                    <a href="#" class="payment-gateway-button w-inline-block">
                        <div><img src="{{asset('assets/6312f973553f41aa30ea54e6_atome%20(1).png')}}" loading="lazy" alt="" class="image-19" />
                            <div class="text-size-xtiny">Buy now pay later with Atome. The bill will be split into three easy payments.No hidden fees, 0% interest.*Only Singapore Dollar (SGD) is accepted.</div>
                        </div>
                    </a>
                    <a href="#" class="payment-gateway-button w-inline-block">
                        <div>
                            <div class="text-weight-bold">PayNow</div>
                            <div class="text-size-xtiny">How to pay using paynow payment gateway :
                                <br />1. Process to checkout first
                                <br />2. Pay to UEN number: 202031871R
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/6303b67a5064f05035c5a701_shape 1.svg')}}" loading="lazy" alt="" class="absolute shape-cart" />
    </div>
    
</div>
<div class="modal fade addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content br-27">
            <div class="modal-header">
                <h4 class="modal-title h4 ml-2" id="addressModal">Choose Address</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="shippingAddressList">
                    <div class="d-flex justify-content-between m-2">
                        <div class="form-block-3 w-form">
                            <input type="text" class="text-field-2 w-input" maxlength="256" placeholder="Search address">
                        </div>
                        <a href="#" class="search-modal" tabindex="0">Search</a>
                    </div>
                    <div class="div-line ml-3 mr-3"></div>
                    <div class="custom-button d-flex justify-content-center p-3 cursor-pointer mr-2 ml-2 mb-3" id="addNewAddressShipping">
                        <p class="m-0 color-custom-gray">Add New Address</p>
                    </div>
                    <div class="d-flex flex-column modal-list-container">
                        @for ($i = 0; $i < 10; $i++) 
                        <div class="delivery-add-item w-auto mr-2 ml-2 flex-column align-items-start address-button cursor-pointer">
                            <h4 class="heading-7">Neilson Soeratman</h4>
                            <div class="text-size-small">082337363440</div>
                            <div class="text-size-small">
                                [Block Number] [Street Name] <br>
                                #[Unit Level]-[Unit Number] [Building Name] <br>
                                Singapore [Postal Code]
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                <div id="shippingNewAddress" class="d-none">
                    <div class="mb-3">
                        <h5 class="text-color-dark-grey mb-1">Name</h5>
                        <input type="text" class="text-field-2 w-input" id="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <h5 class="text-color-dark-grey mb-1">Phone Number</h5>
                        <input type="text" class="text-field-2 w-input" id="phoneNumber" placeholder="Phone Number">
                    </div>
                    <div class="mb-3">
                        <h5 class="text-color-dark-grey mb-1">Additional Information</h5>
                        <textarea class="text-field-2 w-input" id="additionalInformation" placeholder="Additional Information"></textarea>
                    </div>
                    <div class="div-line"></div>
                    <h5 class="text-color-dark-grey mb-1">Address Format Type</h5>
                    <div class="d-flex mb-3" style="gap: 10px;">
                        <a href="#" class="address-new-button address-new-button-active w-inline-block" id="newAddressBuilding">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                            </svg>
                            <div class="text-size-small">Building</div>
                        </a>
                        <a href="#" class="address-new-button w-inline-block" id="newAddressProperties">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                            <div class="text-size-small">Landed Properties</div>
                        </a>
                    </div>
                    <div>
                        <div class="mb-3" id="blockNumber">
                            <h5 class="text-color-dark-grey mb-1">Block Number</h5>
                            <input type="number" class="text-field-2 w-input" id="blockNumber" placeholder="Block Number">
                        </div>
                        <div class="mb-3" id="streetName">
                            <h5 class="text-color-dark-grey mb-1">Street Name</h5>
                            <input type="text" class="text-field-2 w-input" id="streetName" placeholder="Street Number">
                        </div>
                        <div class="mb-3" id="unitLevel">
                            <h5 class="text-color-dark-grey mb-1">Unit Level</h5>
                            <input type="number" class="text-field-2 w-input" id="unitLevel" placeholder="Unit Level">
                        </div>
                        <div class="mb-3" id="unitNumber">
                            <h5 class="text-color-dark-grey mb-1">Unit Number</h5>
                            <input type="number" class="text-field-2 w-input" id="unitNumber" placeholder="Unit Number">
                        </div>
                        <div class="mb-3" id="buildingName">
                            <h5 class="text-color-dark-grey mb-1">Building Name</h5>
                            <input type="text" class="text-field-2 w-input" id="buildingName" placeholder="Building Name">
                        </div>
                        <div class="mb-3" id="postalCode">
                            <h5 class="text-color-dark-grey mb-1">Postal Code</h5>
                            <input type="number" class="text-field-2 w-input" id="postalCode" placeholder="Postal Code">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end" style="gap: 10px;">
                        <a href="#" class="pr-4 pl-4 checkout-button w-button">Save</a>
                        <a href="#" class="pr-4 pl-4 checkout-button w-button bg-secondary" id="cancelAddNewAddressShipping">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade discountModal" tabindex="-1" role="dialog" aria-labelledby="discountModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content br-27">
            <div class="modal-header">
                <h4 class="modal-title h4 ml-2" id="discountModal">Choose Discount</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between m-2">
                    <div class="form-block-3 w-form">
                        <input type="text" class="text-field-2 w-input" maxlength="256" placeholder="Search discount code">
                    </div>
                    <a href="#" class="search-modal" tabindex="0">Search</a>
                </div>
                <div class="div-line ml-3 mr-3"></div>
                <h4 class="heading-7 ml-2 mb-3">Product Discount Voucher</h4>
                <div class="d-flex flex-column modal-list-container-2">
                    @for ($i = 0; $i < 10; $i++) 
                    <div class="delivery-add-item w-auto mr-2 ml-2 flex-column align-items-start product-discount-button cursor-pointer">
                        <h4 class="heading-7">BIGVDISCOUNT40</h4>
                        <div class="text-size-small">40% off product sale</div>
                    </div>
                    @endfor
                </div>
                <div class="div-line ml-3 mr-3"></div>
                <h4 class="heading-7 ml-2 mb-3">Shipping Discount Voucher</h4>
                <div class="d-flex flex-column modal-list-container-2">
                    @for ($i = 0; $i < 10; $i++) 
                    <div class="delivery-add-item w-auto mr-2 ml-2 flex-column align-items-start shipping-discount-button cursor-pointer">
                        <h4 class="heading-7">SHIPPING4</h4>
                        <div class="text-size-small">$4 off shipping cost</div>
                    </div>
                    @endfor
                </div>
                <div class="d-flex justify-content-end mt-3" style="gap: 10px;">
                    <a href="#" class="pr-4 pl-4 checkout-button w-button">Apply</a>
                    <a href="#" class="pr-4 pl-4 checkout-button w-button bg-secondary" data-dismiss="modal" aria-label="Close">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript-extra')
<script src="{{asset('assets/js/script-cart-checkout.js')}}" type="text/javascript"></script>
<script>
    $(document).on("click", ".quantity-change", function() {
        var qty = $(this).parent().find(".product-quantity");
        if ($(this).attr("logic") == "add") {
            qty.val(parseInt(qty.val()) + 1);
        } else {
            if (qty.val() != 1) qty.val(parseInt(qty.val()) - 1);
        }
    });

    $("#deliveryShippingButton").on('click', function() {
        $("#deliveryShippingDetail").removeClass("d-none");
        $("#pickupShippingDetail").addClass("d-none");
    });

    $("#pickupShippingButton").on('click', function() {
        $("#deliveryShippingDetail").addClass("d-none");
        $("#pickupShippingDetail").removeClass("d-none");
    });

    $(".shipping-button").on('click', function() {
        $(".shipping-button").removeClass("shipping-button-active");
        $(".shipping-icon").attr("fill", "#444349");
        $(this).addClass("shipping-button-active");
        $(this).find(".shipping-icon").attr("fill", "#ffffff");
    });

    $(".time-button").on('click', function() {
        $(".time-button").removeClass("time-button-active");
        $(this).addClass("time-button-active");
    });

    $(".payment-gateway-button").on('click', function() {
        $(".payment-gateway-button").removeClass("payment-gateway-button-active");
        $(this).addClass("payment-gateway-button-active");
    });

    $(".address-button").on('click', function() {
        $(".address-button").removeClass("address-button-active");
        $(this).addClass("address-button-active");
    });

    $(".pickup-address-button").on('click', function() {
        $(".pickup-address-button").removeClass("pickup-address-button-active");
        $(this).addClass("pickup-address-button-active");
    });

    $(".product-discount-button").on('click', function() {
        $(".product-discount-button").removeClass("product-discount-button-active");
        $(this).addClass("product-discount-button-active");
    });

    $(".shipping-discount-button").on('click', function() {
        $(".shipping-discount-button").removeClass("shipping-discount-button-active");
        $(this).addClass("shipping-discount-button-active");
    });

    var shippingAddress = false;
    $("#diffShippingAddress").on('click', function() {
        if (shippingAddress == false) {
            $("#shippingAddress").slideDown();
            shippingAddress = true;
            $("#iconShippingAddress").attr("src", $("#iconShippingAddress").attr("src").replace("circle", "check"));
        } else {
            $("#shippingAddress").slideUp();
            shippingAddress = false;
            $("#iconShippingAddress").attr("src", $("#iconShippingAddress").attr("src").replace("check", "circle"));
        }
    });

    const nth = function(d) {
        if (d > 3 && d < 21) return 'th';
        switch (d % 10) {
            case 1:
                return "st";
            case 2:
                return "nd";
            case 3:
                return "rd";
            default:
                return "th";
        }
    }

    $("#shippingDate").on('change', function() {
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        if ($(this).val() != "") {
            const selectedDate = new Date($(this).val());
            let dd = selectedDate.getDate();

            $("#shippingDateFormat").html(days[selectedDate.getDay()] + ", " + dd + nth(dd) + " " + months[selectedDate.getMonth()]);
        }
    });

    document.getElementById('shippingDate').valueAsDate = new Date("<?= $minDate ?>");
    $("#shippingDate").change();

    $("#addNewAddressShipping").on("click", function(){
        $("#shippingAddressList").addClass("d-none");
        $("#shippingNewAddress").removeClass("d-none");
    });

    $("#cancelAddNewAddressShipping").on("click", function(){
        $("#shippingAddressList").removeClass("d-none");
        $("#shippingNewAddress").addClass("d-none");
    });

    $("#newAddressBuilding").on("click", function(){
        $(".address-new-button").removeClass("address-new-button-active");
        $(this).addClass("address-new-button-active");
        $("#blockNumber").removeClass("d-none");
        $("#unitLevel").removeClass("d-none");
        $("#buildingName").removeClass("d-none");
    });

    $("#newAddressProperties").on("click", function(){
        $(".address-new-button").removeClass("address-new-button-active");
        $(this).addClass("address-new-button-active");
        $("#blockNumber").addClass("d-none");
        $("#unitLevel").addClass("d-none");
        $("#buildingName").addClass("d-none");
    });
</script>
@endsection