<template>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="#" target="_blank">
        <strong class="log">ShopGlow</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect " href="#"  >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect  " href="#about"  >About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect  " href="#Catégorie">Produit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect B1 " href="/login"  >Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect B1" href="/signup"  >Signup</a>
          </li>
        </ul>

        <!-- Right -->


      </div>

    </div>
  </nav>
</template>

<script>
export default {
  name: "NavBar",
  props: {
    msg: String,
  },
};
</script>
<style scoped>
nav{
  background-color: #00312C;
}
nav ul {
    display: flex;
    flex: 1 1 40rem;
    justify-content:flex-end;
    align-items: center;
    list-style: none;
}
.nav-link{
  color: #ECE5DC !important;
}
.log{
  color:#ECE5DC !important;
}
.B1{
  margin-left: 50px;

}
</style>
