<template>
  <div class="nav nav-sidebar sticky-top flex-column vh-100 flex-shrink-0 p-3 text-black" style="width: 250px;">  <span class="fs-4">SheGlow</span>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <a href="/" class="nav-link active" aria-current="page">  <FIcons :icon="['fa','home']"/> <span class="ms-2">Home</span> </a> </li>
        <li> <a href="/" class="nav-link">  <FIcons :icon="['fa','tachometer']"/> <span class="ms-2">Dashboard</span> </a> </li>
        <li> <a href="/CategoryView" class="nav-link">  <FIcons :icon="['fa','list']"/> <span class="ms-2 ">Categories</span> </a> </li>
        <li> <a href="/HuileView" class="nav-link">   <span class="ms-2 A1">Huile</span> </a> </li>
        <li> <a href="/CremeView" class="nav-link">   <span class="ms-2 A1">Créme</span> </a> </li>
        <li> <a href="/MasqueView" class="nav-link">   <span class="ms-2 A1">masque</span> </a> </li>
        <li> <a href="/MessageView" class="nav-link">  <FIcons :icon="['fas','envelope']"/> <span class="ms-2 ">Messages</span> </a> </li>
        <li> <a href="/OrdersView" class="nav-link"> <FIcons :icon="['fa','spinner']"/>  <span class="ms-2 ">Ordered</span> </a> </li>
        <li> <a href="/AccountsView" class="nav-link"> <FIcons :icon="['fas','users']"/>  <span class="ms-2 ">Accounts</span> </a> </li>
    </ul>
    <div class="dropdown"> <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="../assets/h3.jpg" alt="" width="32" height="32" class="rounded-circle me-2"> <strong>Admin</strong> </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item A1" href="/AdminPofile">Profile</a></li>
            <li>
            </li>
            <li><a class="dropdown-item A1" href="/home">logout</a></li>
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
