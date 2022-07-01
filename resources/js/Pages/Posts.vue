<template>
  <main id="site_main">
    <WorkInProgress />
    <div class="container">
      <div class="row">
        <div class="col-10 d-flex flex-wrap">
          <div class="row row-cols-5">
            <div class="col" v-for="post in posts" :key="post.id">
              <div class="card h_special text-start">
                <img
                  class="card-img-top"
                  style="width:195px;height:160px;"
                  :src="'storage/' + post.cover_image"
                  alt="post.title"
                />
                <div class="card-body">
                  <h4 class="card-title">{{ post.title }}</h4>
                  <p class="card-text">{{ trimText(post.content) }}</p>
                </div>
                <router-link class="btn btn-primary" :to="{name: 'post', params: {slug: post.slug}}">Visualizza</router-link>
              </div>
            </div>
            <!-- /.col Posts-->
          </div>
        </div>
        <!-- /.col sx-->
        <div class="col">
          <div class="col bg-dark text-light rounded shadow p-3">
            <h4 class="p-2"><strong>Categories:</strong></h4>
            <ul>
              <li class="btn btn-secondary m-2" v-for="category in categories" :key="category.id">{{ category.name }}</li>
            </ul>
          </div>
          <!-- /.col Tags-->
          <div class="col mt-4 bg-dark text-light rounded shadow p-3">
            <h4 class="p-2 ms-4"><strong>Tags:</strong></h4>
            <ul>
              <li class="btn btn-primary m-2" v-for="tag in tags" :key="tag.id">{{ tag.name }}</li>
            </ul>
          </div>
          <!-- /.col Categories-->
        </div>
        <!-- /.col dx-->
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item" v-if="posts.current_page > 1">
            <a
              class="page-link"
              href="#"
              aria-label="Previous"
              @click="getAllPosts(posts.current_page - 1)"
            >
              <span aria-hidden="true">&laquo;</span>
              <span class="visually-hidden">Previous</span>
            </a>
          </li>
          <li
            :class="{
              'page-item': true,
              active: posts.current_page == page,
            }"
            v-for="page in posts.last_page"
            :key="page"
          >
            <a class="page-link" href="#" @click="getCallPosts(page)">{{
              page
            }}</a>
          </li>
          <li class="page-item" v-if="posts.current_page < posts.last_page">
            <a
              class="page-link"
              href="#"
              aria-label="Next"
              @click="getCallPosts(posts.current_page + 1)"
            >
              <span aria-hidden="true">&raquo;</span>
              <span class="visually-hidden">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </main>
</template>


<script>
import WorkInProgress from "../components/WorkInProgress";
export default {
  name: "Home",
  components: {
    WorkInProgress,
  },
  data() {
    return {
      posts: "",
      categories: "",
      tags: "",
    };
  },
  methods: {
    getCallPosts(postPage) {
      axios
        .get("api/posts", {
          params: {
            page: postPage,
          },
        })
        .then((response) => {
          //console.log(response);
          console.log(response.data);
          this.posts = response.data;
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
    },
    getCallCategories() {
      axios
        .get("/api/categories")
        .then((response) => {
          this.categories = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },
    getCallTags() {
      axios
        .get("/api/tags")
        .then((response) => {
          this.tags = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },
  },
  mounted() {
    this.getCallPosts();
    this.getCallCategories();
    this.getCallTags();
  },
};
</script>

<style lang="scss" scoped>
li {
  list-style-type: none;
}
.h_special {
  height: 450px;
}
</style>
