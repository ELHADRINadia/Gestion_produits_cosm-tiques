<template>
  <div class="container">
    <h5>Card</h5>
    <ul class="responsive-table">
      <li class="table-row">

        <div class="col col-1" data-label="Customer Name :">image</div>
        <div class="col col-1" data-label="Amount :">
          name detaille category price
        </div>

        <div class="cart">
          <button class="cart_button">-</button>
          <span class="cart_quantity">0</span>
          <button class="cart_button">+</button>
        </div>

        <div class="col col-1" data-label="Payment Status">
          <button class="btn delete">
            <FIcons :icon="['fas', 'trash']" />
          </button>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    name: "AddToCart",
    components: {},
  };
</script>

<style scoped>
  * {
    box-sizing: border-box;
    font-weight: normal;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 10px;
    padding-right: 10px;
  }
  h5 {
    font-size: 26px;
    margin: 20px 0;
    text-align: center;
  }
  h5 small {
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
  .cart .cart_button {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: rgb(255, 255, 255);
    border: 1px solid #ccc;
    font-size: 20px;
    text-align: center;
    padding: 5px;
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
