<template>
  <div class="small">
    <img src="../assets/masque-v.jpg" />
    <div class="overlay">
<div class="text_img">Show More</div>
</template>
<script>
export default {
  name: "ProDuit",
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
display:none;
}
.small:hover .text_img{
display: block;
white-space: nowrap;
color:#ECE5DC;
font-size: 20px;
position: absolute;
overflow: hidden;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
z-index: 10000;

}
</style>
