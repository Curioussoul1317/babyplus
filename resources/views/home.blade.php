@extends('layouts.app')

@section('content')
 
        
    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <div class="section-title">
          <h4 class="title">PRODUCTS</h4>
          <div class="section-nav">
            <div class="products-slick-nav"></div>
          </div>
        </div>
        <!-- row -->
        <div class="row">
              @foreach($items as $item)
          <!-- product widget -->
          <div class="col-md-4 col-xs-6">
            <div class="product-widget">
              <div class="product-img">
                <!-- <img src="./img/product04.png" alt="" /> -->
                 
              </div>
              <div class="product-body" style="    margin-left: 10px;">
                <p class="product-category">Category</p>
                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
              </div>
            </div>
          </div>
          <!-- /product widget -->
            @endforeach
        </div>
      </div>
    </div>
    <!--END SECTION -->

@endsection