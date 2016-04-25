@extends('layouts.front')

@section('content')
<!-- FAQ TABS -->
<div class="faq-tabs">
  <div class="row">
    <div class="col-sm-12">
     <div class="faq-categories">
      <ul>
        <li class="active"><a href="#privacypolicy" data-toggle="tab">PRIVACY POLICY <span class="badge">5</span></a></li>
        <li><a href="#sla" data-toggle="tab">SERVICE LEVEL AGREEMENT<span class="badge">3</span></a></li>
        <li><a href="#tos" data-toggle="tab">TERM OF SERVICE <span class="badge">10</span></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

<div class="faq-tabs-white">
  <div class="row">
    <div class="col-sm-12">
      <!-- TABS -->
      <div class="tabbable tabs-top-horizontal">
        <div class="tab-content">

         <!-- 1st TAB -->
         <div class="tab-pane fade in active" id="privacypolicy">
           <div id="accordion" class="panel-group spacing-40">
             <!-- QUESTION -->
             <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">DEFINISI DATA PRIBADI</a></h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p align="justify">MakassarNetwork memiliki informasi tentang data pribadi yang ditetapkan dalam undang-undang tentang perlindungan informasi pribadi. Informasi pribadi, alamat email yang digunakan (dapat mengidentifikasi nama lengkap, tanggal lahir, dan informasi pribadi lainnya), dan data pribadi tertentu yang terikat sebagai informasi ID pengguna, seperti kata sandi, kartu kredit, hobi, keluarga, umur, dan informasi pribadi lainnya.</p>
                </div>
              </div>
            </div>
            <!-- END OF QUESTION -->
            <!-- QUESTION -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">PENGUMPULAN INFORMASI</a></h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                  <p align="justify">Kami mengumpulkan berbagai informasi saat Anda mendaftar atas nama Perusahaan, selama pemakaian Anda atas produk dan layanan kami, saat Anda mengunjungi halaman mitra-mitra kami. Kami dapat menggabungkan informasi mengenai Anda yang kami miliki dengan informasi yang kami peroleh dari mitra lainnya atau perusahaan lain dalam rangka untuk memberikan pengalaman yang lebih baik atau untuk meningkatkan kualitas layanan kami. Ketika Anda masuk ke layanan kami, Anda bukanlah orang yang anonim bagi kami. Kami akan secara otomatis menerima dan mencatat informasi dari komputer dan browser Anda, termasuk alamat IP Anda, informasi cookie kami, atribut perangkat lunak dan perangkat keras, halaman yang Anda minta dan parameter peramban standar lainnya. Ketika Anda menggunakan layanan kami, kami mengirimkan satu atau lebih cookie – sebuah file kecil berisi serangkaian karakter – ke perangkat Anda yang secara unik akan mengidentifikasi peramban Anda. Kami menggunakan cookies untuk meningkatkan kualitas layanan kami, termasuk untuk menyimpan preferensi pengguna, melacak tren pengguna, dan menyediakan Anda pengalaman yang lebih baik. Kami dapat memasang satu atau lebih cookie pada peramban Anda saat Anda menggunakan layanan kami atau salah satu dari layanan mitra kami. Ketika Anda mengirim pesan, mempublikasikan konten, memposkan materi, mengirimkan informasi atau email melalui layanan kami, kami mungkin menyimpan hal yang sama untuk memproses pertanyaan, merespons permintaan Anda dan memperbaiki mutu layanan kami. </p>
                </div>
              </div>
            </div>
            <!-- END OF QUESTION -->
            <!-- QUESTION -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">PENGGUNAAN INFORMASI</a></h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <p align="justify">Kami hanya menggunakan dan memproses informasi pribadi untuk tujuan yang akan dijelaskan dalam Kebijakan Privasi ini. Selain itu, tujuan lainnya meliputi : 
                    <ul>
                        <li>Berkomunikasi dengan Anda.</li>
                        <li>Membuat situs atau layanan lebih mudah digunakan dengan menghilangkan keharusan bagi Anda untuk berulang kali memasukkan informasi yang sama.</li>
                        <li>Menyediakan layanan kami.</li>
                        <li>Mengaudit, melakukan penelitian dan analisis untuk mempertahankan, melindungi dan meningkatkan layanan kami.</li>
                        <li>Memastikan fungsi teknis dari jaringan kami.</li>
                        <li>Melindungi hak-hak atau properti milik kami dan juga milik pengguna kami.</li>
                        <li>Mengembangkan layanan baru.</li>
                        <li>Seperti dijelaskan dalam ketentuan layanan dari masing-masing layanan kami dan dalam Warna Hosting Perjanjian Induk Pelanggan - Kebijakan Tanpa Spam.</li>
                        
                    </ul>
                 Kami memiliki Kebijakan Tanpa Spam yang ketat untuk mencegah penggunaan setiap data yang dikumpulkan dengan tujuan mengirimkan spam. Kami tidak akan menjual informasi kontak apa pun kepada pihak ketiga.</p>
                </div>
              </div>
            </div>
            <!-- END OF QUESTION -->
            <!-- QUESTION -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">PILIHAN UNTUK INFORMASI PRIBADI</a></h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                  <p align="justify">Ketika Anda masuk untuk layanan tertentu yang memerlukan pendaftaran, kami meminta Anda untuk memberikan informasi pribadi. Jika kami menggunakan informasi ini untuk hal yang berbeda dari tujuan yang disebutkan di sini dan dari ketentuan layanan yang ditawarkan maka kami akan meminta persetujuan Anda sebelum penggunaan tersebut. Kebanyakan peramban pada awalnya dibuat untuk menerima cookie, tapi Anda dapat mengatur ulang peramban Anda untuk menolak semua cookie atau untuk menunjukkan bila ada cookie yang sedang dikirimkan. Namun, beberapa fitur dan layanan kami mungkin tidak dapat berfungsi dengan baik jika cookies Anda dinonaktifkan. Anda dapat menolak untuk mengirimkan informasi pribadi ke salah satu layanan kami, dalam hal ini kami mungkin tidak akan dapat memberikan layanan tersebut kepada Anda.</p>
                </div>
              </div>
            </div>
            <!-- END OF QUESTION -->
            <!-- QUESTION -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse5">BERBAGI INFORMASI</a></h4>
              </div>
              <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <p align="justify">Kami hanya berbagi informasi pribadi dengan perusahaan atau individu lain dalam keadaan terbatas sebagai berikut: <br><br>
                        <b>Kami memiliki persetujuan Anda.</b><br>
                        Berbagi informasi dengan anak perusahaan, afiliasi atau usaha terpercaya lainnya atau orang lain dengan tujuan untuk memroses informasi pribadi atas nama kami. Kami mewajibkan pihak-pihak tersebut setuju untuk memroses informasi seperti itu berdasarkan petunjuk kami dan sesuai dengan Kebijakan Privasi ini dan langkah-langkah kerahasiaan dan keamanan lainnya yang sepantasnya. Kami memiliki kepercayaan dengan niat baik bahwa akses, penggunaan, penyimpanan, atau pengungkapan informasi tersebut secara wajar diperlukan untuk: (a) mentaati hukum yang berlaku, peraturan, proses hukum atau permintaan pemerintah yang dapat diberlakukan, (b) menegakkan Persyaratan Layanan yang berlaku, termasuk penyelidikan potensi pelanggaran yang mungkian terdapat dari padanya, (c) mendeteksi, mencegah, atau mengenali terjadinya penipuan, masalah-masalah keamanan atau teknis, atau (d) melindungi dari kejahatan terhadap hak, properti atau keamanan, dari pengguna kami, kami atau masyarakat umum sesuai permintaan atau yang diperbolehkan oleh hukum. Kami mungkin akan berbagi dengan pihak ketiga bagian tertentu dari informasi agregat, non-personal, seperti jumlah pengguna dari sisi demografis. Informasi seperti itu tidak akan mengidentifikasi Anda secara individual. Sebagaimana diijinkan dan dijelaskan dalam ketentuan layanan yang bersangkutan dari masing-masing layanan kami dan dalam Warna Hosting Perjanjian Induk Pelanggan<br><br>
                        <b>kemanan Informasi</b><br>
                        Kami mengambil langkah-langkah keamanan yang tepat untuk melindungi terhadap akses dari pihak yang tidak berhak atau perubahan, pengungkapan atau perusakan data yang tidak sah. Ini termasuk tinjauan internal pada praktik dan langkah-langkah keamanan pengumpulan, penyimpanan dan pengolahan data kami, serta langkah-langkah keamanan fisik untuk menjaga dari akses tidak berwenang ke sistem tempat kami menyimpan data-data pribadi. Kami membatasi akses ke informasi pribadi hanya kepada karyawan, kontraktor dan agen yang perlu mengetahui informasi tersebut untuk mengoperasikan, mengembangkan atau meningkatkan layanan kami. Individu-individu ini terikat oleh kewajiban kerahasiaan dan dapat dikenakan hukum disiplin, termasuk pemberhentian dan tuntutan kriminal, jika mereka gagal untuk memenuhi kewajiban tersebut. <br><br>
                        <b>Mengakses dan Memperbaharui Informasi</b><br>
                        Ketika Anda menggunakan layanan kami, kami mengusahakan dengan itikad baik untuk memberikan Anda akses ke informasi pribadi Anda dan untuk memperbaiki data-data ini jika tidak akurat. Perubahan terhadap Kebijakan Privasi ini Harap dicatat bahwa Kebijakan Privasi ini dapat berubah dari waktu ke waktu.
                    </p>
                </div>
              </div>
            </div>
            <!-- END OF QUESTION -->
          </div>
        </div>
        <!-- END OF 1st TAB -->

        <!-- 2nd TAB -->
        <div class="tab-pane fade" id="sla">
         <div id="accordion2" class="panel-group spacing-40">
             <p>Service Level Agreement (SLA) ini hanya berlaku antara MakassarNetwork dan pelanggannya. Pelanggan dari reseller / master reseller atau pihak lain yang secara tidak langsung menggunakan layanan MakassarNetwork namun tidak terdaftar langsung sebagai pelanggan di MakassarNetwork tidak berhak mendapatkan SLA ini.</p>
           <!-- QUESTION -->
           <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">JAMINAN UPTIME SERVER</a></h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
              <div class="panel-body">
                <p>MakassarNetwork memberikan jaminan uptime server sebesar 99% uptime per bulan di luar downtime akibat maintenance yang sebelumnya telah di umumkan melalui http://www.makassarnetwork.info. Untuk menjaga performance server, kami melakukan maintenance rutin pada hari Sabtu malam hingga Senin dini hari. Selama maintenance, beberapa gangguan mungkin terjadi dan ada kemungkinan server akan direboot tanpa notifikasi sebelumnya melalui website. Kegagalan terhadap penyediaan uptime server oleh MakassarNetwork dapat diklaim apabila berlangsung melebihi batas 1% dalam satu bulan dan terjadi dalam satu waktu, tidak termasuk akumulasi dari gangguan yang terjadi dibawah 1%.</p>
              </div>
            </div>
          </div>
          <!-- END OF QUESTION -->
          <!-- QUESTION -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">JAMINAN KEAMANAN DATA</a></h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>MakassarNetwork memberikan jaminan keamanan data pelanggan meliputi data file web, database, dan e-mail sepanjang resiko terhadap keamanan data tersebut tidak ditimbulkan oleh pelanggan sendiri. Kelalaian pelanggan tersebut di antaranya tersebut dibawah ini : <br><br>
                  <ul>
                      <li>Pencurian otorisasi akses (hosting account dan seluruh fasilitas di dalamnya, CPANEL, e-mail, dan billing) akibat ketidakamanan komputer pelanggan. Ketidakamanan komputer pelanggan meliputi adanya worm, virus, keylogger, atau karena pelanggan mengakses dari komputer publik.</li>
                      <li>Memiliki file atau direktori dengan permission all read write (mode 777) pada account hostingnya.</li>
                      <li>Memiliki script yang beresiko keamanan tinggi atau secara umum telah diketahui sebagai bug.</li>
                      <li>Penggunaan CMS/Themes/Plugin yang bersifat nulled yang beresiko keamaan tinggi.</li>
                      
                  </ul>
                  </p>
              </div>
            </div>
          </div>
          <!-- END OF QUESTION -->
          <!-- QUESTION -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion2" href="#collapse8">KLAIM ATAS KEGAGALAN JAMINAN</a></h4>
            </div>
            <div id="collapse8" class="panel-collapse collapse">
              <div class="panel-body">
                  <p> Klaim atas kegagalan jaminan di atas dapat di klaim dalam waktu maksimal 7 hari setelah terjadinya gangguan. Klaim kegagalan uptime server dan uptime network harus disertai bukti hasil traceroute ke arah domain pelanggan dari sisi klien dan pihak ketiga (e.g network-tools.com) dalam waktu terjadinya gangguan dan akan dilakukan crosscheck dengan data kami. Klaim akan ditolak apabila terjadinya kegagalan atas Jaminan Uptime Konektivitas Internet disebabkan oleh pihak lain yang berada di luar tanggungjawab MakasarNetwork termasuk dan tidak terbatas didalamnya : <br><br>
                  <ul>
                      <li>Gangguan konektivitas internet pada ISP pelanggan.</li>
                      <li>Gangguan konektivitas internet yang terjadi pada salah satu route yang menjadi jalur konektivitas dari pelanggan ke server MakassarNetwork.</li>
                      <li>Gangguan yang disebabkan oleh force majeure.</li>
                      <li>Gangguan yang disebabkan oleh adanya gangguan yang ditimbulkan oleh pihak lain.</li>
                      
                  </ul>
                   Apabila gangguan yang di klaim oleh pelanggan datanya cocok dengan data MakassarNetwork, maka MakassarNetwork wajib mengembalikan biaya hosting selama 1 bulan penuh dalam bentuk uang atau dalam bentuk kompensasi lain yakni penambahan masa berlaku hosting selama 1 bulan. Klaim kegagalan jaminan otomatis akan batal apabila : 
                   <ul>
                       <li>Account hosting pelanggan dinyatakan melanggar Acceptable Usage Policy/Term and Condition of Services yang telah disetujui saat melakukan pembelian.</li>
                       <li>Account hosting pelanggan telah di suspend atau dihapus.</li>
                       
                   </ul>
                   MakassarNetwork tidak bertanggungjawab atas pembayaran yang tidak dikonfirmasikan. Konsekuensi – konsekuensi yang timbul akibat hal itu seperti domain expire / hilang, akun hosting tersuspend, timbulnya biaya re-aktivasi, dan konsekuensi lain sepenuhnya menjadi tanggungjawab pelanggan.
                  </p>
              </div>
            </div>
          </div>
          <!-- END OF QUESTION -->
          
        </div>
      </div>
      <!-- END OF 2nd TAB -->

      <!-- 3rd TAB -->
      <div class="tab-pane fade" id="tos">
       <div id="accordion3" class="panel-group spacing-40">
           Harap membaca pemberitahuan berikut sebelum menggunakan layanan pada situs ini. Penggunaan layanan dan fitur-fiturnya berarti bahwa Anda telah menerima dan setuju terhadap syarat dan ketentuan yang berlaku. Melanggar atau mengabaikan salah satu syarat dan ketentuan berikut akan berdampak pada pemberian sanksi hingga pembatalan akun dengan atau tanpa pemberitahuan. 
         <!-- QUESTION -->
         <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse12">KETENTUAN UMUM</a></h4>
          </div>
          <div id="collapse12" class="panel-collapse collapse">
            <div class="panel-body">
                <p><ul>
                    <li>Dilarang menggunakan layanan MakasarNetwork untuk tujuan : Perjudian, pornografi, kekerasan, penghasutan, melecehkan pihak lain, menipu, pelanggaran hak cipta, pengrusakan merk dagang dan segala sesuatu yang bertentangan dengan undang undang ITE.</li>
                    <li>Setiap pelanggan yang menggunakan jasa MakasarNetwork wajib taat pada perundang-undangan yang berlaku di Negara Kesatuan Republik Indonesia dan Undang undang yang berlaku di tempat server diletakan.</li>
                </ul></p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse13">KONTEN WEBSITE</a></h4>
          </div>
          <div id="collapse13" class="panel-collapse collapse">
            <div class="panel-body">
                <p> Anda setuju untuk bertanggung jawab atas seluruh konten, data, dan file dari website anda dan tidak membahayakan MakassarNetwork sebagai penyedia layanan hosting atas klaim yang terjadi terhadap website anda. Semua layanan yang disedikan oleh MakassarNetwork hanya dapat digunakan untuk tujuan yang sah dan legal tanpa melanggar hukum. Penyalahgunaan layanan MakassarNetwork akan berakibat terkenanya sanksi.<br> Berikut aturan larangan penggunan layanan MakassarNetwork untuk konten : 
                <ul>
                    <li>Pornografi, SARA, Penghinaan, dan Kesusilaan secara umum</li>
                    <li>Perihal yang mengandung unsur untuk menimbulkan kekerasan</li>
                    <li>Melanggar hak cipta/merk dagang</li>
                    <li>Situs perjudian</li>
                    <li>Materi - Materi atau konten yang tidak sesuai dengan Aturan perundang - undangan Republik Indonesia, dalam hal ini UU ITE</li>
                </ul></p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse14">PENGGUNAAN LAYANAN HOSTING</a></h4>
          </div>
          <div id="collapse14" class="panel-collapse collapse">
            <div class="panel-body">
              <p> Berikut penggunaan layanan hosting yang tidak diperbolehkan pada layanan MakassarNetwork : 
              <ul>
                  <li>Dilarang menggunakan autoblog, STT dan plugin sejenis autoblog.</li>
                  <li>Dilarang menggunakan untuk IRC, BOTNET dan program proxy lainnya.</li>
                  <li>Dilarang menggunakan untuk rapidleech dan program sejenis lainnya.</li>
                  <li>Dilarang menggunakan untuk file hosting dan image hosting.</li>
                  <li>Dilarang mengupload file bervirus / pendukung hacking.</li>
                  <li>Dilarang menggunakan hosting sebagai tempat phising.</li>
                  <li>Dilarang menggunakan WP-ROBOT / WP O-MATIC / WP-MU dan VB SEO.</li>
                  <li>Dilarang menggunakan domain co.cc / co.tv / .tk / atau domain free lainnya.</li>
                  <li>Dilarang menggunakan cron job berlebihan.</li>
                  <li>Dilarang menggunakan untuk keperluan Twitter Client.</li>
                  <li>Dilarang menggunakan untuk website, forum berbau hacking.</li>
                  <li>Dilarang menggunakan untuk mail spamming.</li>
                  
              </ul>
            Pelanggaran terhadap larangan diatas akan dikenakan suspend. Pelanggaran keduakali akan dikenakan suspend selama 1 bulan. Pelanggaran ketigakalinya akan dikenakan terminate tanpa diberi backup. Untuk web yang terinfeksi malware/virus/diretas dan diupload script berbahaya, apabila kedapatan/terkena scan sama anti virus/malware dari server maka akan otomatis tersuspend. Untuk membuka suspend silahkan kontak kami melalui Ticket/BBM/WhatsApp/SMS/Telepon, maka akun akan kami buka dan log scanning akan kami laporkan melalui ticket.</p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse15">PENGGUNAAN SUMBER DAYA HOSTING</a></h4>
          </div>
          <div id="collapse15" class="panel-collapse collapse">
            <div class="panel-body">
              <p> Penggunaan sumber daya hosting diatur agar tidak terjadi pembebanan pada server secara berlebihan dan tidak mengganggu untuk pengguna lainnya.  Berikut detail aturan penggunaan sumber daya hosting : 
              <ul>
                  <li>Penggunaan Physical RAM tidak lebih dari yang telah ditetapkan untuk paket hosting secara global.</li>
                  <li>Penggunaan CPU tidak lebih dari yang telah ditetapkan untuk paket hosting secara global.</li>
                  <li>Penggunaan Disk space tidak lebih dari yang telah ditetapkan untuk paket hosting secara global.</li>
                  <li>Pengiriman email tidak lebih dari 250 email perjam perdomainnya.</li>
              </ul></p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">BACKUP & RESTORE SERTA KEHILANGAN DATA</a></h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <p> Anda setuju untuk bertanggung jawab atas keselamatan seluruh data anda. MakassarNetwork tidak bertanggung jawab atas kehilangan data, kerusakan data yang mungkin terjadi diakibatkan oleh system crash, pelanggaran keamanan, kegagalan harddisk. Anda setuju untuk :
              <ul>
                  <li>Melakukan backup data secara berkala sesuai jadwal yang anda tentukan sendiri.</li>
                  <li>Mengunduh, menggandakan backup data ke lokal PC/upload ke media online.</li>
                  
              </ul>
               MakassarNetwork menyediakan backup data, dan backup yang disediakan adalah backup pada awal bulan dan setiap seminggu sekali setiap bulannya.
              </p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse17">TAGIHAN LAYANAN</a></h4>
          </div>
          <div id="collapse17" class="panel-collapse collapse">
            <div class="panel-body">
              <p> Anda setuju untuk memberikan informasi pembayaran yang benar dalam hal pemesanan dan pembayaran dari layanan MakassarNetwork. Pesanan layanan anda akan diproses begitu anda melakukan konfirmasi pembayaran atau setidaknya paling lambat 1x24jam.  Hal mengenai tagihan rutin bulanan / pertiga bulan / perenam bulan / pertahun / perdua tahun /dan pertiga tahun untuk penggunaan layanan MakassarNetwork secara terus menerus secara detail sebagai berikut :
              <ul>
                  <li>Tagihan layanan hosting secara berkala akan dibuat 14 hari sebelum tanggal jatuh tempo(tanggal pertama kali layanan dipesan).</li>
                  <li>Pengingat tagihan layanan hosting akan dikirimkan secara berkala yaitu 7 hari sebelum jatuh tempo, 1 hari, 3 hari, dan 5 hari setelah jatuh tempo.</li>
                  <li>Pembayaran keterlambatan layanan hosting melewati 5 hari setelah jatuh tempo dikenakan denda sebesar 10.000 untuk mata uang Rupiah atau di konversi kedalam USD jika pembayaran menggunakan paypal.</li>
                  <li>Keterlambatan pembayaran layanan hosting melewati 3 hari akan menyebabkan layanan anda ditangguhkan(suspend).</li>
                  <li>Keterlambatan pembayaran layanan hosting melewati 20 hari akan menyebabkan layanan anda dihapus.</li>
                  <li>Pengingat pembayaran untuk pembaharuan domain dikirim secara berkala mulai dari 60 hari, 30 hari, 15 hari, 7 hari, dan 2 hari sebelum masa aktif domain anda habis/expire.</li>
                  
              </ul></p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse18">GARANSI PENGEMBALIAN UANG</a></h4>
          </div>
          <div id="collapse18" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Anda berhak untuk melakukan pembatalan layanan kapan saja. MakassarNetwork memberikan garansi uang kembali selama 30 hari pertama setelah layanan yang dipesan diaktifkan. MakassarNetwork tidak memberlakukan garansi uang kembali jika klien membatalkan layanan karena penyalahgunaan layanan dari MakassarNetwork atau pelanggaran terhadap aturan yang telah ditetapkan.</p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse19">PENOLAKAN / DISCLAIMER</a></h4>
          </div>
          <div id="collapse19" class="panel-collapse collapse">
            <div class="panel-body">
              <p>MakassarNetwork tidak bertanggung jawab atas segala kerusakan yang terjadi diakibatkan penyalahgunaan layanan MakassarNetwork pada bisnis anda. MakassarNetwork tidak memberikan jaminan apapun secara tersurat maupun tersirat untuk setiap layanan MakassarNetwork termasuk kerusakan dan kehilangan data yang disebabkan penangguhan, tidak adanya pengiriman, kesalahan dalam pengiriman dan semua gangguan yang berasal dari pihak MakassarNetwork tanpa disengaja.</p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse20">PERNYATAAN</a></h4>
          </div>
          <div id="collapse20" class="panel-collapse collapse">
            <div class="panel-body">
              <p>MakassarNetwork berhak untuk :
              <ul>
                  <li>Mempublikasikan data pribadi anda jika sewaktu waktu anda terlibat dalam masalah hukum yang melanggar aturan perundang-undangan dan atau UU ITE.</li>
                  <li>Membatalkan layanan secara sepihak tanpa pemberian backup data bila anda melakukan pelanggaran secara berulang.</li>
                  <li>Seluruh pertanyaan seputar layanan dapat dilakukan melalui Live chat, YM, BBM, SMS, Telepon, Whatsapp, Email, dan Ticket Support. Untuk konsultasi / penyelesaian permasalahan yang berkaitan terganggunya layanan sehingga layanan tidak dapat diakses dilakukan via ticket support.</li>
              </ul></p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
        
         <!-- QUESTION -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion3" href="#collapse21">PERUBAHAN KETENTUAN PENGGUNAAN LAYANAN</a></h4>
          </div>
          <div id="collapse21" class="panel-collapse collapse">
            <div class="panel-body">
              <p>MakassarNetwork berhak melakukan revisi atau perubahan terhadap aturan penggunaan layanan yang sudah ada tanpa sepengetahuan pelanggan. MakassarNetwork dan pelanggan sepakat untuk menyelesaikan sengketa layanan melalui jalan musyawarah untuk mufakat. Apabila sengketa tidak dapat selesai dengan cara musyawarah, maka akan diselesaikan sesuai ketentuan hukum yang berlaku.</p>
            </div>
          </div>
        </div>
        <!-- END OF QUESTION -->
      </div>
    </div>
    <!-- END OF 3rd TAB -->


  </div>
</div>
<!-- END OF TABS -->

</div>
</div>
</div>
<!-- END OF FAQ TABS -->

@endsection