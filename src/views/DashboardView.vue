<template>
  <div>
    <h1 class="text-center"> Dashboard admin</h1>
  </div>
  <div class="container">
    <div class="col-lg-12">
      <button class="float-end btn btn-info">
        <FIcons :icon="['fas', 'user']" />Add New Product
      </button>
      <button class="float-start btn btn-danger">
        <FIcons :icon="['fas', 'user-times']" />Delete All Product
      </button>
      <div class="clearfix"></div>
      </div>
      <hr class="bg-info" />
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
      </button>
      </div>
      <table class="table table-border table-striped caption-top">
        <caption> list of registered product(4)</caption>
        <thead>
          <tr class="bg-success text-light text-center">
            <th><FIcons :icon="['fas','id-badge']"/> id</th>
            <th><FIcons :icon="['fas','user']"/> Nom</th>
            <th><FIcons :icon="['fas','envelope']"/> prix</th>
            <th><FIcons :icon="['fas','phone']"/> reference</th>
            <th><FIcons :icon="['fas','cog']"/> stock</th>
            <th><FIcons :icon="['fas','cog']"/> Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
          <td>1</td>
          <td>masque</td>
          <td>200$</td>
          <td>123445566</td>
          <td>300</td>
          <td>
            <button class="btn btn-danger">Delete</button>&nbsp;
              <button class="btn btn-warning ">Update</button>
          </td>
        </tr>
        <tr class="text-center">
        <td>1</td>
        <td>masque</td>
        <td>200$</td>
        <td>123445566</td>
        <td>300</td>
        <td>
          <button class="btn btn-danger">Delete</button>&nbsp;
            <button class="btn btn-warning ">Update</button>
        </td>
      </tr>
      <tr class="text-center">
      <td>1</td>
      <td>masque</td>
      <td>200$</td>
      <td>123445566</td>
      <td>300</td>
      <td>
        <button class="btn btn-danger">Delete</button>&nbsp;
          <button class="btn btn-warning ">Update</button>
      </td>
    </tr>
        </tbody>
      </table>
      </div>
  </template>
  <script>
  // import NavBar from "@/components/NavBar.vue";
  export default {
    name: "DashboardView",
    components:{
    },
  };
  </script>
<style>
</style>
