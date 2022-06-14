<template>
  <NavBar />
  <section class="page-section" id="Catégorie">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Produit</h2>
    </div>
  </section>
  <!-- <section>
  <div
  v-for = '(item,index) in productData' :key='index'
  class="card">
<img src="../assets/huil-cheveux.jpg" alt="Denim Jeans" style="width:100%">
<h1>
  {{item.name}}
</h1>
<p>$</p>
<p><button><a href="/product">Add to cart</a></button></p>
</div>
  </section> -->
  <section class="pt-5 pb-5">
  <div class="container">
    <form @submit.prevent="searchP">
         <label for="search">Search</label>
         <div class="input">
           <input type="text" v-model="search" name="search" placeholder="Type here..." />
           <!-- <button @onclick="searchP"><i class="gg-search"></i>search</button> -->
           <input type="submit" value="search">
         </div>
         <div class="input">
              <label for="category">Category</label>
              <select id="category">
                <option value="masque">masque</option>
                <option value="Creme">Creme</option>
                <option value="Huiles">Huiles</option>
              </select>
            </div>
       </form>
    <div class="row mb-md-2">
        <div
        v-for = '(elemt,index) in productData' :key='index'
         class="col-md-6 col-lg-4">
            <div class="card shadow-sm border-light mb-4">
                <a href="#" class="position-relative">
                    <!-- <img src="{{item.image}}" class="card-img-top" alt="image"> </a> -->
                    <img :src="'http://localhost/fill-rouge/backend/images/' + elemt.image" class="card-img-top" alt=""/></a>
                    <!-- {{ elemt.image}} -->
                <div class="card-body">
                    <a href="#">
                        <h5 class="font-weight-normal">{{elemt.name}}</h5>
                    </a>
                    <div class="post-meta"><span class="small lh-120"><i class="fas fa-map-marker-alt mr-2"></i></span></div>
                    <div class="d-flex my-4">
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                    <div class="d-flex justify-content-between">
                    </div>
                        <div class="col pl-0"><span class="text-muted font-small d-block mb-2">{{elemt.price}}$</span></div>
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
</template>
<script>
import NavBar from "@/components/NavBar.vue";
import FooterView from "@/components/FooterView.vue";

export default {
  name: "ProductView",
  components: {
    NavBar,
    // ProImage,
    FooterView,

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
      search:""
  };
},
 methods:{
   async getAll(){
   const response = await fetch('http://localhost/fill-rouge/backend/ProductController/getAll');
   const data = await response.json();
   console.log(data);
   this.productData=data;
   },
   async searchP(){
     let formData = new FormData();
     formData.append("search",this.search);
   const response = await fetch('http://localhost/fill-rouge/backend/ProductController/search',{
     method:"POST",
     body:formData
    }
   );
   const data = await response.json();
   console.log(data.products);
   this.productData=data.poducts;
   },
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
       },1600)
     })
   },
};
</script>
<style>
.gg-search{

}
</style>
