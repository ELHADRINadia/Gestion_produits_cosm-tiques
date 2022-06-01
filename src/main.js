import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import "bootstrap" ;
import "bootstrap/dist/css/bootstrap.min.css";
import "normalize.css";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

library.add(fas);
createApp(App)
    .use(store)
    .use(router)
    .component("FIcons", FontAwesomeIcon)
    .mount("#app");
