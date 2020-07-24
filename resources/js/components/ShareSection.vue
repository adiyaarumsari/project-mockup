<template>
  <div>
    <div class="share-section">
      <b-container>
        <b-row>
          <b-col col lg="5" cols="12">
            <p>Bagikan jika Anda menyukai halaman ini.</p>
          </b-col>
          <b-col col lg="5" offset-lg="2" cols="12">
            <a href="#"><font-awesome-icon class="social-button" :icon="{ prefix: 'fab', iconName: 'facebook' }"/><span class="share-number">80k</span></a>
            <a href="#"><font-awesome-icon class="social-button" :icon="{ prefix: 'fab', iconName: 'twitter' }"/><span class="share-number">450</span></a>
            <a href="#"><font-awesome-icon class="social-button" :icon="{ prefix: 'fab', iconName: 'google-plus' }"/><span class="share-number">1900</span></a>
          </b-col>
        </b-row>
      </b-container>
    </div>
    <div class="share-help">
      <b-container>
        <b-row>
          <b-col col lg="10" cols="6">
            <h2>Perlu <strong>BANTUAN?</strong> Hubungi Kami: <strong>0274-5305505</strong></h2>
          </b-col>
          <b-col col lg="2" cols="6">
            <b-button class="btn-white-border"><font-awesome-icon icon="comments" /> Live Chat</b-button>
          </b-col>
        </b-row>
      </b-container>
    </div>
  </div>
</template>
<script>
    export default {
  }
</script>
<style>
  .share-section {
    background-color: #F5F5F5;
    padding: 20px 0;
  }

  .share-section p {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    margin: 0;
  }

  .share-help {
    background-color: #138ff0;
    padding: 50px 0;
  }

  .share-help h2 {
    color: white !important;
    font-family: 'Montserrat', sans-serif;
    font-size: 28px;
  }

  .social-button {
    font-size: 30px;
    color: #333333;
    margin-left: 10px;
  }

  .share-number {
    padding: 5px 7px;
    margin: 0 3px;
    color: #999999;
    border: 1px solid #999999;
  }

  .btn-white-border {
    margin: 0 auto;
    background-color: transparent;
    border: 2px solid white;
    color: white;
    border-radius: 32px;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
  }
</style>
