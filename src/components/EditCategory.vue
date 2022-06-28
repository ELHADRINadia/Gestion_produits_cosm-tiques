<template>
        <div
          id="staticBackdrop"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Update Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="modal-body text-dark bg-light">
                  <form @submit.prevent="update">
                    <div class="form-group">
                      <label for="examplegareA">Name</label>
                      <input type="text" class="form-control" required  v-model="name"/>
                      <input
                        type="submit"
                        value="Submit"
                        class="btn"
                      />
                    </div>
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
     name: "EditCategory",
    components: {},
    data() {
        return {
            editCategory:"" ,
            name: "",
            id: "",
        };
    },
    methods: {
      //   async getSingle(id) {
      //       const res = await fetch(
      // "http://localhost/fill-rouge/backend/CategoryController/getOneCategory/" + id,
      //       {method: "GET", headers: {"Content-Type": "application/json" ,
      //       }
      //       });
      //       const data = await res.json();
      //       console.log(data);
      //       this.editCategory = data;
      //   },

      //   async Add() {
      //   const formData = new FormData();
      //   formData.append("name", this.name);
      //    await fetch(
      //       "http://localhost/fill-rouge/backend/CategoryController/create",
      //       formData
      //     )
      //     .then((Response) => {
      //       console.log(Response.data);
      //        this.$router.go("/category");
      //     });
      // },
      async update() {

          let formData = new FormData()
          formData.append('id',this.id);
          formData.append('name',this.name);
        await fetch("http://localhost/fill-rouge/backend/CategoryController/update", {
          method: "POST",
          body: formData,
        });

        this.$router.push("/category");
      },
    },
    mounted() {
      //do something after mounting vue instance
      console.log('hellow',this.$route.params.id)
      // get one
      var myHeaders = new Headers();
      myHeaders.append("Cookie", "PHPSESSID=fivmpbim9d2stqvup4n98bq9s9");
      var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow'
      };

      fetch("http://localhost/fill-rouge/backend/CategoryController/getOneCategory/"+this.$route.params.id, requestOptions)
        .then(response => response.json())
        .then(result =>
        {  this.name=result.name
          this.id=result.id}

        )
        .catch(error => console.log('error', error));
    }
};
</script>
 <style scoped>
 .modal form .flex .inputBox {
    flex: 1 1 20rem;
    margin: 0.5rem;
    display: block;
  }
  .modal form .flex .inputBox .box {
    background-color: #eee;
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
    background-color: #00312C;
    width: 50%;
    height: 7vh;
    margin-top: 2.1rem;
    padding-left: 0.5rem;
    color:#fff;
  }
  .btn input:focus {
    border: 0.1rem solid #0d61e8;
  }
   h5 {
    color:#00312C;
    font-size: 2.25rem;
    text-align:center;
}
.modal-title{
    color: #00312C;
    font-size: 2rem;
    text-align:center;
    margin-left: 87px;
}
</style>
