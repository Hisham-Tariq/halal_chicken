@extends('client/layouts.default')

@section('content')


   <!--==============================
    Breadcumb
============================== -->
<div  data-bg-src="assets/halalchickenimages/banners/banner1.jpg">
   <div class="breadcumb-wrapper " style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-white">WISH<span class="font-style text-theme2">LIST</span></h1>
            <ul class="breadcumb-menu" style="color: white !important;">
                <li><a href="index.html" class="text-white">Home</a></li>
                <li class="text-white">Wishlist</li>
            </ul>
        </div>
    </div>
   </div>
</div>

   <!--==============================
Checkout Area
==============================-->
<div class="space" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="container">
        <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
            <div class="tinv-header">
                <h2 class="mb-30">Wishlist</h2>
            </div>
            <form action="#" method="post" autocomplete="off">
                <table class="tinvwl-table-manage-list">
                    <thead>
                        <tr>
                            <th class="product-cb">
                                <input type="checkbox" class="global-cb" title="Select all for bulk action">
                            </th>
                            <th class="product-remove"></th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">
                                <span class="tinvwl-full">Product Name</span><span class="tinvwl-mobile">Product</span>
                            </th>
                            <th class="product-price">Unit Price</th>
                            <th class="product-date">Date Added</th>
                            <th class="product-stock">Stock Status</th>
                            <th class="product-action">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="wishlist_item">
                            <td class="product-cb">
                                <input type="checkbox" name="wishlist_pr[]" value="58" title="Select for bulk action">
                            </td>
                            <td class="product-remove">
                                <button type="submit" class="bg-dark text-white" name="tinvwl-remove" value="58" title="Remove"><i class="fal fa-times"></i>
                                </button>
                            </td>
                            <td class="product-thumbnail">
                                <a href="shop-details.html">
                                    <img src="assets/halalchickenimages/banners/menu_page/pizzamenu1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="image"></a>
                            </td>
                            <td class="product-name">
                                <a href="shop-details.html">Chicken Vagetable</a>
                            </td>
                            <td class="product-price">
                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>45.00</bdi></span>
                            </td>
                            <td class="product-date">
                                <time class="entry-date" datetime="2021-11-21 03:54:24">November 21, 2021</time>
                            </td>
                            <td class="product-stock">
                                <p class="stock in-stock">
                                    <span><i class="fas fa-check"></i></span><span class="tinvwl-txt">In stock</span>
                                </p>
                            </td>
                            <td class="product-action">
                                <button class="button as-btn" name="tinvwl-add-to-cart" value="58" title="Add to Cart">
                                    <i class="far fa-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="wishlist_item">
                            <td class="product-cb">
                                <input type="checkbox" name="wishlist_pr[]" value="60" title="Select for bulk action">
                            </td>
                            <td class="product-remove">
                                <button type="submit" class="bg-dark text-white" name="tinvwl-remove" value="60" title="Remove"><i class="fal fa-times"></i>
                                </button>
                            </td>
                            <td class="product-thumbnail">
                                <a href="shop-details.html"><img src="assets/halalchickenimages/banners/menu_page/pizzamenu1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="image"></a>
                            </td>
                            <td class="product-name">
                                <a href="shop-details.html">Full Chicken Grill</a>
                            </td>
                            <td class="product-price">
                                <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>18.00</bdi></span></ins>
                                <del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span></del>
                            </td>
                            <td class="product-date">
                                <time class="entry-date" datetime="2021-11-21 03:54:24">November 21, 2021</time>
                            </td>
                            <td class="product-stock">
                                <p class="stock in-stock"><span><i class="fas fa-check"></i></span><span class="tinvwl-txt">In stock</span></p>
                            </td>
                            <td class="product-action">
                                <button class="button as-btn" name="tinvwl-add-to-cart" value="60" title="Add to Cart">
                                    <i class="far fa-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="wishlist_item">
                            <td class="product-cb">
                                <input type="checkbox" name="wishlist_pr[]" value="60" title="Select for bulk action">
                            </td>
                            <td class="product-remove">
                                <button type="submit" class="bg-dark text-white" name="tinvwl-remove" value="60" title="Remove"><i class="fal fa-times"></i>
                                </button>
                            </td>
                            <td class="product-thumbnail">
                                <a href="shop-details.html"><img src="assets/halalchickenimages/banners/menu_page/pizzamenu1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="image"></a>
                            </td>
                            <td class="product-name">
                                <a href="shop-details.html">Italian Pizza</a>
                            </td>
                            <td class="product-price">
                                <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>18.00</bdi></span></ins>
                                <del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span></del>
                            </td>
                            <td class="product-date">
                                <time class="entry-date" datetime="2021-11-21 03:54:24">November 21, 2021</time>
                            </td>
                            <td class="product-stock">
                                <p class="stock in-stock"><span><i class="fas fa-check"></i></span><span class="tinvwl-txt">In stock</span></p>
                            </td>
                            <td class="product-action">
                                <button class="button as-btn" name="tinvwl-add-to-cart" value="60" title="Add to Cart">
                                    <i class="far fa-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="social-buttons">
                <span>Share on</span>
                <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=permalink" class="social social-facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/share?url=permalink" class="social social-twitter " title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="http://pinterest.com/pin/create/button/?url=permalink" class="social social-pinterest " title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?text=permalink" class="social social-whatsapp " title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="http://vecurosoft.com/products/wordpress/foodelio/wishlist/974b61/" class="social social-clipboard " title="Clipboard"><i class="far fa-clipboard"></i></a></li>
                    <li><a href="mailto:?body=permalink" class="social social-email " title="Email"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>


@stop








