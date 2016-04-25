@extends('layouts.front')

@section('content')
<div class="pricingbox shared">
  <div class="row">
    <div class="col-sm-12">
      <span class="chooseprice">Choose price per period</span>
      <div class="price-per-period">
        <button type="button" class="btn btn-shared-checked ripple permonth">Monthly</button>
        <button type="button" class="btn btn-default ripple peryear">Semi-Annually</button>
        <button type="button" class="btn btn-default ripple per2yrs">Annually</button>
      </div>
    </div>
  </div>

  <div class="row spacing-75">
    @foreach ($hosting as $host)
    <div class="col-sm-3">
      <div class="pricing-plan red">
        <div class="pricing-title">{{ $host->name }}</div>
          <div class="pricing-price">
            <div class="monthprice">{{ $host->monthly }}<span>/m</span></div>
            <div class="yearprice">{{ $host->semi_annually }}<span>/6m</span></div>
            <div class="twoyearprice">{{ $host->annually }}<span>/y</span></div>
          </div>
        <div class="pricing-features">
          <ul>
            <li>{{ $host->space }} Disk Space</li>
            <li>{{ $host->bandwith }} Bandwith</li>
            <li>{{ $host->addon_domain }} Addon Domain</li>
            <li>{{ $host->email_hosting }} Email</li>
            <li>{{ $host->railgun }} Railgun</li>
            <li>{{ $host->backup }} Backups</li>
          </ul>
        </div>
        <div class="text-center"><a class="mtr-btn button-raised ripple" href="$host->link">ORDER NOW</a></div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>
<!-- END OF PRICE BOXES -->

<!-- COMPARISON TABLE -->
<div class="shared-table">
  <button class="mtr-btn button-circle button-purple ripple" id="show-comparison-table">+</button>
  <p class="text-center">COMPARE PLANS</p>

  <div class="row spacing-25">
    <div class="col-sm-12">
      <table class="products-table responsive tablesaw tablesaw-stack" >
        <thead>
          <tr>
            <th></th>
            <th>Pelajar</th>
            <th>Personal</th>
            <th>Extra</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Webmail</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>POP3, IMAP, SMTP</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
           <tr>
            <td>Webmail</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>Email Fowarding</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>Anti-Spam</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
           <tr>
            <td>Modifikasi MX</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>

          <tr>
            <td>Unlimited FTP Accounts</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>

          <tr>
            <td>Free CDN</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>

          <tr>
            <td>Unlimited Parked Domains</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>Unlimited Sub Domains</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>PHP5 & CGI</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>MySQL5</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>PHPMyAdmin</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>Softaculous</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>Site Builder</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>Disk Usage Stats</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
          
          <tr>
            <td>Bandwidth Usage Stats</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>

          <tr>
            <td>24x7 Support</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="difference">
    <div class="row spacing-25">
      <div class="col-md-9 col-sm-12 center-block">
        <h3 class="text-center">KEY FEATURES OF <font color="red">MAKASSARNETWORK</font></h3>
        <div class="newplans_box"></div>
        <p class="text-center"><img src="{{ asset('asset/images/framework.png') }}"></p>
      </div>
    </div>
  </div>

  <div class="row spacing-25">
    <div class="col-md-9 col-sm-12 center-block">
      <div class="block-grid-sm-3 block-grid-xs-1 fully-managed">
        <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="100ms">
          <img src="{{ asset('asset/images/icon7.png') }}" alt="" />
          <h5>99.9% Server Uptime Guarantee</h5>
          <p></p>
        </div>

      <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="150ms">
        <img src="{{ asset('asset/images/icon8.png') }}" alt="" />
        <h5>15 Day Money Back <br>Guarantee</h5>
        <p></p>
      </div>

      <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="200ms">
        <img src="{{ asset('asset/images/icon9.png') }}" alt="" />
        <h5>CloudLinux Operating <br>System</h5>
        <p></p>
      </div>

      <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="250ms">
        <img src="{{ asset('asset/images/icon10.png') }}" alt="" />
        <h5>SPAM PROTECTION</h5>
        <p></p>
      </div>

      <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
        <img src="{{ asset('asset/images/icon11.png') }}" alt="" />
        <h5>FTP ACCESS</h5>
        <p></p>
      </div>

      <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="350ms">
      <img src="{{ asset('asset/images/icon12.png') }}" alt="" />
      <h5>PREMIUM BANDWIDTH</h5>
      <p></p>
    </div>
       
    <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="350ms">
      <img src="{{ asset('asset/images/icon21.png') }}" alt="" />
      <h5>Cloudflare CDN</h5>
      <p></p>
    </div>
        
    <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="350ms">
      <img src="{{ asset('asset/images/icon22.png') }}" alt="" />
      <h5>LiteSpeed Web Server</h5>
      <p></p>
    </div>
        
    <div class="block-grid-item wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="350ms">
      <img src="{{ asset('asset/images/icon23.png') }}" alt="" />
      <h5>MariaDB Database Server</h5>
      <p></p>
    </div>
  </div>
</div>
</div>
</div>
<!-- END OF COMPARISON TABLE -->
@endsection

@section('plugins')
<script>
  (function($) {
    "use strict";
    window.odometerOptions = {
      format: 'd'
    };

    $(window).load(function() {
       // ______________ COMPARISON TABLE SHOW/HIDE
       $('#show-comparison-table').click(function() {
        $('.products-table').toggle("slow");
      });

     // ______________  PRICE SWITCH
     $(".price-per-period .permonth").click(function() {
      $(".monthprice").fadeIn(500);
      $(".yearprice").hide();
      $(".twoyearprice").hide();
      $(".price-per-period .permonth").addClass("btn-shared-checked");
      $(".price-per-period .permonth").removeClass("btn-default");
      $(".price-per-period .peryear").removeClass("btn-shared-checked");
      $(".price-per-period .peryear").addClass("btn-default");
      $(".price-per-period .per2yrs").removeClass("btn-shared-checked");
      $(".price-per-period .per2yrs").addClass("btn-default");
    });

     $(".price-per-period .peryear").click(function() {
      $(".monthprice").hide();
      $(".yearprice").fadeIn(500);
      $(".twoyearprice").hide();
      $(".price-per-period .permonth").removeClass("btn-shared-checked");
      $(".price-per-period .permonth").addClass("btn-default");
      $(".price-per-period .peryear").addClass("btn-shared-checked");
      $(".price-per-period .peryear").removeClass("btn-default");
      $(".price-per-period .per2yrs").removeClass("btn-shared-checked");
      $(".price-per-period .per2yrs").addClass("btn-default");
    });

     $(".price-per-period .per2yrs").click(function() {
      $(".monthprice").hide();
      $(".yearprice").hide();
      $(".twoyearprice").fadeIn(500);
      $(".price-per-period .permonth").removeClass("btn-shared-checked");
      $(".price-per-period .permonth").addClass("btn-default");
      $(".price-per-period .peryear").addClass("btn-default");
      $(".price-per-period .peryear").removeClass("btn-shared-checked");
      $(".price-per-period .per2yrs").removeClass("btn-default");
      $(".price-per-period .per2yrs").addClass("btn-shared-checked");
    });

   });

jQuery(document).ready(function() {

  $('.odometer').waypoint(function() {
   setTimeout(function(){
    $('#odometer1.odometer').html(510);
  }, 500);
   setTimeout(function(){
    $('#odometer2.odometer').html(81825);
  }, 1000);
   setTimeout(function(){
    $('#odometer3.odometer').html(920);
  }, 1500);
   setTimeout(function(){
    $('#odometer4.odometer').html(8000);
  }, 2000);
   setTimeout(function(){
    $('#odometer5.odometer').html(5001);
  }, 2500);
   setTimeout(function(){
    $('#odometer6.odometer').html(392);
  }, 3000);
 }, { offset: 800, triggerOnce: true });
});


})(jQuery);
</script>
@endsection