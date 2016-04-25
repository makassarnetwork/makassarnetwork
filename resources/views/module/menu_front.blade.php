<div class="header">
  <div class="row">
    <div class="col-sm-3">
      <div class="logo">
        <a href="{{ url('/') }}"><img src="{{ asset('asset/images/logo.png') }}" alt="MakassarNetwork" />
        </a>
      </div>
    </div>
    <div class="col-sm-9">
      <nav id="desktop-menu">
        <ul class="sf-menu" id="navigation">
          <li ><a href="{{ url('/') }}">Home</a></li>
          <li><a href="#">Product</a>
            <ul>
              <li><a href="#">Domains</a>
                <ul>
                  <li><a href="{{ url('domain/indonesia') }}">Indonesia</a></li>
                  <li><a href="{{ url('domain/internasional') }}">Internasional</a></li>
                  <li><a href="{{ url('domain/persyaratan-domain-id') }}">Persyaratan Domain Indonesia</a></li>
                </ul>
              </li>
              <li><a href="#">Shared Hosting IIX</a>
                <ul>
                  <li><a href="{{ url('host/pelajar') }}">Pelajar Hosting</a></li>
                  <li><a href="{{ url('host/personal') }}">Personal Hosting</a></li>
                  <li><a href="{{ url('host/extra') }}">Corporate Hosting</a></li>
                </ul>
              </li>
              <!--
              <li><a href="#">VPS</a>
                <ul>                
                  <li><a href="vps-sgdo.php">VPS SGDO</a></li>
                  <li><a href="#">VPS SGGS</a></li>
                </ul>
              </li>-->
              <li></li>
            </ul>
          </li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portofolio</a></li>
          <li><a href="https://makassarnetwork.info/member/contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>