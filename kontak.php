<?php
include 'conn.php';
include 'conf.php';
include "header.php";
?>
<br>
<div class="row">
<div class="large-8 columns">
<h2>Kontak Kami</h2>
<p>
Terimakasih telah berkunjung di website Tuban Street, jika ada pertanyaan silakan hubungi kami,
<br>
Telp : +62 21 521 2552<br>
Fax: +62 21 521 2553<br>
Email : admin@tubanstreet.com<br><br>
Atau bisa juga dengan mengisi form di bawah ini
</p>
<form method="POST" action="kontakkirim.php">
  <div class="row">
    <div class="large-4 columns">
      <label>Nama Lengkap
        <input type="text" placeholder="Masukkan Nama Lengkap" name="nama" required />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-5 columns">
      <label>Email
        <input type="email" placeholder="Masukkan Email" name="email" />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-5 columns">
      <label>Nomor Hp
        <input type="text" placeholder="Masukkan Nomor Hp" name="Hp" required />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-9 columns">
      <label>Pesan
        <textarea placeholder="Masukkan Pesan" rows="10" name="pesan" required></textarea>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-9 columns">
      <button class="button" type="submit">Kirim</button>
    </div>
  </div>
</form>
</div> 
<div class="large-4 columns">
<aside>
<div class="row small-up-3">
<div class="column text-center">
<i class="fa fa-facebook fa-5x" aria-hidden="true" style="color:#376099"></i>
<h6>56,009</h6>
<p><small>FOLLOWERS</small></p>
<br>
</div>
<div class="column text-center">
<i class="fa fa-twitter fa-5x" aria-hidden="true" style="color:#6CC4E2"></i>
<h6>76,905</h6>
<p><small>FOLLOWERS</small></p>
<br>
</div>
<div class="column text-center">
<i class="fa fa-instagram fa-5x" aria-hidden="true" style="color:#527FA4"></i>
<h6>34,099</h6>
<p><small>FOLLOWERS</small></p>
<br>
</div>
<div class="column text-center">
<i class="fa fa-tumblr-square fa-5x" aria-hidden="true" style="color:#395976"></i>
<h6>13,765</h6>
<p><small>FOLLOWERS</small></p>
</div>
<div class="column text-center">
<i class="fa fa-pinterest-square fa-5x" aria-hidden="true" style="color:#E33F46"></i>
<h6>9,283</h6>
<p><small>FOLLOWERS</small></p>
</div>
<div class="column text-center">
<i class="fa fa-youtube-square fa-5x" aria-hidden="true" style="color:#DA2723"></i>

<h6>99,000</h6>
<p><small>FOLLOWERS</small></p>
</div>
</div>
<br>
<div class="row column">
<p class="lead">PASANG IKLAN</p>
<p><img src="admin/assets/img/pasang.gif" width="100%" alt="advertisement of ShamWow"></p>
</div>
<br>
<?php
include 'trending.php';
?>
</aside>
</div>
</div>


<?php
include "footer.php";
?>