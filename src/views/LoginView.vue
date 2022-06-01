<template>
  <div class="Admin-login">
    <section class="form-container">
      <form class="box" method="POST" v-on:submit.prevent="login">
        <h3>login now</h3>
        <input
          v-model="email"
          type="email"
          name="email"
          required
          placeholder="enter your email"
          maxlength="50"
          class="box"
        />

        <input
          v-model="password"
          type="password"
          name="password"
          required
          placeholder="enter your password"
          maxlength="50"
          class="box"
        />

        <input type="submit" name="send" class="btn" value="Sign in" />
      </form>
    </section>
  </div>
</template>

<script>
  // import axios from "axios";
  export default {
    name: "LoginView",
    components: {},
    // data() {
    //   return {
    //     email: "",
    //     password: "",
    //   };
    // },
    // methods: {
    //   async signIn() {
    //     const formData = new FormData();
    //     formData.append("email", this.email);
    //     formData.append("password", this.password);
    //     axios
    //       .post(
    //         "http://localhost/fil-rouge/pet-shop/Backend/AdminController/login",
    //         formData
    //       )
    //
    //       .then((Response) => {
    //         console.log(Response.data);
    //
    //         if (Response.data.success) {
    //          this.$router.push({ name: "DashboardView" });
    //         } else {
    //           alert(Response.data.error);
    //         }
    //
    //
    //       });
    //   },
    // },
  };
</script>
<style scoped>
  * {
    font-family: "Nunito", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
  }
  *::selection {
    background-color: #2980b9;
    color: rgb(255, 255, 255);
  }

  ::-webkit-scrollbar {
    height: 0.5rem;
    width: 1rem;
  }

  ::-webkit-scrollbar-track {
    background-color: transparent;
  }

  ::-webkit-scrollbar-thumb {
    background-color: #2980b9;
  }
  .contact {
    background-color: #eee;
  }
  .btn,
  .delete-btn,
  .option-btn {
    display: inline-block;
    padding: 10px 30px;
    cursor: pointer;
    font-size: 18px;
    color: #fff;
    border-radius: 5px;
    text-transform: capitalize;
  }
  .btn:hover,
  .delete-btn:hover,
  .option-btn:hover {
    background-color: #ECE5DC;
  }
  .btn {
    background-color: #00312C;
    width: 100%;
    margin-top: 10px;
  }
  .delete-btn {
    background-color: #00312C;
  }
  .option-btn {
    background-color:#00312C;
  }

  .form-container {
    min-height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }
  .form-container form {
    width: 500px;
    border-radius: 5px;
    border: 0.1rem solid rgb(151, 151, 151);
    padding: 20px;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    text-align: center;
    background-color: #fff;
    margin-top: 3%;
    font-size: 20px;
    color: #333;
  }
  .form-container form h3 {
    font-size: 30px;
    margin-bottom: 10px;
    text-transform: uppercase;
    color: #333;
  }

  .form-container form .box {
    width: 100%;
    border-radius: 5px;
    border: 0.1rem solid rgb(157, 157, 157);
    padding: 12px 14px;
    font-size: 18px;
    margin: 10px 0;
  }
</style>
