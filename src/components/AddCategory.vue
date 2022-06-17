
<template>
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
                <h5 class="modal-title text-center">
                  Add Category
                </h5>
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
              <input
                  type="submit"
                  class="btn"
                  value="Add Category"
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
       async add() {
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
                    this.$router.push("/category" );
                }
    },
    // mounted() {
    //   //do something after mounting vue instance
    //   console.log('hellow')
    // }
    }
</script>
<style scoped>
  * {
    font-family: "Montserrat", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
  }
  .modal-dialog{
    position: absolute;
      z-index: 16000;
      top: 50%;
      left: 50%;

      -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
      margin-right: -50%;
      padding: 0;

      transform: translate(-50%, -50%);

      -webkit-border-radius: 6px;
         -moz-border-radius: 6px;
              border-radius: 6px;
      background-color: #fff;
      -webkit-box-shadow: 0 0 18px 3px rgba(0, 0, 0, .07);
         -moz-box-shadow: 0 0 18px 3px rgba(0, 0, 0, .07);
              box-shadow: 0 0 18px 3px rgba(0, 0, 0, .07);

      padding: 29px;
  }
  .modal-title{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 32%;
    color: #00312C;
    font-weight: bold;
  }
  .add-category {
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .add-category.heading {
    font-size: 2rem;
    font-weight: bold;
    color: rgb(88, 109, 216);
    margin-bottom: 2rem;
    text-transform: uppercase;
  }
  .add-category form {
    margin: 0 auto;
    max-width: 800px;
    width: 100%;
    display: flex;
    background-color: #fff;
    border-radius: 0.5rem;
    box-shadow: 0 0.5rem 1rem #00312C;
    border: 0.1rem solid #00312C;
    padding: 2rem;
  }
  .add-category form .flex {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
  }
  .add-category form .flex .inputBox {
    flex: 1 1 20rem;
    margin: 0.5rem;
    display: block;
  }
  .add-category form .flex .inputBox .box {
    background-color: #eee;
    color: #333;
    width: 100%;
    border-radius: 5px;
    border: 0.1rem solid #00312C;
    padding: 12px 14px;
    font-size: 15px;
    margin: 5px 0;
  }
  .add-category form .flex .inputBox .box:focus {
    border: 0.1rem solid #00312C;
  }
  .add-category form .flex .inputBox span {
    font-size: 1rem;
    color: #666;
    font-family: "Montserrat", sans-serif;
  }
  .add-category form .flex .inputBox textarea {
    resize: none;
    height: 2.5rem;
  }
  .btn {
    background-color: #00312C;
    width: 50%;
    height: 7vh;
    margin-top: 2.1rem;
    margin-left: 25%;
    color: #fff;
  }
</style>

<!-- <template>
hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
</template>



</style> -->
