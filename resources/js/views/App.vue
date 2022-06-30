<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Boolpress
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto" v-for>
                    <li class="nav-item">
                        <a class="nav-link" href="">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <router-link :to="/">Go to Home</router-link>
    <router-link :to="/about">Go to Home</router-link>
    <router-link :to="/posts">Go to Home</router-link>

    <router-view></router-view>
  </div>
</template>


<script>
export default {
  name: "App",
  data(){
    return{
      
    }
  }
};
</script>