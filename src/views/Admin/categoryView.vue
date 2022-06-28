<template>
  <NavDash />
  <div class="container menu">
    <div class="col-lg-9 my-lg-0 my-1">
      <div id="main-content">
        <div>
          <h1 class="text-center">Categorie</h1>
        </div>
        <div class="container">
          <div class="col-2">
       <router-link
         data-bs-toggle="modal"
         data-bs-target="#addCategory"
         class="btn add_category"
         style="
           width: 137px;
           background-color:#00312C;
           border-color: #fff;
           color: #fff;
         "
         :to="{ path: '/AddCategory' }"
         >Add Category</router-link
       >
     </div>
            <hr class="bg-info" />
            <div v-if='dataComming'>
              is loading ....
            </div>
            <table
            v-if='!dataComming'
            class="table table-border table-striped caption-top">
              <caption>
                List of categorys
              </caption>
              <thead>
                <tr class="text-light text-center color">
                  <th><FIcons :icon="['fas','id-badge']"/> id</th>
                  <th> name</th>
                  <th> Action</th>

                </tr>
              </thead>
              <tbody>
                <tr v-for="elemt in categorie" v-bind:key="elemt.id" class="text-center">
                  <template v-if="editcategory.id == elemt.id">
                    <td>{{elemt.id}}</td>
                    <td><input type="text" v-model="editcategory.name" ></td>
                    <!-- <td>
                                    <div class="d-flex flex-row">
                                      <button class="btn btn-danger" @click="del(elemt.id);" >Delete</button>&nbsp;
                                      <button class="btn btn-warning" @click="update(elemt.id);">Update</button>
                                    </div>

                                </td> -->
                            </template>
                    <template v-else>
                    <td>{{elemt.id}}</td>
                  <td>{{elemt.name}}</td>
                  <td>
                    <div class="d-flex flex-row">
                      <button class="btn delete" @click="delCategory(elemt.id)">
                        <FIcons :icon="['fas', 'trash']" />
                      </button>&nbsp;
                      <button
                       class="btn btn-warning" @click="editOne(elemt);">
                      <FIcons :icon="['fas', 'edit']" /></button>
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
  <EditCategory />
  <AddCategory />
</template>

<script>
  import NavDash from "@/components/NavDash";
  import AddCategory from "@/components/AddCategory.vue";
  export default {
    name: "CategoryView",
    components: {
      NavDash,
      AddCategory,
    },
    data(){
      return{
        categorie:null,
        name:"",
        dataComming:true,
        editcategory:{
              id:'',
              name:'',
          },
    };
  },
  mounted(){
     this.getAll();
  },
  methods:{
    async getAll(){
    const response = await fetch('http://localhost/fill-rouge/backend/CategoryController/getAll');
    const data = await response.json();
    console.log(data);
    this.categorie=data;
    this.dataComming=false;
    },
      async delCategory(id){
        console.log(id);
        let formData =new FormData();
        formData.append("id",id)
               await fetch('http://localhost/fill-rouge/backend/CategoryController/deleteCategory/'+id,{
                   method:"POST",
                   body:formData

               });
              await this.getAll();
      },
    created() {
    //do something after creating vue instance
    fetch('http://localhost/fill-rouge/backend/CategoryController/getAll')
    .then((response)=>response.json())
    .then((data) =>{
      console.log(data)
      setTimeout(()=>{
          this.dataComming=false
          this.category = data
      },1400)
    })
  },
  async update(id){
          console.log(this.editcategory);
          this.editcategory.id = id;
         await fetch('http://localhost/fill-rouge/backend/CategoryController/update',{
              method: 'POST',
              headers:{
                  'Content-Type': 'application/json',
              },
              body:JSON.stringify(this.editcategory),
          });
          await this.getAll();
          this.editcategory.id='';
          this.editcategory.name='';

      },
      async edit(category){
    this.editcategory = category;
    console.log(category);
          },
          editOne(category)
          {
            this.$router.push({ name: 'EditCategory', params: { id:category.id }})
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





















<!-- <template>
  <SideBar />
    <div class="container">
      <h2>List of categories</h2>

      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Name</div>
          <div class="col col-1">Action</div>
        </li>
        <li class="table-row" v-for="category in categories" :key="category.id">
          <div
            class="col col-1"
            style="width=100%;"
            data-label="Customer Name :"
          >
            <div>{{ category.name }}</div>
          </div>
          <div
            class="col col-1"
            style="width='100%'"
            data-label="Payment Status">
            <button class="btn edit">
              <FIcons :icon="['fas', 'edit']" />
            </button>
            <button class="btn delete" @click="delCategory(category.id)">
              <FIcons :icon="['fas', 'trash']" />
            </button>
          </div>
        </li>
      </ul>
    </div>

</template>

<script>
  import SideBar from "@/components/SideBar.vue";

  export default {
    name: "CategoryView",
    components: {
      SideBar,

    },
    data() {
      return {
        categories: [],
      };
    },
    mounted() {
      this.getCategories();
    },
    methods:{
      async getCategories(){
      const response = await fetch('http://localhost/fill-rouge/backend/ProductController/getCategory');
      const data = await response.json();
      console.log(data);
       this.categories = response.data;
      },
      async delCategory(id) {
        console.log(id);

        const response  = await fetch(
          "http://localhost/fil-rouge/pet-shop/Backend/CategoryController/deleteCategory/" +
            id,
          {
            method: "POST",
          }
        );
        const data = await response.json();
        console.log(data);
        this.$router.push("/CategoryView");
        this.getCategories();
      },
    },
  };

</script>

<style scoped>
  .menu {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 2rem;
  }

  .add_category {
    border-color: #f1f1f1;
    margin-bottom: 1rem;
    border-radius: 5px;
    font-family: "Roboto", sans-serif;
    margin-left: 52rem;
    width: 147px;
  }
  .add_category:hover {
    background-color: rgb(50, 73, 189);
  }
  .col-lg-9 {
    position: absolute;
    top: 20%;
    left: 10%;
    display: flex;
    width: 900px;
    z-index: 10;
    justify-content: end;
  }

  .container {
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 10px;
    padding-right: 10px;
  }
  h2 {
    font-size: 26px;
    margin: 20px 0;
    text-align: center;
  }
  h2 small {
    font-size: 0.5em;
  }
  .responsive-table li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
    align-items: center;
  }
  .responsive-table .table-header {
    background-color: #00312C;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    color:#fff;
  }
  .responsive-table .table-row {
    background-color: #fff;
    box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
  }
  .responsive-table .col-1 {
    flex-basis: 10%;
  }
  .col .edit {
    color: #fff;
    background-color: #00c851;
    border-radius: 3px;
    padding: 5px;
    margin-right: 10px;
  }
  .col .delete {
    color: #fff;
    background-color: #f44336;
    border-radius: 3px;
    padding: 5px;
    margin-right: 10px;
  }
  .col .edit:hover {
    text-decoration: none;
    color: #fff;
    background-color: #048e0d;
    border-radius: 3px;
    padding: 5px;
    margin-right: 10px;
    cursor: pointer;
  }
  .col .delete:hover {
    text-decoration: none;
    color: #fff;
    background-color: #a30606;
    border-radius: 3px;
    padding: 5px;
    margin-right: 10px;
    cursor: pointer;
  }

  @media all and (max-width: 767px) {
    .responsive-table .table-header {
      display: none;
    }
    .responsive-table li {
      display: block;
    }
    .responsive-table .col {
      flex-basis: 100%;
    }
    .responsive-table .col {
      display: flex;
      padding: 10px 0;
    }
    .responsive-table .col:before {
      color: #6c7a89;
      padding-right: 10px;
      content: attr(data-label);
      flex-basis: 50%;
      text-align: right;
    }
  }
</style> -->
