<template>
  <div class="head-component">
    <div class="container">
      <b-row class="row">
        <b-nav class="left-side">
          <p class="head-item">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ <a href="#">x</a> ]</p>
        </b-nav>
        <b-col col offset-lg="5">
          <b-nav class="right-side">
            <a col lg="4" class="head-item" href="#"><font-awesome-icon icon="phone" /> 0274-530055</a>
            <a col lg="4" class="head-item" href="#"><font-awesome-icon icon="comments" />Live Chat</a>
            <a col lg="4" class="head-item" href="#"><font-awesome-icon icon="user" />Member Area</a>
          </b-nav>
        </b-col>
      </b-row>
    </div>
  </div>
</template>
<script>
    export default {}
</script>
<style>
  .head-component {
    padding: 10px 0;
    border-bottom: 1px solid #f5f5f5;
  }

  .head-item {
    color: unset;
    text-decoration: none;
    font-size: 11px;
    margin-bottom: 0;
    line-height: 100%;
    text-align: center;
  }

  .head-contact {
    display: inline-block;
  }

  .right-side {
    float: right;
    clear: both;
  }

  .right-side .head-item {
    margin-left: 32px;
  }

  .head-item svg {
    margin-right: 3px;
  }

  @media only screen and (max-width: 600px) {
    .head-component {
      display: none;
    }
  }
</style>
