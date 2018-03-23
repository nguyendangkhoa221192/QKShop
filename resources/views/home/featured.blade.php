<!-- TOVAR SECTION -->
<section class="tovar_section">

  <!-- CONTAINER -->
  <div class="container">
    <h2>Featured products</h2>
    
    <!-- ROW -->
    <div class="row">

      <!-- TOVAR WRAPPER -->
      <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>

        @foreach ($featureds as $item)
        @php
        $image = explode(";", $item->image_url);
        @endphp
        <!-- TOVAR1 -->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
          <div class="tovar_item">
            <div class="tovar_img">
              <div class="tovar_img_wrapper">
                <img class="img" src="{{ $image[0] or ""}}" alt="" />
                <img class="img_h" src="{{ $image[1] or "" }}" alt="" />
              </div>
              <div class="tovar_item_btns">
                <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/1.html" >quick view</a></div>

                <a class="add_bag btn-add-to-bags" data-id="{{ $item->id }}" href="javascript:void(0);" data-_token="{{ csrf_token() }}" ><i class="fa fa-shopping-cart"></i></a>

                <a class="add_lovelist btn-add-to-lovelist" data-id="{{ $item->id }}" href="javascript:void(0);" data-_token="{{ csrf_token() }}" ><i class="fa fa-heart"></i></a>
              </div>
            </div>
            <div class="tovar_description clearfix">
              <a class="tovar_title" href="product-page.html" >{{ $item->product_name or ""}}</a>
              <span class="tovar_price">${{ $item->product_price or "" }}</span>
            </div>
          </div>
        </div><!-- //TOVAR1 -->
        @endforeach

        <div class="respond_clear_768"></div>

      </div><!-- //TOVAR WRAPPER -->
    </div><!-- //ROW -->


    <!-- ROW -->
    <div class="row">

      <!-- BANNER WRAPPER -->
      <div class="banner_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
        <!-- BANNER -->
        <div class="col-lg-9 col-md-9">
          <a class="banner type4 margbot40" href="javascript:void(0);" ><img src="images/tovar/banner4.jpg" alt="" /></a>
        </div><!-- //BANNER -->

        <!-- BANNER -->
        <div class="col-lg-3 col-md-3">
          <a class="banner nobord margbot40" href="javascript:void(0);" ><img src="images/tovar/banner5.jpg" alt="" /></a>
        </div><!-- //BANNER -->
      </div><!-- //BANNER WRAPPER -->
    </div><!-- //ROW -->
  </div><!-- //CONTAINER -->
</section><!-- //TOVAR SECTION -->
