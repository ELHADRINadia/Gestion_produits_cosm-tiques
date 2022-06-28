
<template>
  <!-- <div class="modal fade" id="addCategory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

          <form v-on:submit.prevent="Add()">
            <div class="modal-header">
              <h5 class="modal-title">Modal Login Form</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                  <label for="Username">Name<span class="text-danger">*</span></label>
                  <input type="text" v-model="name" class="form-control" placeholder="Enter categoty name">
              </div>
            </div>
            <div class="modal-footer pt-4">
              <button
               type="button"
               class="btn btn-success mx-auto w-100"
                 value="Add"
               >Add Category</button>
            </div>
        </form>
      </div>
    </div>
  </div> -->


   <div
      class="modal fade"
          id="addCategory"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <div class="modal-body text-dark bg-light">
                  <form  v-on:submit.prevent="Add()">
                    <div class="form-group">
                      <label for="examplegareA">Name</label>
                      <input type="text" class="form-control" v-model="name" required aria-describedby="emailHelp"/>
                    </div>
                    <br><br>
              <input
                  type="submit"
                  @click= "goToCategoryView()"
                  class="btn"
                  value="Add"
                />
                  </form>
                </div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
</template>
<script>
  export default {
    name: "AddCategory",
    components: {},

    data() {
      return {
        name: "",
      };
    },
     methods: {
       async Add() {
         let formData = new FormData();
         formData.append('name',this.name);
                let response = await fetch(
                    "http://localhost/fill-rouge/backend/CategoryController/addcategory",
                    {
                        method: "POST", // or 'PUT'
                        body: formData,
                    }
                );
                response = await response.json();
                console.log(response);
              },
          goToCategoryView(){
          this.$router.push('/category')
                },

    },
  };
</script>
<style scoped>
.btn{
  background-color:#00312C;
  color:#fff;
}
</style>
