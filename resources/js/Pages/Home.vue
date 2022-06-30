<template>
  <section id="home_app">
    <div class="p-5">
      <div class="container">
        <h1 class="display-3">Benvenuto</h1>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
          perferendis aliquam, laboriosam illo quae eum alias excepturi aperiam
          magni atque consequuntur sapiente? Dignissimos nulla veritatis,
          doloribus quos dolore ex id illum aspernatur voluptatibus odio? Earum,
          dolores, corrupti eos modi ad voluptate tenetur repellendus repellat,
          sequi ipsum ipsam placeat sit? Eos amet necessitatibus, sed odio eaque
          distinctio cumque saepe aspernatur soluta mollitia nulla repellendus
          doloremque numquam quibusdam illo. Aspernatur aut enim facere harum,
          sapiente voluptates beatae pariatur quas, dicta cumque, ipsam vero
          vitae ducimus inventore! Dolor, deserunt voluptas. Culpa officiis
          similique, commodi hic consequuntur quidem. Eaque nulla consectetur et
          dolores aut a modi hic eum enim, veniam tempore neque ad aliquid.
          Voluptates voluptate error magni, explicabo eligendi distinctio odio
          consequuntur illum, aliquid sunt provident est hic porro veniam
          mollitia atque ab quasi ex perspiciatis! Alias inventore, accusamus
          quas deserunt excepturi, nesciunt rerum tempora fugit nisi quidem
          autem sit. Magni, voluptates dolorem reiciendis nostrum quia assumenda
          quaerat consectetur natus, rem tempora eius velit atque praesentium
          aspernatur in reprehenderit ducimus neque nisi dolor! In aperiam illo
          temporibus libero soluta praesentium, exercitationem voluptatibus
          esse. Unde repudiandae, obcaecati voluptates ducimus iusto ullam!
          Consequuntur animi facere ipsum at. Veritatis quia suscipit voluptates
          doloremque alias, a ducimus?
        </p>
        <hr class="my-3"/>
        <p class="lead">
          <router-link
            class="btn btn-primary btn-lg"
            :to="{ name: 'posts' }"
            role="button"
          >
            Scopri i posts
          </router-link>
        </p>
      </div>
    </div>
    <!-- /Intro -->
    <div class="container">
        <h2 class="mb-3">Ultimi articoli...</h2>
        <div class="row">
          <div class="col" v-for="post in posts" :key="post.id">
            <div class="card h_special text-start">
              <img
                class="card-img-top"
                :src="'storage/' + post.cover_image"
                alt="post.title"
              />
              <div class="card-body">
                <h4 class="card-title">{{ post.title }}</h4>
                <p class="card-text">{{ trimText(post.content) }}</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- /Posts recenti -->
  </section>
  <!-- /#home_app -->
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      posts: ""
    };
  },
  methods: {
    getCallPosts() {
      axios
        .get("api/posts")
        .then((response) => {
          //console.log(response);
          //console.log(response.data);
          const posts = response.data;
          this.posts = posts.slice(0, 4);
        })
        .catch((e) => {
          console.error(e);
        });
    },
    trimText(text) {
      if (text.length > 100) {
        return text.slice(0, 50) + "...";
      }
      return text;
    }
  },
  mounted() {
    this.getCallPosts();
  },
};
</script>

<style>
</style>