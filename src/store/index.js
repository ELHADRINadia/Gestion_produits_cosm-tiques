import { createStore } from "vuex";
export default createStore({
  state:
 {
    cart:[],
  },
  getters:
  {
cart:(state)=>{
return state.cart;
}
  },
  mutations: {
   setCart(state,cart){
   state.cart=cart;
   }
  },
  actions: {
    addTocart (context,cart) {
        console.log(cart)
    context.commit('setCart',cart)
    }
  },
  modules: {},
});
