<template>
<section id="post_app">
  <div class="" v-if="!loading">
      
  </div>
  <div class="text-center" v-else>Loading...</div>
</section>
<!-- /#post_app -->
</template>

<script>
export default {
  name: "Post",
  data() {
    return {
      post: "",
      loading: true,
    };
  },
  methods: {
    getSinglePost() {
      axios
        .get("/api/posts/" + this.$route.params.slug)
        .then((response) => {
          //console.log(response.data);
          if(response.data.status_code === 404){
            //console.log('Errore 404')
            this.$router.push({name: 'notfound'})
          }else{
            //console.log('page found');
            this.post = response.data
            this.loading = false
          }
        })
        .catch((e) => {
          console.error(e);
        });
    },
  },
  mounted() {
    this.getSinglePost();
  },
};
</script>

<style lang="scss" scoped>

</style>