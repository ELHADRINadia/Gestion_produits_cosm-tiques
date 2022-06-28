<template>
<SideBar />
<div class="menu">
    <div class="container">
      <h2>List of orders</h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Name</div>
          <div class="col col-1">email</div>
          <div class="col col-1">Action</div>
          <div class="col col-1">Action</div>
          <div class="col col-1">Action</div>
        </li>
        <li class="table-row">
          <div
            class="col col-1"
            style="width=100%;"
            data-label="Customer Name :"
          >
            <div>test</div>
          </div>

          <div
            class="col col-1"
            style="width='100%'"
            data-label="Payment Status"
          >
            <button class="btn edit">
              <FIcons :icon="['fa', 'edit']" />
            </button>
            <button class="btn delete">
              <FIcons :icon="['fas', 'trash']" />
            </button>
          </div>
        </li>
      </ul>
    </div>
  </div>

</template>

<script>
  // import axios from "axios";
  import NavBar from "@/components/NavBar.vue";
  export default {
    name: "CommandeView",
    components: {
      NavBar,

    },
    data() {
      return {
        orders: [],
      };
    },
    mounted() {
      this.getOrders();
    },
    methods: {
    async getOrders(){
    const response = await fetch('http://localhost/fill-rouge/backend/PanierController/getAllProfil');
    const data = await response.json();
    this.orders = data;
    },
    },

  };
</script>

<style scoped>

   .menu {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 2rem;
  }
  .col-lg-9 {
    position: absolute;
    top: 20%;
    left: 10%;
    display: flex;
    width: 900px;
    z-index: 10;
    justify-content: end;
  }

  .container {
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 10px;
    padding-right: 10px;
  }
  h2 {
    font-size: 26px;
    margin: 20px 0;
    text-align: center;
  }
  h2 small {
    font-size: 0.5em;
  }
  .responsive-table li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
    align-items: center;
  }
  .responsive-table .table-header {
    background-color: rgb(88, 109, 216);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .responsive-table .table-row {
    background-color: #fff;
    box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
  }
  .responsive-table .col-1 {
    flex-basis: 10%;
  }
  .col .edit {
    color: #fff;
    background-color: #00c851;
    border-radius: 3px;
    padding: 5px;
    margin-right: 10px;
  }
  .col .delete {
    color: #fff;
    background-color: #f44336;
    border-radius: 3px;
    padding: 5px;
    margin-right: 10px;
  }
  .col .edit:hover {
    text-decoration: none;
    color: #fff;
    background-color: #048e0d;
    border-radius: 3px;
    padding: 5px;
    margin-right: 10px;
    cursor: pointer;
  }
  .col .delete:hover {
    text-decoration: none;
    color: #fff;
    background-color: #a30606;
    border-radius: 3px;
    padding: 5px;
    margin-right: 10px;
    cursor: pointer;
  }

  @media all and (max-width: 767px) {
    .responsive-table .table-header {
      display: none;
    }
    .responsive-table li {
      display: block;
    }
    .responsive-table .col {
      flex-basis: 100%;
    }
    .responsive-table .col {
      display: flex;
      padding: 10px 0;
    }
    .responsive-table .col:before {
      color: #6c7a89;
      padding-right: 10px;
      content: attr(data-label);
      flex-basis: 50%;
      text-align: right;
    }
  }


</style>
