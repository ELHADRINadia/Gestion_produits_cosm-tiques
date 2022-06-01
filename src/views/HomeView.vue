<template>
    <NavBar />
    <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenue chez ShopGlow!</div>
                <div class="masthead-heading A2 ">It's Nice To Meet You</div>
                <a class="btn A1 btn-xl " href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">ShopGlow il vous offre son service, grace ses huiles et crémes naturelles, vous deviendrez plus belle.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <h4 class="my-3">Vendre </h4>
                        <p class="text-muted">Notre site vous offre acheter des produits en seul clic.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="my-3">livraison</h4>
                        <p class="text-muted">Juste vos produits preferes, le service de livraison vous les apportera ou que vous soyez.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Donner des Conseils</h4>
                        <p class="text-muted">Nos site Madame vous donne des conseils d'intéret pour votre beauté.</p>
                    </div>
                </div>
            </div>
</section>

<section class="page-section" id="Catégorie">
  <div class="text-center">
      <h2 class="section-heading text-uppercase">Catégorie</h2>
  </div>
<ProImage />
</section>
  <section class="page-section" id="about">
           <div class="container">
               <div class="text-center">
                   <h2 class="section-heading text-uppercase">About</h2>
                   <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
               </div>
               <ul class="timeline">
                   <li>
                       <div class="timeline-image"><img class="rounded-circle img-fluid" src="#" alt="..." /></div>
                       <div class="timeline-panel">
                           <div class="timeline-heading">
                               <h4>2009-2011</h4>
                               <h4 class="subheading">Our Humble Beginnings</h4>
                           </div>
                           <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                       </div>
                   </li>
                   <li class="timeline-inverted">
                       <div class="timeline-image"><img class="rounded-circle img-fluid" src="#" alt="..." /></div>
                       <div class="timeline-panel">
                           <div class="timeline-heading">
                               <h4>March 2011</h4>
                               <h4 class="subheading">An Agency is Born</h4>
                           </div>
                           <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                       </div>
                   </li>
                   <li>
                       <div class="timeline-image"><img class="rounded-circle img-fluid" src="#" alt="..." /></div>
                       <div class="timeline-panel">
                           <div class="timeline-heading">
                               <h4>December 2015</h4>
                               <h4 class="subheading">Transition to Full Service</h4>
                           </div>
                           <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                       </div>
                   </li>
                   <li class="timeline-inverted">
                       <div class="timeline-image"><img class="rounded-circle img-fluid" src="#" alt="..." /></div>
                       <div class="timeline-panel">
                           <div class="timeline-heading">
                               <h4>July 2020</h4>
                               <h4 class="subheading">Phase Two Expansion</h4>
                           </div>
                           <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                       </div>
                   </li>
                   <li class="timeline-inverted">
                       <div class="timeline-image">
                           <h4>
                               Be Part
                               <br />
                               Of Our
                               <br />
                               Story!
                           </h4>
                       </div>
                   </li>
               </ul>
           </div>
       </section>
  <footer>
    <Footer />
  </footer>
</template>

<script>
import NavBar from "@/components/NavBar.vue";
import ProImage from "@/components/ProImage.vue";
import Footer from "@/components/Footer.vue";
export default {
  name: "HomeView",
  components: {
    NavBar,
    ProImage,
    Footer,
  },
};
</script>
<style scoped>
header.masthead {
  padding-top: 10.5rem;
  padding-bottom: 6rem;
  text-align: center;
  color: #fff;
  background-image: url("../assets/back.jpg");
  /* max-width: 100%;
  height: auto; */
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center;
  background-size:cover;
}
header.masthead .masthead-subheading {
  font-size: 1.5rem;
  font-style: italic;
  line-height: 1.5rem;
  margin-bottom: 25px;
  font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  color:#ECE5DC !important;
}
header.masthead .masthead-heading {
  font-size: 3.25rem;
  font-weight: 700;
  line-height: 3.25rem;
  margin-bottom: 2rem;
  font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
.page-section {
  padding: 6rem 0;
}
.page-section h2.section-heading, .page-section .section-heading.h2 {
  font-size: 2.5rem;
  margin-top: 0;
  margin-bottom: 1rem;

}
.page-section h3.section-subheading, .page-section .section-subheading.h3 {
  font-size: 1rem;
  font-weight: 400;
  font-style: italic;
  font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  margin-bottom: 4rem;
}
#services{
  background-color: #BB9985;
}
#Catégorie{
  background-color: #ECE5DC;
}
#about{
  background-color: #BB9985;
}
.A2{
  color:#ECE5DC !important;
}
.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;
}
.text-center {
  text-align: center !important;
}
.A1{
  color:#ECE5DC;
  background-color:#00312C;
}
.text-muted {
  color:black !important;

}
.text-uppercase {
  text-transform: uppercase !important;
  color:#00312C !important;

}
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
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
.col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }

  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .my-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .mb-4 {
  margin-bottom: 1.5rem !important;
}
.mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .timeline {
  position: relative;
  padding: 0;
  list-style: none;
}
.timeline:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 40px;
  width: 2px;
  margin-left: -1.5px;
  content: "";
  background-color: #e9ecef;
}
.timeline > li {
  position: relative;
  min-height: 50px;
  margin-bottom: 50px;
}
.timeline > li:after, .timeline > li:before {
  display: table;
  content: " ";
}
.timeline > li:after {
  clear: both;
}
.timeline > li .timeline-panel {
  position: relative;
  float: right;
  width: 100%;
  padding: 0 20px 0 100px;
  text-align: left;
}
.timeline > li .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline > li .timeline-image {
  position: absolute;
  z-index: 100;
  left: 0;
  width: 80px;
  height: 80px;
  margin-left: 0;
  text-align: center;
  color: white;
  border: 7px solid #e9ecef;
  border-radius: 100%;
  background-color: #ffc800;
}
.timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
  font-size: 10px;
  line-height: 14px;
  margin-top: 12px;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
  padding: 0 20px 0 100px;
  text-align: left;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline > li:last-child {
  margin-bottom: 0;
}
.timeline .timeline-heading h4, .timeline .timeline-heading .h4 {
  margin-top: 0;
  color: inherit;
}
.timeline .timeline-heading h4.subheading, .timeline .timeline-heading .subheading.h4 {
  text-transform: none;
}
.timeline .timeline-body > ul,
.timeline .timeline-body > p {
  margin-bottom: 0;
}

@media (min-width: 768px) {
  .timeline:before {
    left: 50%;
  }
  .timeline > li {
    min-height: 100px;
    margin-bottom: 100px;
  }
  .timeline > li .timeline-panel {
    float: left;
    width: 41%;
    padding: 0 20px 20px 30px;
    text-align: right;
  }
  .timeline > li .timeline-image {
    left: 50%;
    width: 100px;
    height: 100px;
    margin-left: -50px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    font-size: 13px;
    line-height: 18px;
    margin-top: 16px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: left;
  }
}
@media (min-width: 992px) {
  .timeline > li {
    min-height: 150px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px;
  }
  .timeline > li .timeline-image {
    width: 150px;
    height: 150px;
    margin-left: -75px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    font-size: 18px;
    line-height: 26px;
    margin-top: 30px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 20px 20px;
  }
}
@media (min-width: 1200px) {
  .timeline > li {
    min-height: 170px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px 100px;
  }
  .timeline > li .timeline-image {
    width: 170px;
    height: 170px;
    margin-left: -85px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    margin-top: 40px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 100px 20px 20px;
  }
}
.team-member {
  margin-bottom: 3rem;
  text-align: center;
}
.team-member img {
  width: 14rem;
  height: 14rem;
  border: 0.5rem solid rgba(0, 0, 0, 0.1);
}
.team-member h4, .team-member .h4 {
  margin-top: 1.5rem;
  margin-bottom: 0;
}

.img-brand {
  height: 2.75rem;
}

@media (min-width: 768px) {
  header.masthead {
    padding-top: 17rem;
    padding-bottom: 12.5rem;
  }
  header.masthead .masthead-subheading {
    font-size: 2.25rem;
    font-style: italic;
    line-height: 2.25rem;
    margin-bottom: 2rem;
  }
  header.masthead .masthead-heading {
    font-size: 4.5rem;
    font-weight: 700;
    line-height: 4.5rem;
    margin-bottom: 4rem;
  }
}
</style>
