@extends('layouts.front')

@section('content')
<!-- DOMAIN SEARCH -->
<div class="domainavailability">
  <div class="row">
    <div class="col-sm-12 col-md-9 center-block">
      <h1 class="text-center">SEMUANYA DIMULAI DARI DOMAIN KEREN</h1>
      <div class="domain-form-container">
        <form action="https://makassarnetwork.com/member/domainchecker.php" method="post" class="material">
          <div class="row">
            <input type="hidden" name="direct" value="true" />
            <div class="col-sm-9">
              <input type="text" name="domain" placeholder="Domain Search">
            </div>
            <div class="col-sm-2">
              @if ($slug == 'indonesia')
              <select name="ext" data-placeholder="Extension">
                <option value=".co.id">.co.id</option>
                <option value=".ac.id">.ac.id</option>
                <option value=".sch.id">.sch.id</option>
                <option value=".or.id">.or.id</option>
                <option value=".web.id">.web.id</option>
                <option value=".my.id">.my.id</option>
                <option value=".desa.id">.desa.id</option>
                <option value=".id">.id</option>
              </select>
              @elseif ($slug == 'internasional')
              <select name="ext" data-placeholder="Extension">
                <option value=".com">.com</option>
                <option value=".net">.net</option>
                <option value=".org">.org</option>
                <option value=".info">.info</option>
                <option value=".biz">.biz</option>
                <option value=".us">.us</option>
                <option value=".name">.name</option>
                <option value=".asia">.asia</option>
                <option value=".tv">.tv</option>
                <option value=".in">.in</option>
              </select>
              @endif
            </div>
            <div class="col-sm-1">
              <button class="mtr-btn button-fab" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END OF DOMAIN SEARCH -->

<!-- DOMAIN TLDS -->
<!--
<div class="domaintlds">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">PROMO DOMAIN INDONESIA</h2>
      <div class="titleborder centered">
        <div class="titleborder_left"></div>
        <div class="titleborder_sign"></div>
        <div class="titleborder_right"></div>
      </div>
      <p class="text-center subtitle"></p>
      <div class="block-grid-sm-4 block-grid-xs-1 domain-tlds-grid">
        <div class="block-grid-item wow zoomIn" data-wow-duration="500ms" data-wow-delay="100ms">
          <div class="tld">
            <img src="" alt="" />
            <div class="tldprice">Hanya  per Tahun</div>
          </div>
        </div>
      </div>
    </div>
</div> -->
<!-- END OF DOMAIN TLDS -->

<!-- DOMAIN PRICES -->
<div class="domain-prices">
  <div class="row">
    <div class="col-sm-12">
      <div class="domains-table">
        <div class="row">
          <div class="col-sm-12">
            <table id="tld-table" class="responsive tablesaw tablesaw-stack wow fadeInUp" data-mode="stack" data-wow-duration="1000ms" data-wow-delay="250ms" >
              <thead>
                <tr>
                  <th>TLD</th>
                  <th>REGISTRATION</th>
                  <th>RENEWAL</th>
                  <th>TRANSFER</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($domain as $dom)
                <tr>
                  <td>.{{ $dom->name }}</td>
                  <td>Rp {{ $dom->registration }}</td>
                  <td>Rp {{ $dom->renewal }}</td>
                  <td>Rp {{ $dom->transfer }}</td>
                  <td><a class="mtr-btn button-raised ripple" href="https://makassarnetwork.info/member/domainchecker.php">ORDER NOW</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF DOMAIN PRICES -->

<!-- DOMAIN FEATURES -->
<div class="domain-features">
  <div class="row">
    <div class="col-sm-6">
      <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="200ms">
        <div class="col-sm-3 col-md-2"><img src="{{ asset('asset/images/icon13.png') }}" alt=""/></div>
        <div class="col-sm-9 col-md-10">
          <h5><b>Tips</b> Membeli Domain</h5>
          <p><ul>
              <li>Domain Yang Singkat & Mudah Di Ingat</li>
              <li>Pilih domain yang mewakili brand / product anda</li>
              <li>Pilih domain yang unik</li>
              <li>Perhatikan ekstensi domain sesuai dengan kebutuhan anda</li>
              <li>Lihat <a href="persyaratan-domain-indonesia.php" >Persyaratan Domain Indonesia</a></li>
          </ul></p>
        </div>
      </div>
      <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="250ms">
        <div class="col-sm-3 col-md-2"><img src="{{ asset('asset/images/icon14.png') }}" alt=""/></div>
        <div class="col-sm-9 col-md-10"><h5>Free e-mail account</h5>
          <p>Get email account with your domain ekstension.</p></div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
          <div class="col-sm-3 col-md-2"><img src="{{ asset('asset/images/icon15.png') }}" alt=""/></div>
          <div class="col-sm-9 col-md-10">
            <h5>Free DNS management</h5>
            <p>External DNS Hosting can help speed up your website and improve availability with reduced redundancy.</p></div>
          </div>
          <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="350ms">
            <div class="col-sm-3 col-md-2"><img src="{{ asset('asset/images/icon16.png') }}" alt=""/></div>
            <div class="col-sm-9 col-md-10">
              <h5>Free Email forwarding</h5>
              <p>Get emails forwarded to alternate email addresses of your choice so that you can monitor all from a single account.</p></div>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- END OF DOMAIN FEATURES -->

@endsection