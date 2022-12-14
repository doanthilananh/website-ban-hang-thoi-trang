@extends('welcome')
<style>
    .bgimg1{
        display: none;
    
    }
    #slider{
        display:none;
    }
</style>
@section('feature-items')
    <div class="product-details"><!--product-details-->
    @foreach($product as $key => $pro)
        <div class="col-sm-5">
            <div class="view-product">
                <img src="{{url('../public/upload/product/'.$pro->product_image)}}" />
                <h3>ZOOM</h3>
            </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href=""><img src="images/product-details/cpu-product.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/cpu.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/fan.jpg" alt="" width="88px"></a>
                        </div>
                        <div class="item">
                            <a href=""><img src="images/product-details/cpu-product.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/cpu.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/fan.jpg" alt="" width="88px"></a>
                        </div>
                        <div class="item">
                            <a href=""><img src="images/product-details/cpu-product.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/cpu.jpg" alt="" width="88px"></a>
                            <a href=""><img src="images/product-details/fan.jpg" alt="" width="88px"></a>
                        </div>
                        
                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                    </a>
            </div>

        </div>
        
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->
                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                <h2>{{$pro->product_name}}</h2>
                <img src="images/product-details/rating.png" alt="" />
                <span>
                    <span>{{$pro->product_price}} VND</span>
                    <label>S??? l?????ng:</label>
                    <input type="text" value="3" />
                    <button type="button" class="btn btn-fefault cart">
                        <i class="fa fa-shopping-cart"></i>
                        Th??m v??o gi??? h??ng
                    </button>
                </span>
                <p><b>Kh??? d???ng:</b> Trong kho</p>
                <p><b>T??nh tr???ng:</b> M???i</p>
                <p><b>Th????ng hi???u:</b> {{$pro->brand_name}}</p>
                <a href=""><img src="{{url('../public/frontend/images/share.png')}}" class="share img-responsive"  alt="" /></a>
            </div><!--/product-information-->
        </div>
    @endforeach
    </div><!--/product-details-->
    
    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#details" data-toggle="tab">M?? t??? s???n ph???m</a></li>
                <li><a href="#content" data-toggle="tab">N???i dung s???n ph???m</a></li>
                <li class="active"><a href="#reviews" data-toggle="tab">????nh gi??</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details" >
                {{$pro->product_desc}}
            </div>
            <div class="tab-pane fade" id="details" >
                {{$pro->product_content}}
            </div>
            <div class="tab-pane fade active in" id="reviews" >
                
                <div class="col-sm-12">
                    @foreach($review_product as $review => $re_pro)
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>{{$re_pro->reviewer_name}}</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>19 Th??ng 7 2022</a></li>
                    </ul>
                    <p>S???n ph???m d??ng t???t, d??? d??ng l???p ?????t v?? s??? d???ng, ph?? h???p v???i nhi???u lo???i m??y. Hi???u xu???t cao v?? c?? kh??? n??ng th??ch ???ng t???t v???i nhi???u d??ng m??y. Gi?? c??? ph?? h???p, ???????c ????ng g??i c???n th???n. Giao h??ng nhanh ti???n l???i.</p>
                    <p><b>Vi???t ????nh gi?? c???a b???n</b></p>
                    @endforeach
                    <form action="{{url('/danh-gia-san-pham/'.$pro->product_id)}}" method="post">
                        <span>
                            <input type="text" placeholder="H??? T??n" name="reviewer_name"/>
                            <input type="email" placeholder="Email" name="reviewer_email"/>
                        </span>
                        <textarea name="review_content" ></textarea>
                        <b>????nh gi??: </b> <img src="{{url('../public/frontend/images/rating.png')}}" alt="" />
                        <button type="submit" class="btn btn-default pull-right">
                            ????ng b??i
                        </button>
                    </form>
                </div>

            </div>
            
        </div>
    </div><!--/category-tab-->
    
    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">C??c m???t h??ng ???????c ????? xu???t</h2>
        
        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">	
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product12.jpg" alt="" />
                                    <h2>499.000???</h2>
                                    <p>RAM G.SKILL Aegis 4 GB-DDR4-2666 MHz (F4-2666C19S-4GIS)</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product11.jpg" alt="" />
                                    <h2>5.399.000???</h2>
                                    <p>Card ????? h???a MSI GeForce GTX 1650 VENTUS XS 4G OC</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product10.jpg" alt="" />
                                    <h2>569.500???</h2>
                                    <p>T???n nhi???t kh?? Xigmatek AIR KILLER S ARCTIC</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">	
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product12.jpg" alt="" />
                                    <h2>499.000???</h2>
                                    <p>RAM G.SKILL Aegis 4 GB-DDR4-2666 MHz (F4-2666C19S-4GIS)</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product11.jpg" alt="" />
                                    <h2>5.399.000???</h2>
                                    <p>Card ????? h???a MSI GeForce GTX 1650 VENTUS XS 4G OC</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/shop/product10.jpg" alt="" />
                                    <h2>569.500???</h2>
                                    <p>T???n nhi???t kh?? Xigmatek AIR KILLER S ARCTIC</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>			
        </div>
    </div><!--/recommended_items-->
@endsection