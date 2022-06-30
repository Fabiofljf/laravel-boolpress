<template>
  <div id="site_app">
    <header id="site_header_app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
          <router-link class="logo" :to="{ name: 'home' }">Boolpress</router-link>
          <!-- /Logo ->indirizzamento alla home -->
          <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
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
          </div>
          <!-- /Barra di navigazione -->
        </div>
      </nav>
    </header>
    <!-- /#site_header_app -->
    <main id="site_main_app">
      <router-view></router-view>
    </main>
    <!-- /#site_main_app -->
    <footer id="site_footer_app" class="text-center my-5">Copyrigth©</footer>
    <!-- /#site_footer_app -->
  </div>
</template>


<script>
export default {
  name: "App",
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
.logo {
  font-size: 35px;
  display: flex;
  flex-grow: 0.5;
}

.menu{
      flex-grow: 1;
}

li {
  list-style-type: none;
  margin-right: 10px;
  font-size: 1rem;
}

a {
  text-decoration: none;
}
</style>