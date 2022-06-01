<template>
  <div class="small-images">
       <div class="small">
         <img src="../assets/huil-cheveux.jpg" href="#" />
         <div class="overlay">
    <button class="text_img"><a href="/product">Show More</a></button>
  </div>
       </div>
       <div class="small">
         <img src="../assets/masque-v.jpg" href="#" />
         <div class="overlay">
      <button class="text_img"><a href="/product">Show More</a></button>
  </div>
       </div>
       <div class="small">
         <img src="../assets/msg.jpg" href="#"/>
         <div class="overlay">
    <button class="text_img"><a href="/product">Show More</a></button>
  </div>
       </div>
     </div>
</template>
<script>
export default {
  name: "ProImage",
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

.small-images .small {
  padding: 10px;
  margin-bottom: 15px;
  border-radius: 10px;
  transition: filter 0.5s;
  position:relative;
  /* margin-left: 20px;
  margin-right: 10%; */
}

.small-images .small:hover {
  filter: brightness(20%);

}

.small-images .small img {
border-radius: 6%;
  width: 240px;
  height: 300px;
}
.text_img{
text-decoration: none;
display:none;
border-radius: 6px;
background-color: #BB9985;

}
.small:hover .text_img{
text-decoration: none;
display: block;
white-space: nowrap;
color:#00312C;
font-size: 20px;
position: absolute;
overflow: hidden;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
z-index: 10000;
cursor: pointer;

}
</style>
