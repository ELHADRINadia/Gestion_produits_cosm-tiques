<template>
  <div class="container menu">
    <SideBar />
    <div class="col-lg-9 my-lg-0 my-1">
      <div id="main-content">
        <div class="d-flex flex-column">
          <div class="h5">Hello Admin,</div>
          <div>Logged in as: Admin@gmail.com</div>
        </div>
        <div>
          <h1 class="text-center"> Dashboard admin</h1>
        </div>
        <div class="container">
          <div class="col-lg-12">
            <button
            @click= "goToAdd"
             class="float-end btn btn-info">
              <FIcons :icon="['fas', 'user']" />Add

            </button>
            <div class="clearfix"></div>
            </div>
            <hr class="bg-info" />
            <div v-if='dataComming'>
              is loading ....
            </div>
            <table
            v-if='!dataComming'
            class="table table-border table-striped caption-top">
              <caption>
                List of products
              </caption>
              <thead>
                <tr class="text-light text-center color">
                  <th><FIcons :icon="['fas','id-badge']"/> id</th>
                  <th> name</th>
                  <th> price</th>
                  <th> image</th>
                  <th> stock</th>
                  <th> category</th>
                  <th> details</th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="elemt in productData" v-bind:key="elemt.id" class="text-center">
                  <template v-if="editProduct.id == elemt.id">
                    <td>{{elemt.id}}</td>
                    <td><input type="text" v-model="editProduct.name" ></td>
                    <td><input type="text" v-model="editProduct.price" ></td>
                    <td><img class="w-50 p-3" :src="'http://localhost/fill-rouge/backend/images/' + elemt.image" alt="#"/></td>
                    <td><input type="text" v-model="editProduct.quantity" ></td>
                    <td><input type="text" v-model="editProduct.category" ></td>
                    <td><input type="text" v-model="editProduct.details" ></td>
                    <td>
                                    <div class="d-flex flex-row">
                                      <button class="btn btn-danger" @click="del(elemt.id);" >Delete</button>&nbsp;
                                      <button class="btn btn-warning" @click="update(elemt.id);">Update</button>
                                    </div>

                                </td>
                            </template>
                            <template v-else>

                    <td>{{elemt.id}}</td>
                  <td>{{elemt.name}}</td>
                  <td>{{elemt.price}}</td>
                  <td><img class="w-50 p-3" :src="'http://localhost/fill-rouge/backend/images/' + elemt.image" alt=""/></td>
                  <td>{{elemt.quantity}}</td>
                  <td>{{elemt.category}}</td>
                  <td>{{elemt.details}}</td>
                  <td>
                    <div class="d-flex flex-row">
                      <button class="btn btn-danger" @click="del(elemt.id);" >Delete</button>&nbsp;
                      <button class="btn btn-warning" @click="editOne(elemt);">Update</button>
                    </div>

                  </td>
                </template>
              </tr>
        </tbody>
      </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import SideBar from "@/components/SideBar.vue";
  export default {
    name: "DashboardView",
    components: {
      SideBar,
    },
    data(){
      return{
        productData:null,
        name:"",
        price:"",
        image:"",
        quantity:"",
        category:"",
        details:"",
        dataComming:true,
        editProduct:{
              id:'',
              name:'',
              price:'',
              image:'',
              quantity:'',
              category:'',
              details:'',
          },
    };
  },
  mounted(){
     this.getAll();
  },
  methods:{
    async getAll(){
    const response = await fetch('http://localhost/fill-rouge/backend/ProductController/getAll');
    const data = await response.json();
    console.log(data);
    this.productData=data;
    this.dataComming=false;
    },
      async del(id){
        let formData =new FormData();
        formData.append("id",id)
               await fetch('http://localhost/fill-rouge/backend/ProductController/delete',{
                   method:"POST",
                   body:formData

               });
              await this.getAll();
      },
    goToAdd(){
      this.$router.push('/AddProduct')
    },
    created() {
    //do something after creating vue instance
    fetch('http://localhost/fill-rouge/backend/ProductController/getAll')
    .then((response)=>response.json())
    .then((data) =>{
      console.log(data)
      setTimeout(()=>{
          this.dataComming=false
          this.productData = data
      },1400)
    })
  },
  async update(id){
          console.log(this.editProduct);
          this.editProduct.id = id;
         await fetch('http://localhost/fill-rouge/backend/ProductController/update',{
              method: 'POST',
              headers:{
                  'Content-Type': 'application/json',
              },
              body:JSON.stringify(this.editProduct),
          });
          await this.getAll();
          this.editProduct.id='';
          this.editProduct.name='';
          this.editProduct.price='';
          this.editProduct.image='';
          this.editProduct.quantity='';
          this.editProduct.category='';
          this.editProduct.details='';

      },
      async edit(product){
    this.editProduct = product;
    console.log(product);
          },
          editOne(product)
          {
            this.$router.push({ name: 'update', params: { id:product.id }})
          }
      },

  };
</script>

<style scoped>
  .menu {
    display: flex;

  }
  button a{
    text-decoration: none;
  }

  #main-content {
    margin-left: 2rem;
    margin-top: 50px;
    height: 80vh;

  }
  .card-header {
    width: 100%;
    height: 100%;
    background-color: #f5f5f5;
    border-radius: 10px;
    padding: 10px;
  }
  .contenu {
    margin: 5rem;
    margin:40px;
  }
  .card {
    width: 100%;
    height: 100%;
    background-color: #9e2b2b;
    border-radius: 10px;
    padding: 10px;
  }
  @media screen and (max-width: 600px) {
    table {
      border: 0;
    }
      table td::before {
      /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }
  }

  #main-content {
    padding: 30px;
    border-radius: 15px;
  }

  #main-content .h5,
  #main-content .text-uppercase {
    font-weight: 600;
    margin-bottom: 0;
  }

  #main-content .h5 + div {
    font-size: 0.9rem;
  }

  #main-content .box {
    padding: 10px;
    border-radius: 6px;
       width: 260px;
    height: 150px;
  }

  #main-content .box img {
    width: 40px;
    height: 40px;
    object-fit: contain;
  }

  #main-content .box .tag {
    font-size: 0.9rem;
    color: #000;
    font-weight: 500;
  }

  #main-content .box .number {
    font-size: 1.5rem;
    font-weight: 600;
  }

  .order {
    padding: 10px 30px;
    min-height: 150px;
  }

  .order .order-summary {
    height: 100%;
  }

  .order .blue-label {
    background-color: #aeaeeb;
    color: #0046dd;
    font-size: 0.9rem;
    padding: 0px 3px;
  }

  .order .green-label {
    background-color: #a8e9d0;
    color: #008357;
    font-size: 0.9rem;
    padding: 0px 3px;
  }

  .order .fs-8 {
    font-size: 0.85rem;
  }

  .order .rating img {
    width: 20px;
    height: 20px;
    object-fit: contain;
  }

  .order .rating .fas,
  .order .rating .far {
    font-size: 0.9rem;
  }

  .order .rating .fas {
    color: #daa520;
  }

  .order .status {
    font-weight: 600;
  }

  .order .btn.btn-primary {
    background-color: #fff;
    color: #4e2296;
    border: 1px solid #4e2296;
  }

  .order .btn.btn-primary:hover {
    background-color: #4e2296;
    color: #fff;
  }

  .order .progressbar-track {
    margin-top: 20px;
    margin-bottom: 20px;
    position: relative;
  }
  .order .progressbar-track .progressbar {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 0rem;
  }

  .order .progressbar-track .progressbar li {
    font-size: 1.5rem;
    border: 1px solid #333;
    padding: 5px 10px;
    border-radius: 50%;
    background-color: #dddddd;
    z-index: 100;
    position: relative;
  }

  .order .progressbar-track .progressbar li.green {
    border: 1px solid #007965;
    background-color: #d5e6e2;
  }

  .order .progressbar-track .progressbar li::after {
    position: absolute;
    font-size: 0.9rem;
    top: 50px;
    left: 0px;
  }

  #tracker {
    position: absolute;
    border-top: 1px solid #bbb;
    width: 100%;
    top: 25px;
  }

  #step-1::after {
    content: "Placed";
  }

  #step-2::after {
    content: "Accepted";
    left: -10px;
  }

  #step-3::after {
    content: "Packed";
  }

  #step-4::after {
    content: "Shipped";
  }

  #step-5::after {
    content: "Delivered";
    left: -10px;
  }

  /* Backgrounds */
  .bg-purple {
    background-color: #55009b;
  }

  .bg-light {
    background-color: #f0ecec !important;
  }

  .green {
    color: #007965 !important;
  }

  /* Media Queries */
  @media (max-width: 1199.5px) {
    nav ul li {
      padding: 0 10px;
    }
  }

  @media (max-width: 500px) {
    .order .progressbar-track .progressbar li {
      font-size: 1rem;
    }

    .order .progressbar-track .progressbar li::after {
      font-size: 0.8rem;
      top: 35px;
    }

    #tracker {
      top: 20px;
    }
  }

  @media (max-width: 440px) {
    #main-content {
      padding: 20px;
    }

    .order {
      padding: 20px;
    }

    #step-4::after {
      left: -5px;
    }
  }

  @media (max-width: 395px) {
    .order .progressbar-track .progressbar li {
      font-size: 0.8rem;
    }

    .order .progressbar-track .progressbar li::after {
      font-size: 0.7rem;
      top: 35px;
    }

    #tracker {
      top: 15px;
    }

    .order .btn.btn-primary {
      font-size: 0.85rem;
    }
  }

  @media (max-width: 355px) {
    #main-content {
      padding: 15px;
    }

    .order {
      padding: 10px;
    }
  }

  /* general styling */
  body {
    font-family: "Open Sans", sans-serif;
    line-height: 1.25;
  }
  .color{
    background-color:#00312C;
  }
</style>
