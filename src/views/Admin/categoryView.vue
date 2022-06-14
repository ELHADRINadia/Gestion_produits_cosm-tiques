<template>
  <div class="menu">
    <SideBar />
    <div class="col-lg-9 my-lg-0 my-1">
      <div id="main-content" class="bg-white border">
        <a
          href="/AddCategory"
          class="btn add_product btn-primary"
          style="width: 250px; background-color: #f29b12; border-color: #fff"
          >Add category</a
        >

        <table>
          <thead>
            <tr>
              <th class="text-center">Number</th>
              <th class="text-center">Category</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td class="text-center">Masque</td>
              <td class="text-center">
                <span class="action_btn">
                  <button
                    type="button"
                    class="btn btn-outline-dark"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                    v-on:click="edit()"
                  >
                    Edit
                  </button>
                  <button type="button" class="btn">Remove</button>
                </span>
              </td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td class="text-center">Creme</td>
              <td class="text-center">
                <span class="action_btn">
                  <button
                    type="button"
                    class="btn btn-outline-dark"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"

                  >
                    Edit
                  </button>
                  <button type="button" class="btn">Remove</button>
                </span>
              </td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td class="text-center">Huile</td>
              <td class="text-center">
                <span class="action_btn">
                  <button
                    type="button"
                    class="btn btn-outline-dark"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"

                  >
                    Edit
                  </button>
                  <button type="button" class="btn">Remove</button>
                </span>
              </td>
            </tr>
          </tbody>
        </table>

        <!-- Modal For Edit Product-->
        <div
          class="modal fade"
          id="staticBackdrop"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-center">
                  Edit Category
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
                  <form action="#" method="POST">


                    <div class="form-group">
                      <label for="examplegareA">Name</label>
                      <input type="text" class="form-control" name="name" />
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <input
                  type="submit"
                  value="Submit"
                  class="btn"
                  name="edit_product"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import SideBar from "@/components/SideBar.vue";
  export default {
    name: "AddCategory",
    components: {
      SideBar,
    },
    // data() {
    //   return {
    //     email: "",
    //     password: "",
    //   };
    // },
  //   methods: {
  //     edit() {
  //
  //     },
  //     delete() {
  //
  // }
  // }
  }
</script>

<style scoped>
  .menu {
    display: flex;
  }

  #main-content {
    margin: 2rem;
    height: 100%;
  }

  .add_product {
    margin: 20px;
    background-color: #2980b9;
  }

  #main-content {
    padding: 30px;
    border-radius: 15px;
  }
  table {
    width: 100%;
    font-size: 13px;
    color: rgb(0, 0, 0);
    white-space: nowrap;
    border-collapse: collapse;
    border-radius: 10px;
  }

  table > thead {
    background-color: rgb(255, 255, 255);
    color: rgb(52, 51, 51);
    font-weight: bold;
    font-family: "nunito", sans-serif;
  }

  table > thead th {
    padding: 15px;
  }

  table th,
  table td {
    border: 4px solid #00000017;
    padding: 10px 15px;
  }

  table > tbody > tr > td > img {
    display: inline-block;
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 2px 6px #0003;
  }

  .action_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
  }

  .action_btn > button {
    text-decoration: none;
    color: #444;
    background: #fff;
    border: 1px solid;
    display: inline-block;
    padding: 7px 20px;
    font-weight: bold;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
  }

  .action_btn > button:nth-child(1) {
    border-color: #26a69a;
  }
  .icon {
    font-size: 23px;
    color: rgb(130, 86, 2);
  }

  .icon-edit:hover {
    color: #26a69a;
  }
  .icon-delete:hover {
    color: #f44336;
  }
  .icon-delete {
    padding-left: 40px;
  }
  .action_btn > button:nth-child(2) {
    border-color: orange;
  }

  .action_btn > a:hover {
    box-shadow: 0 3px 8px #0003;
  }

  table > tbody > tr {
    background-color: #fff;
    transition: 0.3s ease-in-out;
  }

  table > tbody > tr:nth-child(even) {
    background-color: rgb(238, 238, 238);
  }
  table > tbody > tr[data-v-5364947d]:nth-child(even) {
    background-color: rgb(255 255 255);
  }

  table > tbody > tr:hover {
    filter: drop-shadow(0px 2px 6px #0002);
  }
  .modal form .flex .inputBox {
    flex: 1 1 20rem;
    margin: 0.5rem;
    display: block;
  }
  .modal form .flex .inputBox .box {
    background-color: #eee;
    color: #333;
    width: 100%;
    border-radius: 5px;
    border: 0.1rem solid #333;
    padding: 12px 14px;
    font-size: 15px;
    margin: 5px 0;
  }
  .modal form .flex .inputBox .box:focus {
    border: 0.1rem solid #0d61e8;
  }
 .form-group textarea {
    resize: none;
    height: 2.5rem;
  }
  .btn {
    background-color: #2980b9;
    width: 50%;
    height: 7vh;
    margin-top: 2.1rem;
    padding-left: 0.5rem;
  }
  .btn input:focus {
    border: 0.1rem solid #0d61e8;
  }
  .h5, h5 {
    color:#ff7200;
    font-size: 2.25rem;
    text-align:center;
}
.modal-title{
    color: #f39c12;
    font-size: 2rem;
    text-align:center;
    margin-left: 87px;
}
</style>
