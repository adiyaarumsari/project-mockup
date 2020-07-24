<template>
  <div class="footer-section">
    <b-container>
      <b-row>
        <b-col col lg="3" cols="6">
          <p class="footer-title">Hubungi Kami</p>
          <p class="footer-content">
            0274-5305505<br />
            Senin - Minggu
            24 Jam Nonstop
          </p>
          <p class="footer-content">
            Jl. Selokan Mataram Monjali<br />
            Karangjati MT I/304<br />
            Sinduadi, Mlati, Sleman<br />
            Yogyakarta 55284
          </p>
        </b-col>
        <b-col col lg="3" cols="6">
          <p class="footer-title">Layanan</p>
          <p class="footer-content">
            Domain<br />
            Shared Hosting<br />
            Cloud VPS Hosting<br />
            Managed VPS Hosting<br />
            Web Builder<br />
            Keamanan SSL / HTTPS<br />
            Jasa Pembuatan Website<br />
            Program Affiliasi
          </p>
        </b-col>
        <b-col col lg="3" cols="6">
          <p class="footer-title">Servis Hosting</p>
          <p class="footer-content">
            Hosting Murah<br />
            Hosting Indonesia<br />
            Hosting Singapura SG<br />
            Hosting PHP<br />
            Hosting Wordpress<br />
            Hosting Laravel
          </p>
        </b-col>
        <b-col col lg="3" cols="6">
          <p class="footer-title">Tutorial</p>
          <p class="footer-content">
            Knowledgebase<br />
            Blog<br />
            Cara Pembayaran
          </p>
        </b-col>
      </b-row>
      <b-row>
        <b-col col lg="3" cols="6">
          <p class="footer-title">Tentang Kami</p>
          <p class="footer-content">
            Tim Niagahoster<br />
            Karir<br />
            Events<br />
            Penawaran & Promo Spesial<br />
            Kontak Kami
          </p>
        </b-col>
        <b-col col lg="3" cols="6">
          <p class="footer-title">Kenapa Pilih Niagahoster?</p>
          <p class="footer-content">
            Support Terbaik<br />
            Garansi Harga Termurah<br />
            Domain Gratis Selamanya<br />
            Datacenter Hosting Terbaik<br />
            Review Pelanggan
          </p>
        </b-col>
        <b-col col lg="3" cols="6">
          <p class="footer-title">Newsletter</p>
          <div class="subscribe-form">
            <b-form-input
            id="input-1"
            type="email"
            placeholder="Email"
            ></b-form-input>
            <b-button class="btn-subscribe">Berlangganan</b-button>
          </div>
          <p class="footer-text">Dapatkan promo dan konten menarik dari penyedia
            hosting terbaik Anda</p>
        </b-col>
        <b-col col lg="3" class="social-section">
          <a href="#"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'facebook' }"/></a>
          <a href="#"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'twitter' }"/></a>
          <a href="#"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'google-plus' }"/></a>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>
<script>
    export default {
  }
</script>
<style>
  .footer-section {
    background-color: #000000;
    padding: 20px 0;
    font-family: 'Roboto', sans-serif;
  }

  .footer-content {
    text-align: center;
    color: #cccccc !important;
    font-size: 12px;
  }

  .footer-text {
    color: #999999;
    font-size: 11px;
    margin: 10px 0;
  }

  .footer-title {
    font-weight: bold;
    text-align: center;
    color: #cecece !important;
    text-transform: uppercase;
    font-size: 14px;
  }

  .subscribe-form {
    position: relative;
  }

  .subscribe-form input {
    border-radius: 24px;
  }

  .btn-subscribe {
    top: 0;
    position: absolute;
    right: 0;
    background-color: #0d7beb;
    border: 2px solid #0d7beb;
    border-radius: 32px;
    font-size: 12px;
    height: 100%;
    font-weight: 400;
    font-family: 'Montserrat', sans-serif;
  }

  .social-section {
    text-align: center;
  }

  .social-section svg {
    color: #cecece;
    border: 1px solid #cecece;
    font-size: 40px;
    padding: 10px;
    border-radius: 50%;
  }
</style>
