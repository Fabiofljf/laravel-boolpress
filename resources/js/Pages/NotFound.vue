<template>
<section id="post_app">
  <h2 class="p-3">Errore, pagina non trovata! Mi dispiace, priva a controllare qui:</h2>
    <ul class="navbar-nav mr-auto">
              <li
                class="nav-item"
                v-for="item in menuItems"
                :key="item.id"
              >
                <router-link :to="{ name: item.route_link }">{{
                  item.route_name
                }}</router-link>
              </li>
            </ul>
</section>
<!-- /#post_app -->
</template>

<script>
export default {
  name: "Post",
  data() {
    return {
      menuItems: [
        {
          id: 1,
          route_name: "Home",
          route_link: "home",
        },
        {
          id: 2,
          route_name: "About",
          route_link: "about",
        },
        {
          id: 3,
          route_name: "Posts",
          route_link: "posts",
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>

</style>