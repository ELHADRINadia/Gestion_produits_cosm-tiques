<template>
  <div class="small-images">
    <div class="card">
<img src="../assets/huil-cheveux.jpg" alt="Denim Jeans" style="width:100%">
<h1>Huile Cheveux</h1>
<p><button><a href="/product">Show More</a></button></p>
</div>
<div class="card">
<img src="../assets/huile4.jpg" alt="Denim Jeans" style="width:100%">
<h1>Huile Visage</h1>
<p><button><a href="/product">Show More</a></button></p>
</div>
<div class="card">
<img src="../assets/sss.jpg" alt="Denim Jeans" style="width:100%">
<h1>Cheveux & Visage</h1>
<p><button><a href="/product">Show More</a></button></p>
</div>
     </div>
</template>
<script>
export default {
  name: "CategorieImg",
  props: {
    msg: String,
  },
};
</script>
<style scoped>
.small-images {
  margin-top: 30px;
  align-items: center;
  display: flex;
  /* margin-left: 15%; */
  justify-content: space-evenly;
}

.card {
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  border-bottom-right-radius: 70px;

}
img{
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
 width: 40%;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  background-color: #00312C;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
  border-radius: 6px;
}
.card button a{
text-decoration: none;
color:#ECE5DC ;
}

.card button:hover {
  opacity: 0.7;
}
</style>
