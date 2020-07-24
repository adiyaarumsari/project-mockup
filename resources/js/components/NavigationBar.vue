<template>
    <div>
      <b-navbar class="navigation-class">
        <b-container>
          <b-navbar-brand class="logo" href="#">
            <img src="../../assets/svg/nh-logo.svg" />
          </b-navbar-brand>
          <b-navbar-nav class="navigation-bar">
            <b-nav-item href="#">Hosting</b-nav-item>
            <b-nav-item href="#">Domain</b-nav-item>
            <b-nav-item href="#">Server</b-nav-item>
            <b-nav-item href="#">Website</b-nav-item>
            <b-nav-item href="#">Afiliasi</b-nav-item>
            <b-nav-item href="#">Promo</b-nav-item>
            <b-nav-item href="#">Pembayaran</b-nav-item>
            <b-nav-item href="#">Review</b-nav-item>
            <b-nav-item href="#">Kontak</b-nav-item>
            <b-nav-item href="#">Blog</b-nav-item>
          </b-navbar-nav>
        </b-container>
      </b-navbar>
    </div>  
</template>
<script>
export default {
}    
</script>
<style>
  .navigation-class {
    border-bottom: 1px solid #f5f5f5;
  }

  .logo {
    background-color: #007bff;
  }

  .logo img {
    width: 200px;
  }

  @media only screen and (max-width: 600px) {
  .navigation-bar {
      overflow-x: auto;
    }
  }
</style>
