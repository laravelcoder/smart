  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline font-13 sm-text-center mt-5">
                <li> <a class="text-white" href="#">FAQ</a> </li>
                <li class="text-white">|</li>
                <li> <a class="text-white" href="#">Help Desk</a> </li>
                {{-- <li class="text-white">|</li> --}}
                {{-- <li> <a class="text-white" href="#">Login</a> </li> --}}
                {{-- <li class="text-white">|</li> --}}
{{--                 <li class="text-white">
                @if($WebmasterSettings->languages_count == 2)
                        &nbsp; | &nbsp;
                        <strong>
                            @if(App::getLocale()=="ar")
                                <a class="text-white" href="{{ URL::to('lang/en') }}"><i class="fa fa-language "></i> English</a>
                            @else
                                <a class="text-white" href="{{ URL::to('lang/ar') }}"><i class="fa fa-language "></i> العــربيــة</a>
                            @endif

                        </strong>
                    @endif
                </li> --}}
                <li class="text-white">|</li>

                <li class="text-white"><a class="text-white" href="{{ route("adminHome") }}"><i class="fa fa-cog"></i> {{trans('frontLang.dashboard')}}</a></li>


              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget m-0 pull-right sm-pull-none sm-text-center">
              <ul class="list-inline pull-right">
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i class="fa fa-shopping-cart font-13"></i> (12)</a>
                    <ul class="dropdown">
                      <li>
                        <!-- dropdown cart -->
                        <div class="dropdown-cart">
                          <table class="table cart-table-list table-responsive">
                            <tbody>
                              <tr>
                                <td><a href="#"><img alt="" src="https://placehold.it/85x85"></a></td>
                                <td><a href="#"> Product Title</a></td>
                                <td>X3</td>
                                <td>$ 100.00</td>
                                <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                              </tr>
                              <tr>
                                <td><a href="#"><img alt="" src="https://placehold.it/85x85"></a></td>
                                <td><a href="#"> Product Title</a></td>
                                <td>X2</td>
                                <td>$ 70.00</td>
                                <td><a class="close" href="#"><i class="fa fa-close font-13"></i></a></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="total-cart text-right">
                            <table class="table table-responsive">
                              <tbody>
                                <tr>
                                  <td>Cart Subtotal</td>
                                  <td>$170.00</td>
                                </tr>
                                <tr>
                                  <td>Shipping and Handling</td>
                                  <td>$20.00</td>
                                </tr>
                                <tr>
                                  <td>Order Total</td>
                                  <td>$190.00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="cart-btn text-right">
                              <a class="btn btn-theme-colored btn-xs" href="shop-cart.html"> View cart</a>
                              <a class="btn btn-dark btn-xs" href="shop-checkout.html"> Checkout</a>
                          </div>
                        </div>
                        <!-- dropdown cart ends -->
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                    <ul class="dropdown">
                      <li>
                        <div class="search-form-wrapper">
                          <form method="get" class="mt-10">
                            <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                            <label><input type="submit" name="submit" value=""></label>
                          </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-6">
            <div class="widget no-border m-0">
                <a class="menuzord-brand pull-left flip xs-pull-center mt-10 mb-10 " href="{{ route("Home") }}">
                    @if(Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode')) !="")
                        <img alt="logo" src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode'))) }}">
                    @else
                        <img alt="logo" src="images/logo-wide.png">
                    @endif

                </a>

        {{--       <a href="index-mp-layout1.html" class="menuzord-brand pull-left flip xs-pull-center mt-10 mb-10">
                <img alt="" src="images/logo-wide.png">
              </a> --}}
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-15 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600">
                <i class="fa fa-envelope text-theme-colored font-18"></i> Mail Us Today
                </div>
                {{-- <a href="#" class="font-12 text-gray"> info@yourdomain.com</a> --}}
                  @if(Helper::GeneralSiteSettings("contact_t6") !="")
                       <a class="font-12 text-gray" href="mailto:{{ Helper::GeneralSiteSettings("contact_t6") }}">Send @Email</a>
                  @endif
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-15 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-map-marker text-theme-colored font-18"></i> Company Location</div>
                <a href="#" class="font-12 text-gray">Grater Salt Lake Area, Utah</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-15 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600">
                {{-- <i class="fa fa-phone-square text-theme-colored font-18"></i> +(012) 345 6789 --}}
                    @if(Helper::GeneralSiteSettings("contact_t3") !="")
                        <i class="fa fa-phone-square text-theme-colored font-18"></i> &nbsp;<a href="call:{{ Helper::GeneralSiteSettings("contact_t5") }}"><span dir="ltr">{!! Helper::GeneralSiteSettings("contact_t5") !!}</span></a>
                    @endif
                </div>
                <a href="#" class="font-12 text-gray"> Call us for more details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
    @include('frontEnd.includes.menu')
         </nav>
        </div>
      </div>
    </div>
  </header>
