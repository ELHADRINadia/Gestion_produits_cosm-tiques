<template>
  <div class="register">
       <div class="form-container">
      <form action="" methode="post"  v-on:submit.prevent="signUp">
        <h3>Register now</h3>
        <input
         v-model="firstname"
          type="text"
          name="firstname"
          required
          placeholder="enter your first name"
          class="box"
        />
        <input
         v-model="lastname"
          type="text"
          name="lastname"
          required
          placeholder="enter your last name"
          class="box"
        />
        <input
         v-model="email"
          type="email"
          name="email"
          required
          placeholder="enter email"
          class="box"
        />
        <input
         v-model="phone"
          type="number"
          name="phone"
          required
          placeholder="enter your phone number"
          class="box"
        />
        <input
        v-model="password"
          type="password"
          name="password"
          required
          placeholder="enter password"
          class="box"
        />
        <input type="submit" name="submit" class="btn" value="Register now" />
        <p>Already have an account? <a href="/login">Login now</a></p>
      </form>
    </div>
  </div>
</template>

<script>
   // import axios from "axios";
  export default {
    name: "SignupView",
    components: {},
    //  data() {
    //   return {
    //     firstname: "",
    //     lastname: "",
    //     email: "",
    //     phone: "",
    //     password: "",
    //   };
    // },
    // methods: {
    //   signUp() {
    //     const formData = new FormData();
    //     formData.append("firstname", this.firstname);
    //     formData.append("lastname", this.lastname);
    //     formData.append("email", this.email);
    //     formData.append("phone", this.phone);
    //     formData.append("password", this.password);
    //     console.log(formData);
    //     axios
    //       .post(
    //         "http://localhost/fil-rouge/pet-shop/Backend/ClientController/signup",
    //         formData
    //       )
    //
    //       .then((Response) => {
    //         console.log(Response.data);
    //
    //         if (Response.data.success) {
    //          this.$router.push({ name: "DashboardClient" });
    //         } else {
    //           alert(Response.data.error);
    //         }
    //
    //       });
    //   },
    // },
  };
</script>

<style scoped>
  * {
    background-image: url("../assets/back.jpg");
    font-family: "Montserrat", sans-serif;
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
  .register {
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
    background-color:#ECE5DC;
  }
  .btn {
    background-color: #00312C;
    margin-top: 10px;
  }
  .delete-btn {
    background-color: #00312C;
  }
  .option-btn {
    background-color: #00312C;
  }

  .form-container {
    min-height: 100vh;
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
    text-align: center;
    background-color: #fff;
    margin-top: 20px;
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

  .form-container form p {
    margin-top: 20px;
    font-size: 20px;
    color: #333;
  }
  .form-container form p a {
    color: #e74c3c;
  }
  .form-container form p a:hover {
    text-decoration: underline;
  }
</style>
