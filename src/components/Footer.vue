<template>
  <footer class="footer py-4">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                   <div class="col-lg-4 my-3 my-lg-0">
                       <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                       <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                       <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                   </div>
                   <div class="col-lg-4 text-lg-end">
                       <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                       <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                   </div>
               </div>
           </div>
       </footer>
</template>

<script>
export default {
  name: "FooTer",
  props: {
    msg: String,
  },
};
</script>
<style scoped>
.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}
.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.6666666667%;
}
.col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
.align-items-center {
  align-items: center !important;
}
</style>
