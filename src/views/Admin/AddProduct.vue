<template>
  <div class="product">
    <section class="add-products">
      <h1 class="heading">Add Product</h1>
      <form @submit.prevent="addProduct" method="POST" enctype="multipart/form-data">
        <div class="flex">
          <div class="inputBox">
            <span>Product name</span>
            <input
            v-model="productData.name"
              type="text"
              required
              placeholder="enter product name"
              name="name"
              maxlength="100"
              class="box"
            />
          </div>
          <div class="inputBox">
            <span>Price</span>
            <input
            v-model="productData.price"
              type="number"
              min="0"
              max="99999999999"
              required
              placeholder="enter product price"
              name="price"
              class="box"
            />
          </div>
          <div class="inputBox">
            <span>Image</span>
            <input
             @change="uploadImage"
              type="file"
              name="image"
              class="box"
              accept="image/*"
              required
            />
          </div>
          <div class="inputBox">
            <span>Quantity</span>
            <input
            v-model="productData.quantity"
            type="number"
            name="quantity"
            class="box" required />
          </div>
          <div class="form-group inputBox dropdown mt-3">
            <label for="examplegareA">Category</label>
            <select type="text"
            v-model="productData.category"
            class="form-control category"
            name="category"
            placeholder="category"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            id="category-filter">
              <option value="all" s elected>All</option>
              <option value="masque">Masque</option>
              <option value="creme">Creme</option>
              <option value="huiles">Huiles</option>
            </select>
          </div>
          <div class="inputBox">
            <span>product discription</span>
            <textarea
              v-model="productData.details"
              name="details"
              class="box"
              cols="30"
              rows="10"
              placeholder="enter product details"
              required
              maxlength="500"
            ></textarea>
          </div>
          <input
            type="submit"
            value="Add New Product"
            class="btn"
            name="add_product"
          />
        </div>
      </form>
    </section>
  </div>
</template>
<script>
  export default {
    name: "AddProduct",
    data(){
      return{
        productData : {
        name:"",
        price:"",
        image:"",
        quantity:"",
        category:"",
        details:"",
        }
    };
  },
methods:{
  uploadImage(e){
this.productData.image = e.target.files[0];
  },
  async addProduct() {
    let formData = new FormData();
    formData.append('name',this.productData.name);
    formData.append('price',this.productData.price);
    formData.append('image',this.productData.image);
    formData.append('quantity',this.productData.quantity);
    formData.append('category',this.productData.category);
    formData.append('details',this.productData.details);

           let response = await fetch(
               "http://localhost/fill-rouge/backend/ProductController/addproduct",
               {
                   method: "POST", // or 'PUT'
                   body: formData,
               }
           );
           response = await response.json();
           console.log(response);
               this.$router.push("/dashboard/" );
           }
       },
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
  .product {
    background-color: #ECE5DC;
    height: 100vh;
    display: flex;
  }
  .add-products {
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

  }
  .add-products .heading {
    font-size: 2rem;
    font-weight: bold;
    color: #00312C;
    margin-bottom: 2rem;
    text-transform: uppercase;
  }
  .add-products form {
    margin: 0 auto;
    max-width: 800px;
    width: 100%;
    display: flex;
    background-color: #BB9985;
    border-radius: 0.5rem;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    border: 0.1rem solid rgb(157, 157, 157);
    padding: 2rem;
  }
  .add-products form .flex {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
  }
  .add-products form .flex .inputBox {
    flex: 1 1 20rem;
    margin: 0.5rem;
    display: block;
  }
  .add-products form .flex .inputBox .box {
    background-color: #eee;
    color: ;
    width: 100%;
    border-radius: 5px;
    border: 0.1rem solid rgb(157, 157, 157);
    padding: 12px 14px;
    font-size: 15px;
    margin: 5px 0;
  }
  .add-products form .flex .inputBox .box:focus {
    border: 0.1rem solid #0d61e8;
  }
  .add-products form .flex .inputBox span {
    font-size: 1rem;
    color: #666;
    font-family: "Nunito", sans-serif;
  }
  .add-products form .flex .inputBox textarea {
    resize: none;
    height: 2.5rem;
  }
  .btn {
    background-color: #00312C;
    width: 50%;
    height: 7vh;
    margin-top: 2.1rem;
    padding-left: 0.5rem;
    color:#ECE5DC;
  }
  .form-control{
    background-color: #eee;
    border: #1d1f21;
    color: #333;
    border: 0.1rem solid rgb(157, 157, 157);
    width: 100%;
  }

</style>
