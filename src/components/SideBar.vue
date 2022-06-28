 to<template>
  <div class="nav nav-sidebar sticky-top flex-column vh-100 flex-shrink-0 p-3 text-black" style="width: 250px;">  <span class="fs-4">SheGlow</span>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <router-link to="/" class="nav-link active" aria-current="page">  <FIcons :icon="['fa','home']"/> <span class="ms-2">Home</span> </router-link> </li>
        <li> <router-link to="/dashboard" class="nav-link">  <FIcons :icon="['fa','tachometer']"/> <span class="ms-2">Dashboard</span> </router-link> </li>
        <li> <router-link to="/category" class="nav-link">  <FIcons :icon="['fa','list']"/> <span class="ms-2 ">Categories</span> </router-link> </li>
        <li> <router-link to="/MessageView" class="nav-link">  <FIcons :icon="['fas','envelope']"/> <span class="ms-2 ">Messages</span> </router-link> </li>
        <li> <router-link to="/OrdersView" class="nav-link"> <FIcons :icon="['fa','spinner']"/>  <span class="ms-2 ">Ordered</span> </router-link> </li>
        <li> <router-link to="/AccountsView" class="nav-link"> <FIcons :icon="['fas','users']"/>  <span class="ms-2 ">Accounts</span> </router-link> </li>
    </ul>
    <div class="dropdown"> <router-link  to="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="../assets/h3.jpg" alt="" width="32" height="32" class="rounded-circle me-2"> <strong>Admin</strong> </router-link>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><router-link class="dropdown-item A1"  to="/AdminPofile">Profile</router-link></li>
            <li><router-link class="dropdown-item A1"  to="/home">logout</router-link></li>
        </ul>

    </div>
</div>


</template>
<script>
export default {
     name: 'SideBar',
  components: {

  }
}
</script>
<style scoped>
.side-bar {
    background-color: #00312C;
}
.nav-pills .nav-link.active, .nav-pills .show .nav-link .A1 {
    color: #fff;
    background-color: #BB9985;
}
.A1 a{
  text-decoration: none;
  color:#00000;
}
</style>
