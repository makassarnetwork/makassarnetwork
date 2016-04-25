@extends('layouts.front')

@section('content')
<!-- SUBHEADER -->
<div id="subheader" class="blog">
	<div class="subheader-text">
    	<h1>PERSYARATAN DOMAIN INDONESIA</h1>
    	<h2>POSTED BY <a href="http://facebook.com/makassarnetwork">MAKASSARNETWORK</a> ON {{ Carbon\Carbon::now() }}</h2>
  	</div>
  	<a href="#" rel="shared-popover" data-popover-content="#shared-btn-Popover" title="Share" data-placement="bottom" class="mtr-btn button-circle button-fab ripple"><i class="fa fa-share-alt"></i></a>
</div>
<!-- END OF SUBHEADER -->

<!-- Share buttons hidden popover -->
<div id="shared-btn-Popover" class="hide">
  	<ul class="blog-share-buttons">
    	<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
    	<li><a href="http://facebook.com/makassarnetwork" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    	<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
  	</ul>
</div>
<!-- End of Share buttons hidden popover -->

<!-- Blog -->
<div class="blog single">
  	<div class="row">
    	<div class="col-sm-8">

      	<!-- Blog Post-->
      	<article>
        	<!--<img src="images/blog1.jpg" alt="" />-->
        	<div class="post-content">
         		<p>Berikut adalah daftar dokumen yang perlu dilengkapi sebagai syarat pendaftaran nama domain Indonesia. Silahkan lampirkan scan / copy dokumen yang dibutuhkan dengan lengkap ke:</p>

         		<blockquote>
             	<p>Email : admin@makassarnetwork.info <br>
                 Subjek Email: Persyaratan Nama Domain Indonesia - Nama_Domain - No_Tagihan<br>
                 Lampiran Email: File berformat .JPG, .JPEG, atau .PNG. Setiap file berukuran maksimal 1000kb</p>
        		</blockquote>

        		<p>Harap diingat bahwa proses verifikasi dokumen dan aktivasi domain membutuhkan waktu hingga 1-3 hari kerja. Semua kebijakan disetujui atau tidaknya pendaftaran domain Indonesia sepenuhnya di tangan pihak registrar yang ditunjuk PANDI (Pengelola Nama Domain Internet Indonesia). Dalam hal ini kami bertindak sebagai layanan bantuan pendaftaran domain Indonesia, apabila domain tidak disetujui oleh pihak registrar maka kami akan melakukan refund pembayaran sesuai dengan prosedur dalam sistem billing kami.</p>

        		<div class="shared-table">
 					<button class="mtr-btn button-circle button-purple ripple" id="show-comparison-table">+</button>
 					<p class="text-center">SHOW / HIDE</p>

  					<div class="row spacing-25">
  						<div class="col-sm-12">
    						<table class="products-table responsive tablesaw tablesaw-stack" >
      							<thead>
        							<tr>
          								<th>Domain Ekstension</th>
          								<th colspan="3" align="center">Persyaratan</th>
                    
        							</tr>
      							</thead>
      							<tbody>
        							<tr>
          								<td>.Id</td>
          								<td colspan="3" >
          									<ul>
                  								<li>Persyaratan domain apapun.ID untuk perusahaan:
                      							(lihat persyaratan domain .co.id)</li>
                  								<li>Persyaratan domain apapun.ID untuk personal:<br>
                      								1. KTP<br>
                  									2. Nama domain personal harus sesuai dengan nama pada KTP</li>
                  								<li>Persyaratan domain apapun.ID untuk sekolah:
                      							(lihat persyaratan domain .sch.id)</li>
                  								<li>Persyaratan domain apapun.ID untuk organisasi:
                      							(lihat persyaratan domain .or.id)</li>
                  								<li>Persyaratan domain apapun.ID untuk universitas:
                      							(lihat persyaratan domain .ac.id) </li>
              								</ul>
              							</td>
        							</tr>
        							<tr>
          								<td>.Ac.id</td>
          								<td colspan="3">
          									<ul>
												<li>Scan KTP Penanggung Jawab</li>
												<li>Scan SK Depdiknas Pendirian Lembaga</li>
												<li>Scan Akta Notaris Pendirian / SK Rektor (Pimpinan Lembaga)</li>
												<li>Scan Surat Kuasa Pimpinan Lembaga kepada penanggung jawab untuk pendaftaran nama domain </li>
              								</ul>
              							</td>
              						</tr>
              						<tr>
										<td>.Sch.id</td>
										<td colspan="3">
											<ul>
												<li>Scan KTP Penanggung Jawab</li>
												<li>Scan Surat Permohonan Kepala Sekolah</li>
												<li>Scan Surat Kuasa Kepala Sekolah kepada penanggung jawab untuk pendaftaran nama domain </li>
											</ul>
										</td>
        							</tr>
        							<tr>
							          	<td>.Co.id</td>
							          	<td colspan="3">
							          		<ul>
												<li>Scan KTP Penanggung Jawab</li>
												<li>Scan SIUP/TDP atau Akta Notaris (cover halaman 1 dan NPWP)</li>
												<li>Scan Surat Kepemilikan Merk (bila ada) </li>
							                  
							              	</ul>
							            </td>
        							</tr>
        							<tr>
							          	<td>.Web.id</td>
							          	<td colspan="3">
							          		<ul>
							                  	<li>Scan KTP Penanggung Jawab</li>
							                </ul>
							            </td>
							        </tr>
							        <tr>
							          	<td>.Or.id</td>
							          	<td colspan="3">
							          		<ul>
												<li>Scan KTP Pimpinan Lembaga</li>
												<li>Scan Akta Notaris atau SK Intern Organisasi </li>
							              	</ul>
							            </td>
							        </tr>
							        <tr>
							          	<td>.My.id</td>
							          	<td colspan="3">
							          		<ul>
							                  <li>Scan KTP Penanggung Jawab</li>
							                </ul>
							            </td>
							        </tr>
							        <tr>
							          	<td>.Biz.id</td>
							          	<td colspan="3">
							          		<ul>
												<li>Scan KTP Penanggung Jawab</li>
												<li>Scan NPWP Pribadi </li>
							              	</ul>
							            </td>
          							</tr>
          						</tbody>
          					</table>
          				</div>
					</div>
				</div>
    	</article>
    	<!-- End of Blog Post-->
	</div>
	<div class="col-sm-4">
    	<div class="sidebar">
    		<div class="widget">
        		<h3 class="badge">CONTACT US</h3>
        		<ul>
		          	<li>Email : admin@makassarnetwork.com / makassarnetwork06@gmail.com</li>
		          	<li>PINBB : 5A567B10</li>
		          	<li>Line : <a href="http://line.me/ti/p/%40obq9226b"> makassarnetwork</a></li>
		          	<li>Whatsapp : 085343966997</li>
          		</ul>
      		</div>
      		<div class="widget">
        		<h3 class="badge">TAGS</h3>
        		<div class="tagcloud">
					<a href ="">Webhosting</a>
					<a href ="">Web</a>
					<a href ="">Managed hosting</a>
					<a href ="">Forum</a>
					<a href ="">Web hosting news</a>
					<a href ="">Host</a>
					<a href ="">Online</a>
					<a href ="">Root</a>
					<a href ="">Server</a>
					<a href ="">SSD</a>
					<a href ="">Setup free</a>
					<a href ="">Free Domain</a>
					<a href ="">Marketing</a>
					<a href ="">Promotion</a>
					<a href ="">Custom service</a>
					<a href ="">Domain Murah</a>
        		</div>
      		</div>
		</div>
	</div>
</div>
</div>
@endsection