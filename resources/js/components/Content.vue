<template>
  <div>
    <div class="section">
      <b-container>
        <b-row>
          <b-col cols="12" lg="6">
            <h1>PHP Hosting</h1>
            <h3>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h3>
            <div>
              <ul class="hosting-list">
                <li><font-awesome-icon icon="check" /> Solusi PHP untuk performa query yang lebih cepat</li>
                <li><font-awesome-icon icon="check" /> Konsumsi memori yang lebih rendah</li>
                <li><font-awesome-icon icon="check" /> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
                <li><font-awesome-icon icon="check" /> Fitur enkripsi IonCube dan Zend Guard Loaders</li>
              </ul>
            </div>
          </b-col>
          <b-col col cols="12" lg="6">
            <img src="../../assets/svg/illustration banner PHP hosting-01.svg" />
          </b-col>
        </b-row>
      </b-container>
    </div>

    <div class="section">
      <b-container class="sub-section php-image-section">
        <div class="php-image">
          <div class="img-wrapper">
            <img src="../../assets/svg/icon PHP Hosting_zendguard.png" />
          </div>
          <p>PHP Zen Guard Loader</p>
        </div>
        <div class="php-image">
          <div class="img-wrapper">
            <img src="../../assets/svg/icon PHP Hosting_composer.png" />
          </div>
          <p>PHP Composer</p>
        </div>
        <div class="php-image">
          <div class="img-wrapper">
            <img src="../../assets/svg/icon PHP Hosting_ioncube.png" />
          </div>
          <p>PHP ionCube Loader</p>
        </div>
      </b-container>

      <b-container class="sub-section">
        <div class="section-title">
          <h1>Paket Hosting Singapura yang Tepat</h1>
          <h3>Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
          <div>
            <price-card v-bind:pricelist="pricelist"></price-card>
          </div>
        </div>
      </b-container>

      <b-container>
        <div class="section-title limit-feature-section">
          <h3>Powerful dengan Limit PHP yang Lebih Besar</h3>
          <div class="limit-feature">
            <div v-for="(feature, x) in featureList" :key="x" class="limit-feature-row"><font-awesome-icon icon="check" /><p>{{feature}}</p></div>
          </div>
        </div>
      </b-container>

      <b-container>
        <div class="section-title package-section">
          <h3>Semua Paket Hosting Sudah Termasuk</h3>
          <div class="package-include">
            <div class="include-item">
              <img src="../../assets/svg/icon PHP Hosting_PHP Semua Versi.svg" />
              <h6>PHP Semua Versi</h6>
              <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p> 
            </div>
            <div class="include-item">
              <img src="../../assets/svg/icon PHP Hosting_My SQL.svg" />
              <h6>My SQL Versi 5.6</h6>
              <p>Nikmati MySQL versi terbaru, tercepat, dan kaya akan fitur.</p> 
            </div>
            <div class="include-item">
              <img src="../../assets/svg/icon PHP Hosting_CPanel.svg" />
              <h6>Panel Hosting cPanel</h6>
              <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p> 
            </div>
            <div class="include-item">
              <img src="../../assets/svg/icon PHP Hosting_garansi uptime.svg" />
              <h6>Garansi Uptime 99.9%</h6>
              <p>Data center yang mendukung kelangsungan website Anda 24/7.</p> 
            </div>
            <div class="include-item">
              <img src="../../assets/svg/icon PHP Hosting_InnoDB.svg" />
              <h5>Database InnoDB Unlimited</h5>
              <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda</p> 
            </div>
            <div class="include-item">
              <img src="../../assets/svg/icon PHP Hosting_My SQL remote.svg" />
              <h5>Wildcard Remote MySQL</h5>
              <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p> 
            </div>
          </div>
        </div>
      </b-container>

      <b-container>
        <div class="section-title">
          <h3>Mendukung Penuh Framework Laravel</h3>
        </div>
          <b-container>
            <b-row>
                <b-col col lg="6" cols="12" class="sub-section">
                  <h5>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</h5>
                  <div>
                    <ul class="install-list">
                      <li><font-awesome-icon icon="check" /> Install Laravel <strong>1 klik</strong> dengan Softaculous Installer</li>
                      <li><font-awesome-icon icon="check" /> Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json,</strong> dan <strong>fileinfo</strong>.</li>
                      <li><font-awesome-icon icon="check" /> Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal packages pilihan Anda.</li>
                    </ul>
                    <p class="small-text">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
                    <b-button class="btn-blue-bg">Pilih Hosting Anda</b-button>
                  </div>
                </b-col>
                <b-col col lg="6" cols="12">
                  <img src="../../assets/svg/illustration banner PHP hosting-01.svg" />
                </b-col>
            </b-row>
          </b-container>
      </b-container>
    </div>

    <div class="section">
      <b-container>
        <h3 class="modules-title">Modul Lengkap Untuk Menjalankan Aplikasi PHP Anda</h3>
        <div class="modules">
          <p v-for="(module, x) in moduleList" :key="x">{{ module }}</p>
        </div>
        <div class="flex-center">
          <b-button class="btn-white-bg">Selengkapnya</b-button>
        </div>
      </b-container>
      
      <b-container class="sub-section">
        <b-row>
          <b-col col lg="6" cols="12">
            <h4>Linux Hosting yang Stabil dengan Teknologi LIVE</h4>
            <div>
              <p>SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong>
              dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan
              <strong>MySQL</strong> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security,
              <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.</p>
              <b-button class="btn-blue-bg">Pilih Hosting Anda</b-button>
            </div>
          </b-col>
          <b-col col lg="6" cols="12">
            <img src="../../assets/images/Image support.png" />
          </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>
<script>
  import PriceCard from './PriceCard';
  import priceData from '../../../public/priceData.json'
  
  export default {
    components: {
      'price-card': PriceCard
    },
    data () {
      return {
        pricelist: priceData,
        moduleList: ['IcePHP', 'http', 'nd_pdo_mysql', 'stats', 'apc', 'huffman', 'oauth', 'stem', 'apcu', 'idn',
        'oci8', 'stomp', 'apm', 'igbinary', 'odbc', 'apc', 'suhosin', 'ares', 'imagick', 'opcache',
        'sybase_ct', 'bcmath', 'imap', 'pdf', 'sysvmsg', 'bcompiler', 'inclued', 'pdo', 'sysvshm',
        'bitset', 'interbase', 'pdo_firebird', 'tidy', 'bloomy', 'intl', 'pdo_mysql', 'pdo', 'timezonedb', 'bz2_filter',
        'ioncube_loader', 'pdo_odbc', 'trader', 'clamav', 'ioncube_loader_4', 'stem', 'pdo_pgsql', 'translit', 'coin_acceptor', 'jsmin',
        'pdo_sqlite', 'uploadprogress', 'crack', 'json', 'pgsql', 'uri_template', 'dba', 'ldap', 'phalcon', 'uuid'],
        featureList: ['max execution time 300s', 'max execution time 300s', 'php memory limit 1024 MB',
        'post max size 128 MB', 'upload max filesize 128 MB', 'max input vars 2500']
      }
    }
  }
</script>
<style>
  .section {
    border-bottom: 1px solid #f5f5f5;
    padding: 60px 0;
  }

  .hosting-list, .install-list {
    font-family: 'Montserrat', sans-serif;
    font-weight: 300;
    list-style: none;
  }

  .hosting-list li, .install-list li {
    margin-left: -24px;
  }
  
  .php-image-section {
    text-align: center;
  }

  .php-image {
    text-align: center;
    display: inline-block;
    margin-right: 100px;
  }

  .php-image p {
    font-family: 'Montserrat', sans-serif;
    font-weight: 300;
  }

  .php-image:last-of-type {
    margin-right: 0;
  }

  .php-image .img-wrapper {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .php-image img {
    max-width: 150px;
  }

  .sub-section {
    padding: 50px 0;
  }

  .section-title {
    text-align: center;
  }

  .title {
    font-family: 'Montserrat-Bold';
  }

  .limit-feature {
    display: grid;
    grid-column-gap: 20px;
    grid-template-rows: auto auto auto;
    grid-auto-flow: column;
    margin: 50px 0;
  }

  .limit-feature-section:after, .package-section:after {
    content: '';
    margin: 0 auto 50px auto;
    display: block;
    width: 100px;
    height: 5px;
    background-color: #ededed; 
  }

  .limit-feature .limit-feature-row {
    border: 1px solid #cccccc;
    display: flex;
    align-items: center;
  }

  .limit-feature-row p {
    margin: 0 0 0 10px;
    color: #6f6f6f;
  }

  .limit-feature-row svg, .hosting-list svg, .install-list svg {
    float: left;
    color: white;
    background-color: green;
    padding: 5px;
    border-radius: 50%;
  }

  .limit-feature-row svg {
    margin: 0 15px;
  }

  .hosting-list svg, .install-list svg {
    margin-right: 8px;
  }

  .limit-feature-row:nth-child(even) {
    background-color: #f5f5f5;
  }

  .package-include {
    display: grid;
    grid-column-gap: 20px;
    grid-template-columns: repeat(3, 1fr);
    margin: 50px 0;
  }

  .package-include .include-item {
    text-align: center;
  }

  .include-item img {
    max-width: 150px;
    margin: 0 auto;
  }

  .modules-title {
    text-align: center;
  }

  .modules {
    display: grid;
    grid-auto-flow: row;
    grid-template-columns: auto auto auto auto;
    margin: 50px 0;
  }

  .modules p {
    text-align: center;
    margin: 0;
    line-height: 1.5;
  }

  .modules .more {
    margin: 0 auto;
  }

  .small-text {
    font-size: 10px;
  }
  
  .btn-blue-bg {
    background-color: #0d7beb;
    border: 2px solid #0d7beb;
    border-radius: 32px;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
  }

  .btn-white-bg {
    margin: 0 auto;
    background-color: white;
    border: 2px solid #333333;
    color: #333333;
    border-radius: 32px;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
  }

  @media only screen and (max-width: 600px) {
    .package-include, .modules {
      grid-column-gap: 10px;
      grid-template-columns: repeat(2, 1fr);
      margin: 50px 0;
    }

    .sub-section {
      padding: 30px 16px;
    }
  }
</style>
