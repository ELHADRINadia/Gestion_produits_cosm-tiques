import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import ProductView from "../views/ProductView.vue";
import LoginView from '../views/LoginView.vue';
import SignupView from '../views/SignupView.vue';
import DashboardView from "../views/Admin/DashboardView.vue";
import AddProduct from "../views/Admin/AddProduct.vue";

const routes = [
  {
    path: "/home",
    name: "home",
    component: HomeView,
  },
  {
    path: "/product",
    name: "product",
    component: ProductView,
  },
  {
    path: "/signup",
    name: "signup",
    component: SignupView,
  },
  {
    path: '/login',
    name: 'login',
    component: LoginView,
  },
  {
    path:  '/dashboard',
    name: 'dashboard',
    component: DashboardView,
  },
  {
    path:  '/AddProduct',
    name: 'AddProduct',
    component: AddProduct,
  },
  {
    path:'/Dashboar/update/:id',
    name: 'update',
    component:() => import("@/views/Admin/updateProduct.vue"),
  },
  {
    path:  '/cart-list',
    name: 'CartView',
    component:() => import("@/views/CartView.vue"),
  },
  {
    path:  '/category',
    name: 'CategoryView',
    component:() => import("@/views/Admin/CategoryView.vue"),
  },
  {
    path:'/:catchAll(.*)',
    name : "404",
    component:() => import("@/views/NotFound.vue")
  },
{
  path:  '/AddCategory',
  name: 'AddCategory',
  component:() => import("@/components/AddCategory.vue"),
},
{
  path:  '/edit-category/:id',
  name: 'EditCategory',
  component:() => import("@/components/EditCategory.vue"),
}


];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});
export default router;
