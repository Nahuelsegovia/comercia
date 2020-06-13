<div class="product-items-section pad-bottom80">
                <div class="container">
                    <div class="row">
                        <div class="headding-box mar-bottom40">
                            <h3 class="theme-headdings">Últimos productos</h3>
                            <p>Encontrá los últimos productos<br>
                                
                            <p>
                        </div>
                        <div id="product-items-slider" class="owl-carousel owl-theme">
                            @foreach($productos as $producto)
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <figure class="itg-hover-style2">
                                        <img src="{{ route('imagen.ver', $producto->foto_producto) }}" alt="">
                                        <div class="products-boxes">
                                            <ul class="icon-hover">
                                                <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                <li><a href="product-detail.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <figcaption class=" figure-boxx figure-section-hover">
                                            <h4 class="theme-headdings text-center pad-top10"><a href="product-detail.html">{{$producto->titulo_producto}}</a></h4>
                                            <p>$169.00</p>
                                            <p></p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            @endforeach()
                             
                    </div>
                </div>
            </div>