<template>
  <NavBar />
  <section class="page-section" id="Catégorie">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Produit</h2>
    </div>
  <ProImage />
  <ProImage />
  </section>
</template>
<script>
import NavBar from "@/components/NavBar.vue";
import ProImage from "@/components/ProImage.vue";
export default {
  name: "ProductView",
  components: {
    NavBar,
    ProImage,
  },
};
</script>
