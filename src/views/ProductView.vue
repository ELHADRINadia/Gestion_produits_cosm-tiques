<template>
  <NavProduct />
  <section class="page-section" id="Catégorie">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Produit</h2>
    </div>
  </section>
   <section>
  <form @submit.prevent="searchP">
       <label  class="input" for="search"></label>
       <div class="search">
         <input type="text" v-model="search" name="search" placeholder="Type here..." />
         <!--<button @onclick="searchP"><i class="gg-search"></i>search</button> -->
       </div>
       <div>
        <label   class="input" for="category-filter">Category</label>
        <div class="Caté">
          <select id="category-filter">
            <option value="all" s elected>All</option>
            <option value="masque">Masque</option>
            <option value="creme">Creme</option>
            <option value="huiles">Huiles</option>
          </select>
        </div>
      </div>
</form>
  </section>
  <section class="pt-5 pb-5">
  <div class="container">
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
                        <h5 class="font-weight-normal">{{elemt.name}}</h5>
                    <div class="post-meta"><span class="small lh-120"><i class="fas fa-map-marker-alt mr-2"></i></span></div>
                    <div class="d-flex my-4">
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                        <i class="star fas fa-star text-warning"></i>
                        <div class="col pl-0"><span class="text-muted font-small d-block mb-2"><p>{{elemt.details}}</p></span></div>
                    </div>
                    <div class="col pl-0">
                      <h5 class="text-muted font-small d-block mb-2">{{elemt.price}}$</h5>
                    </div>
                    <div class="col col-1" data-label="Payment Status">
                      <button
                        @click= "goTocart"
                      class="btn shopping">
                    <i class="gg-shopping-cart"></i>
                      </button>
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
import NavProduct from "@/components/NavProduct.vue";
import FooterView from "@/components/FooterView.vue";

export default {
  name: "ProductView",
  components: {
    NavProduct,
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
   goTocart(){
     this.$router.push('/cart-list')
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
 color: #000000;
}

</style>
