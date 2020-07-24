<template>
  <div class="price-section">
    <div v-for="(price, x) in pricelist" :key="x">
      <div v-if="price.bestSeller" class="price-card card-best-seller">
        <span class="best-seller-tag">Best Seller!</span>
        <div class="price-row-best name"><h2>{{ price.name }}</h2></div>
        <div class="price-row-best price">
          <p class="before-discount">{{ price.beforeDiscount }}</p>
          <h3 class="after-discount">{{ price.afterDiscount }}</h3>
        </div>
        <div class="price-row-best user"><p><strong>{{ price.userCount }}</strong> pengguna terdaftar</p></div>
        <div class="price-row feature">
          <p><strong>{{ price.resourcePower }}X RESOURCE POWER</strong></p>
          <p><strong>{{ price.diskSpace }}</strong> Disk Space</p>
          <p v-if="price.unlimitedBandwidth"><strong>Unlimited</strong> Bandwidth</p>
          <p v-if="price.unlimitedEmail"><strong>Unlimited</strong> POP3 Email</p>
          <p v-if="price.unlimitedDatabase"><strong>Unlimited</strong> Database</p>
          <p v-if="price.domain"><strong>{{price.domain}}</strong> Domain</p>
          <p v-else-if="price.addonDomain"><strong>{{price.addonDomain}}</strong> Addon Domain</p>
          <p v-if="price.backup"><strong>{{price.backup}}</strong> Backup</p>
          <b-button class="btn-blue-bg">{{price.button}}</b-button>
        </div>
      </div>
      <div v-else class="price-card">
        <div class="price-row name"><h2>{{ price.name }}</h2></div>
        <div class="price-row price">
          <p class="before-discount">{{ price.beforeDiscount }}</p>
          <h3 class="after-discount">{{ price.afterDiscount }}</h3>
        </div>
        <div class="price-row user"><p><strong>{{ price.userCount }}</strong> pengguna terdaftar</p></div>
        <div class="price-row feature">
          <p><strong>{{ price.resourcePower }}X RESOURCE POWER</strong></p>
          <p><strong>{{ price.diskSpace }}</strong> Disk Space</p>
          <p v-if="price.unlimitedBandwidth"><strong>Unlimited</strong> Bandwidth</p>
          <p v-if="price.unlimitedEmail"><strong>Unlimited</strong> POP3 Email</p>
          <p v-if="price.unlimitedDatabase"><strong>Unlimited</strong> Database</p>
          <p v-if="price.domain"><strong>{{price.domain}}</strong> Domain</p>
          <p v-else-if="price.addonDomain"><strong>{{price.addonDomain}}</strong> Addon Domain</p>
          <p v-if="price.backup"><strong>{{price.backup}}</strong> Backup</p>
          <b-button class="btn-white-bg">{{price.button}}</b-button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
    export default {
      name: 'PriceCard',
      props: ['pricelist']
    }
</script>
<style>
  .price-section {
    display: flex;
    justify-content: center;
    margin: 40px 0;
  }

  .price-card {
    border: 1px solid #f5f5f5;
    display: inline-block;
    position: relative;
  }

  .price-card h2, .price-card h3 {
    margin: 0
  }

  .price-card .best-seller-tag {
    position: absolute;
    text-transform: uppercase;
    color: white;
    background-color: green;
    top: 8px;
    padding: 4px 10px;
    left: -20px;
    transform: rotate(-45deg);
    font-size: 10px;
    margin: 2px;
    -webkit-box-shadow: 0px 3px 5px -2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 3px 5px -2px rgba(0,0,0,0.75);
    box-shadow: 0px 3px 5px -2px rgba(0,0,0,0.75);
  }

  .price-card p {
    color: #3b3b3b;
  }

  .price-row {
    border-bottom: 1px solid #f5f5f5;
    text-align: center;
    padding: 5px 15px;
  }

  .feature {
    padding: 15px;
  }

  .card-best-seller {
    border: 1px solid #0e79e9;
  }

  .card-best-seller .price-row-best {
    background-color: #0e79e9;
    color: white;
  }

  .card-best-seller .price-row-best .after-discount,
  .card-best-seller .price-row-best .before-discount,
  .card-best-seller .user p {
    color: white !important;
  }

  .card-best-seller .user {
    background-color: #0c68d6;
    color: white;
  }

  .price-card .user p {
    margin: 0;
    font-size: 14px;
    padding: 12px 0;
  }

  .card-best-seller h2 {
    color: white !important;
    padding: 5px 0;
  }

  .card-best-seller p {
    color: white;
  }

  .price .before-discount {
    font-size: 10px;
    text-decoration: line-through;
    margin: 0;
  }

  @media only screen and (max-width: 600px) {
    .price-section {
      display: block;
    }
  }
</style>
