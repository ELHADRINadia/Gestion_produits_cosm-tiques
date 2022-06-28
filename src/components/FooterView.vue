<template>

  <div class="container">
    <footer class="text-center text-lg-start text-dark">
      <section>
        <div class="container text-center text-md-start mt-5">

          <div class="row mt-3">

            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

              <h6 class="text-uppercase fw-bold"><span>SheGlow</span></h6>
              <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 200px; background-color: #0d42a0; height: 2px"
              />
              <p>
                We offer all the best quality products and services for your
                adorable pets. Lorem ipsum dolor sit, amet consectetur
                adipisicing elit. Corporis, in non.
              </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

              <h6 class="fw-bold">Services</h6>
              <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 100px; background-color: #0d42a0; height: 2px"
              />
              <p>
                <a href="/#" class="A1">Vendre</a>
              </p>
              <p>
                <a href="/#" class="A1">livraison</a>
              </p>
              <p>
                <a href="/#" class="A1">Donner des Conseils</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="fw-bold">Contact</h6>
              <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 100px; background-color: #0d42a0; height: 2px"
              />
              <p><i class="fas fa-home mr-3"></i> Safi, 46000, Maroc</p>
              <p class="text-warning"><i class="fas fa-envelope mr-3"></i>sheglow@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 212 5 123 456 77</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center A1">
        © 2022 Copyright:
        <a class="text-warning" href="https://sheglow.ma/">SheGlow.ma</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
</template>
<script>
  export default {
    name: "FooterView",
    components: {},
  };
</script>

<style scoped>
  .footer {
    margin-top: 15px;
  }
  .container{
  background-color: #00312C;
  }
  section h6 span
   {
      font-family: 'Montserrat', sans-serif;
      /* font: bold; */
      color: #ECE5DC;
      margin-top:auto;
   }
    section h6 {
      font-size: 1.5rem;
        color: #ECE5DC;
    }
    p{
        color: #ECE5DC;
        font-family: 'Montserrat';
    }
    .fw-bold{
      margin:40px;
    }

    .A1{
      color: #ECE5DC;
      text-decoration:none;
    }
</style>
