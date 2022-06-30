<template>
  <section id="about_app">
    <div class="container">
      <div class="row">
        <div class="col d-flex align-items-center">
          <img
            src="https://www.centodieci.it/wp-content/uploads/2016/09/iStock_86263221_XXLARGE-1-1024x683.jpg"
            alt=""
          />
          <h2 class="ms-2 ">About us</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- /#about_app -->
</template>

<script>
export default {
  name: "About",
};
</script>

<style lang="scss" scoped>
#about_app{
    background-image: url('https://www.formica.com/it-it/-/media/formica/emea/products/swatch-images/f7914/f7914-swatch.jpg?rev=b5cb1fec70e54c2ba925e08334e437b7');
    img{
            border-radius: 50%;
            width: 100px;
            aspect-ratio: 1/1;
    }
}
</style>