<template>
<div>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="#" target="_blank">
        <strong class="log">SheGlow</strong>
      </a>
      &nbsp;&nbsp;&nbsp;
      <form @submit.prevent="searchP">
           <label  class="input" for="search"></label>
           <div class="input-group">
               <input class="form-control" name="searchP" v-model="search" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
               <button class="btn btn-btn" id="btnNavbarSearch" name="submit" type="submit"><i class="fas fa-search"></i></button>
           </div>
    </form>
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
            <a class="nav-link waves-effect " href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect  " href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect  " href="#Catégorie">Produit</a>
          </li>
          <li class="nav-item">
            <div class="col col-1" data-label="Payment Status">
            </div>
            <div class="icon-badge-container">
      <i class="gg-shopping-cart " @click= "goTocart"></i>
      <div class="icon-badge">
        {{ count }}
      </div>
    </div>
          </li>
          <li class="nav-item">
            <a class="nav-link B1" @click="logout">logout</a>
          </li>
        </ul>
      </div>
 :{{cart}}
    </div>
  </nav>
  <section
  style="margin-top: 100px;"
  class="page-section " id="Catégorie">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Nous Produits</h2>
    </div>
  </section>
   <section class="mt-5">
  </section>
  <section class="pt-5 pb-5">
  <div class="container">
    <div class="row mb-md-2">
        <div
        v-for = '(elemt,index) in productData' :key='index'
         class="col-md-6 col-lg-4">
            <div class="card shadow-sm border-light mb-4">
                <a href="#" class="position-relative">
                    <img :src="'http://localhost/fill-rouge/backend/images/' + elemt.image" class="card-img-top" alt=""/></a>
                <div class="card-body">
                        <h5 class="font-weight-normal">{{elemt.name}}</h5>
                    <div class="post-meta"><span class="small lh-120"></span></div>
                    <div class="d-flex my-4">
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                        <div class="col pl-0"><span class="text-muted font-small d-block mb-2 mt-5"><p>{{elemt.details}}</p></span></div>
                    </div>
                    <div class="A1">
                    <div class="">
                      <h5 class="font-small d-block mb-2 myy">{{elemt.price}}$</h5>
                    </div>
                    <div class="" data-label="Payment Status">
                      <button
                      @click="addToCartHandler(elemt.id)"
                       class="badge bg-type mxx"> Add To Cart
                      </button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
</div>
</section>
  <footer>
    <FooterView />
  </footer>
</div>
</template>
<script>
import FooterView from "@/components/FooterView.vue";
export default {
  name: "ProductView",
  components: {
  },
  FooterView,
  data(){
    return{
      id_user:localStorage.getItem('login'),
      productData:null,
      name:"",
      price:"",
      image:"",
      quantity:"",
      category:"",
      details:"",
      dataComming:true,
      search:"",
      count:0,
      cart:[],
      id_product:''
  };
},
beforeMount() {
      if (localStorage.getItem("TypeCategory"))
        this.categ = localStorage.getItem("TypeCategory");
    },
    mounted(){
      this.calc();
    },
 methods:{
     async addToCartHandler(elem){
      this.id_product=elem
       let productCart = new FormData();
       productCart.append("id_user", this.id_user);
       productCart.append("id_product", this.id_product);
       productCart.append("quantity", 1);
      let response = await fetch(
          "http://localhost/fill-rouge/backend/PanierController/addToCart",
          {
              method: "POST", // or 'PUT'
              body: productCart,
          }
      );
      if(response.status==200){
        console.log('added');
        this.calc();
      }
     },
    async searchP(){
     let formData = new FormData();
     formData.append("search",this.search);
   const response =await fetch('http://localhost/fill-rouge/backend/ProductController/search',{
     method:"POST",
     body:formData
    }
   );
   const data = await response.json();
   console.log(data.products);
   this.productData=data.products;
   },
   goTocart(){
     this.$router.push('/cart-list')
   },
   async calc()
   {
     let id=JSON.parse(localStorage.getItem('login'));
     let formData = new FormData();
     formData.append("id",id);

     console.log(id);
      let res= await fetch("http://localhost/fill-rouge/backend/PanierController/coun/"+id,{
        method:"POST",
        body:formData
      });
      res = await res.text()
      this.count=res;
     // this.count=res;:
   },
    logout(){
     fetch('http://localhost/fill-rouge/backend/UserController/logout').then(()=> {
       localStorage.clear();
       this.$router.push('/')
     })

   }
 },
   created() {
     //do something after creating vue instance
     fetch('http://localhost/fill-rouge/backend/ProductController/getAll')
     .then((response)=>response.json())
     .then((data) =>{
       console.log(data)
           this.dataComming=false
           this.productData = data
     })


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
  background-color:#00312C;
 color:#ECE5DC;

}
.shopping{
color:#ECE5DC  !important;
}
.icon-badge-group .icon-badge-container {
  display: inline-block;
  margin-left: 15px;
}

.icon-badge-group .icon-badge-container:first-child {
  margin-left: 0
}

.icon-badge-container {
  margin-top: 20px;
  position: relative;
}

.icon-badge-icon {
    color: white;
  font-size: 30px;
  position: relative;
}

.icon-badge {
  background-color: red;
  font-size: 12px;
  color: white;
  text-align: center;
  width: 20px;
  height: 20px;
  border-radius: 35%;
  position: relative;
  top: -35px;
  left: 17px;
}
i{
    color: #ECE5DC;
}
.btn-btn{
  background-color:#BB9985;
}
.textt:hover{
color:#BB9985;
}
.container .search{
  float: right;
  padding: 6px;
  border: 2px;
  border-radius: 16px;
  border-color: #00312C;
  margin-top: 8px;
  margin-right: 16px;
  font-size:20px;
  width:535px;
  height: 133px;
}
h5
{
 color:#00312C;
}
.sel
{
font-family: Montserrat;
font-size: 17px;
color:#00312C;
}
.myy{
  /* margin-left: 70%; */
  color: #BB9985;
}
.mxx{
  background-color: #00312C;
}
.A1{
  display: flex;
  justify-content: flex-end;
      /* flex-wrap: nowrap; */
  align-items: center;
  justify-content: space-between;
}


</style>
