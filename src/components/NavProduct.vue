<template>
  <!-- Nav Bar -->
  <div class="home">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <div class="navbar-brand text-dark" href="/">Sheglow</div>
        <button
          class="navbar-toggler btn-dark"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark link-r" href="/"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark link-r" href="/About"
                >About</a>
            </li>
            <li class="nav-item">
              <div class="nav-link text-dark link-r">
                <div class="dropdown">
                  <a
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Categories
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li v-for="category in categories" :key="category.id">
                      <a
                        class="nav-link text-dark link-r"
                        v-on:click="SettingCategoryName(category.name)"
                      >
                        {{ category.name }}
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item" v-if="isLoggedIn" v-on:click="logout">
              <a class="nav-link text-dark link-r" href="/loginView"
                >
                {{ firstName }} {{ lastName }}
              </a>
            </li>
            <li class="nav-item" v-else >
              <a class="nav-link text-dark link-r" href="/loginView"
                >Login
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark link-r" href="/MyCart"
                > <FIcons class="icon" :icon="['fas', 'shopping-cart']" /><span>({{cart?cart.length:0}})</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
  import axios from "axios";
  export default {
    name: "NavBar",
    components: {},
    data() {
      return {
        cat: "",
        categories: [],
        isLoggedIn: false,
        firstName:"",
        lastName:"",
        cart:[]
      };
    },
    mounted() {

      this.getCategories();
      this.getCartItems();
      if (localStorage.getItem("login")) {
        const data = JSON.parse(localStorage.getItem("login"));
        this.firstName = data.client.firstname;
        this.lastName = data.client.lastname;
        this.isLoggedIn = true;
      }
    },
    methods: {
      logout(){
      localStorage.removeItem('login');
      this.isLoggedIn = false;
      this.$router.push('/');
    },
      SettingCategoryName: function (name) {
        localStorage.setItem("TypeCategory", name);
        if (this.$route.name == "PetProduct") {
          this.$router.go();
        } else this.$router.push("/PetProduct");
      },
      getCategories: async function () {
        const response = await axios.get(
          "http://localhost/fil-rouge/pet-shop/Backend/CategoryController/read"
        );
        this.categories = response.data;
      },

      // *******************************************************************************************************

      getCartItems:  async function () {
        const response = await axios.get(
          "http://localhost/fil-rouge/pet-shop/Backend/CartController/read/"+JSON.parse(localStorage.getItem("login")).client.id_client
        );
        this.cart = response.data;
        console.log(response.data);
      },

    },
  };
</script>

<style scoped>

 * {
    font-family: "Montserrat", sans-serif;
    box-sizing: border-box;
  }
  .link-r {
    font-family: "Montserrat";
    font-size: 14px;
  }
  .nav-item:hover {
    text-decoration: underline;
  }
  .container h4 {
    font-family: "Montserrat";
    font-weight: bold;
    color: rgb(5, 5, 5);
  }
  .navbar-brand {
    font-weight: bold;
    font-size: 2.5rem;
    color: black;
  }
  .navbar-brand span {
    color: #f29b12;
  }
  .navbar-toggler {
    border: none;
  }
  .btn {
    padding: 0;
    color: #212529;
    font-size: 14px;
  }
  .dropdown-item {
    font-size: 14px;
    color: #212529;
  }


.navbar-dark .navbar-nav .nav-link a{
  cursor: pointer;
}
.nav-item .icon{
 font-size: 22px;
  color: #f29b12;
}
.nav-item .icon:hover{
  color: #f29b12;
}
</style>
