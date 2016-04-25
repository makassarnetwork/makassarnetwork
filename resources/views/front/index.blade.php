@extends('layouts.front')

@section('content')
<!-- HEADER BACKGROUND IMAGE -->
<div id="mainimage-two">
  <!-- PRICE BOXES -->
  <div class="row no-gutter">
    <div class="col-sm-4 part-one">
      <div class="top-column-content">
        <h2>SHARED HOSTING</h2>
        <div class="arrow_box"></div>
        <div class="pricing-price">
          <div class="starting">STARTING AT</div>Rp. 2.000<span>/m</span>
          <div class="subtitle">SHARED FULL FEATURES</div>
          <div class="spacing-25"></div>
          <div class="progressbars">
            <p>Storage</p>
            <div class="progress red"><span class="meter" style="width:30%"></span></div>
          </div>

          <div class="progressbars">
            <p>Bandwith</p>
            <div class="progress red"><span class="meter" style="width:100%"></span></div>
          </div>

          <div class="progressbars">
            <p>FTP & Email</p>
            <div class="progress red"><span class="meter" style="width:90%"></span></div>
          </div>

          <div class="text-center"><a class="mtr-btn button-fab ripple" href="https://makassarnetwork.info/member/cart.php">ORDER NOW</a></div>
        </div>
      </div>
    </div>

    <div class="col-sm-4 part-two">
      <div class="top-column-content">
        <h2>CLOUD VPS</h2>
        <div class="arrow_box"></div>
        <div class="pricing-price">
          <div class="starting">STARTING AT</div>Rp. 32.000<span>/m</span>
          <div class="subtitle">TO MEET EVERY DEMAND</div>
          <div class="spacing-25"></div>

          <div class="progressbars">
            <p>CPU</p>
            <div class="progress purple"><span class="meter" style="width:60%"></span></div>
          </div>

          <div class="progressbars">
            <p>RAM</p>
            <div class="progress purple"><span class="meter" style="width:50%"></span></div>
          </div>

          <div class="progressbars">
            <p>SSD</p>
            <div class="progress purple"><span class="meter" style="width:70%"></span></div>
          </div>
          <div class="text-center"><a class="mtr-btn button-purple ripple" href="vps-sgdo.php">DEPLOY NOW</a></div>
        </div>
      </div>
    </div>

    <div class="col-sm-4 part-three">
      <div class="top-column-content">
        <h2>Domain Internasional & Indonesia</h2>
        <div class="arrow_box"></div>
        <div class="pricing-price">
          <div class="starting">STARTING AT</div>Rp. 21.000<span>/y</span>
          <div class="subtitle">CHEAP DOMAINS</div>
          <div class="spacing-25"></div>

          <div class="progressbars">
            <p>CPU</p>
            <div class="progress blue"><span class="meter" style="width:90%"></span></div>
          </div>

          <div class="progressbars">
            <p>RAM</p>
            <div class="progress blue"><span class="meter" style="width:95%"></span></div>
          </div>

          <div class="progressbars">
            <p>SSD</p>
            <div class="progress blue"><span class="meter" style="width:90%"></span></div>
          </div>
          <div class="text-center"><a class="mtr-btn button-navy ripple" href="https://makassarnetwork.info/member/domainchecker.php">CHOOSE DOMAIN</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF PRICE BOXES -->
</div>
<!-- END OF HEADER BACKGROUND IMAGE -->

<!-- DOMAIN NAME SEARCH BOX -->
<div class="domainsearch">
  <div class="row">
    <div class="col-sm-12">
      <h3 class="text-center">START BY REGISTERING YOUR DOMAIN NAME</h3>
      <button class="mtr-btn button-circle button-fab ripple" id="showdomainsearch">+</button>
    </div>
  </div>
</div>

<div class="domainform">
  <div class="row">
    <div class="col-sm-12">
     <form action="https://makassarnetwork.com/member/domainchecker.php" method="post" class="material">
       <div class="row">
        <input type="hidden" name="direct" value="true" />
        <div class="col-sm-9">
          <input type="text" name="domain" placeholder="Domain Search">
        </div>
        <div class="col-sm-2">
          <select name="ext" data-placeholder="Extension">
            <option>.com</option>
            <option>.net</option>
            <option>.org</option>
            <option>.info</option>
            <option>.biz</option>
            <option>.us</option>
            <option>.name</option>
            <option>.asia</option>
            <option>.tv</option>
            <option>.in</option>
            <option>.co.id</option>
            <option>.ac.id</option>
            <option>.sch.id</option>
            <option>.web.id</option>
            <option>.my.id</option>
            <option>.id</option>
            <option>.or.id</option>
          </select>
        </div>
        <div class="col-sm-1">
          <button class="mtr-btn button-fab" type="submit"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<!-- END OF DOMAIN NAME SEARCH BOX -->

<!-- FEATURES -->
<div class="features text-center">
<div class="spacing-50"></div>
  <div class="row">
    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="circle"><i class="fa fa-rocket"></i></div>
      <h4>Quick & Super Fast</h4>
      <p>Using raid 10 configuration for all cPanel server to give you better performance, and supported by railgun cloudflare for fastest cache.</p>
    </div>

    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="circle"><i class="fa fa-gratipay"></i></div>
      <h4>Secure & Reliable</h4>
      <p>All cPanel Server using Cloud Linux Operating System to protect your account, use Config Exploit Scanner to protect your account from backdoor.</p>
    </div>

    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
      <div class="circle"><i class="fa fa-gg"></i></div>
      <h4>Customer Support</h4>
      <p>Get fast respon support from our team for your valuable time. Our customer support team will give you best support you for all your needs.</p>
    </div>

  </div>
</div>
<!-- END OF FEATURES -->

<!-- CALLOUT TEXT / BUTTON -->
<div class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
  <div class="row">
    <div class="col-sm-12">
        <h2 class="text-center"><img src="{{ asset('asset/images/framework.png') }}"></h2>
    </div>
  </div>
</div>
<!-- END OF CALLOUT TEXT / BUTTON -->


<!-- FEATURES -->
<div class="various">
  <div class="row">

    <!-- WHY US -->
    <div class="col-sm-3">
      <div class="why wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
        <h2>Standard Features</h2>
        <div class="titleborder pink">
          <div class="titleborder_left"></div>
          <div class="titleborder_sign"></div>
        </div>
        <h5><img src="{{ asset('asset/images/fitur/secure.png') }}"> Web Security</h5>
        <p>Menjaga keamanan website.</p>
        <h5><img src="{{ asset('asset/images/fitur/bandwith.png') }}"> Bandwith</h5>
        <p>Akses Internet Tanpa Batas.</p>
        <h5><img src="{{ asset('asset/images/fitur/mysql.png') }}"> MySQL Databases</h5>
        <p>Jumlah Database MySQL tak terbatas.</p>
        <h5><img src="{{ asset('asset/images/fitur/builder.png') }}"> Web Builder</h5>
        <p>Mendukung Wordpress, PHPbb, etc.</p>
      </div>
    </div>
    
    <div class="col-sm-3">
      <div class="why wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
        <h2>&nbsp;</h2>
        <div class="titleborder pink">
          <div class="titleborder_left"></div>
          <div class="titleborder_sign"></div>
        </div>
        <h5><img src="{{ asset('asset/images/fitur/cpanel.png') }}"> cPanel Access</h5>
        <p>Theme terbaru dan mudah di gunakan.</p>
        <h5><img src="{{ asset('asset/images/fitur/dedicate.png') }}"> Dedicated Servers</h5>
        <p>Server berdiri sendiri.</p>
        <h5><img src="{{ asset('asset/images/fitur/support.png') }}"> Live Support</h5>
        <p>Selalu siap untuk melayani.</p>
        <h5><img src="{{ asset('asset/images/fitur/ftp.png') }}"> SSH Access</h5>
        <p>Akses ke terminal.</p>
      </div>
    </div>
    <!-- END OF WHY US -->

    <div class="col-sm-6">
      <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="200ms">
        <div class="col-sm-3 col-md-2"><i ><img src="{{ asset('asset/images/fitur/transfer.png') }}" width="50px" height="50px"></i></div>
        <div class="col-sm-9 col-md-10"><h5>REKENING BANK</h5>
          <p><img src="{{ asset('asset/images/fitur/bri.png') }}" width="50px" height="50px"> BRI : <b>5079 01 02 5652 53 9</b> a.n Anugrah Sandi.</p></div>
        </div>
        <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
          <div class="col-sm-3 col-md-2"><i ><img src="{{ asset('asset/images/fitur/contact.png') }}" width="50px" height="50px"></i></div>
          <div class="col-sm-9 col-md-10"><h5>HUBUNGI KAMI</h5>
            <p><img src="{{ asset('asset/images/fitur/bbm.png') }}" width="25px" height="25px"> : 5A567B10</p>
            <p><img src="{{ asset('asset/images/fitur/whatsapp.png') }}" width="25px" height="25px"> : 085343966997</p>
            <p><img src="{{ asset('asset/images/fitur/line.png') }}" width="25px" height="25px"> : <a href="http://line.me/ti/p/%40obq9226b" target="_blank">makassarnetwork</a></p>
          </div>
        </div>
        <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
          <div class="col-sm-3 col-md-2"><i><img src="{{ asset('asset/images/fitur/facebook.png') }}" width="50px" height="50px"></i></div>
          <div class="col-sm-9 col-md-10"><h5>TEMUKAN KAMI DI FACEBOOK</h5>
            <p><div class="fb-page" data-href="https://www.facebook.com/makassarnetwork" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/makassarnetwork"><a href="https://www.facebook.com/makassarnetwork">MakassarNetwork</a></blockquote></div></div></p>
          </div>
        </div>    
      </div>
    </div>
  </div>
  <!-- END OF FEATURES -->

<!-- PARTNERS -->
<div class="partners">
  <div class="row">
    <div class="col-sm-12">
      <div id="company-partners">
        <div class="item"><img src="{{ asset('asset/images/logos/1.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/2.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/3.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/4.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/5.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/6.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/7.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/8.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/9.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/1.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/2.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/3.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/4.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/5.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/6.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/7.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/8.png') }}" alt=""></div>
        <div class="item"><img src="{{ asset('asset/images/logos/9.png') }}" alt=""></div>
      </div>
    </div>
  </div>
</div>
<!-- END OF PARTNERS -->
@endsection