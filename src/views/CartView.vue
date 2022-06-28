<template>
  <div class="page">
    <NavBar />
    <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                    </div>
                    <div class="d-flex cart flex-row justify-content-between  align-items-center p-2  mt-4 px-3 rounded"  v-for ='(product,index) in products' :key='index'>
                        <div class="mr-1"><img class="rounded" :src="'http://localhost/fill-rouge/backend/images/'+product.image" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details">
                          <span class="name">{{ product.name }}</span> &nbsp;&nbsp;
                            <div class="d-flex flex-row product-desc">
                                <div class="size mr-1"><span class="text-grey">{{ product.details }}</span><span class="font-weight-bold">&nbsp;M</span></div>
                                <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                            <h5 class="text-grey mt-1 mr-1 ml-1">{{ product.quantity }}</h5><i class="fa fa-plus text-success"></i></div>
                        <div>
                            <h5 class="text-grey">{{ product.price }}$</h5>
                        </div>
                        <!-- <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div> -->
                    </div>

                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button></div>

                </div>
            </div>
        </div>
  </div>
</template>

<script>
import NavBar from "@/components/NavBar.vue";
  export default {
    name: "CartView",
    components: {
      NavBar,
    },
    data() {
      return {
        products: "",
        id_user: localStorage.getItem("login"),
        cart: [],
      };
    },
    mounted() {
      this.getCart();
    },
    methods: {
      getCart: async function () {
        const id = JSON.parse(this.id_user);
        let formData = new FormData();
        formData.append("id",id);
         fetch(
            "http://localhost/fill-rouge/backend/PanierController/read",{
              method:"POST",
              body:formData
            }
          )
          .then(res => res.json())
          .then((response) => {
            this.products = response;
            console.log({p : this.products})
          });
      },
    },
  };
</script>
<style scoped>
.cart {
  border :2px solid #eee;
  border-radius: 5px;
}
.name{
  font-family:Montserrat;
  font-weight: bold;
  font-size:17px;
}
</style>
