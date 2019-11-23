<template>
  <div class="container">
    <div class="row">
      <div class="col-md-3" v-for="(item) in info" v-bind:key="item.id">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
          <img :src="'img/product/'+item.type+'s/'+item.img" :title="item.name" class="img-fluid"/>
          <div class="row">
            <div class="col-md-7 align-middle">
              <h4>{{ item.name }}</h4>
            </div>
            <div class="col-md-5">
              <h4 class="text-danger"> 50 ฿</h4>
              <h5 class="text-secondary"><del>100 ฿</del></h5>
            </div>
          </div>
            <p class="card-text">{{ item.detail }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                <button type="button" class="btn btn-sm btn-outline-secondary" v-on:click="addTocart(item)"><font-awesome-icon fas icon="cart-plus" /> Add to cart</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>
  
</template>

<script>
    export default {
      name: 'App',
      data () {
        return {
          info: null,
          cart: [],
        }
      },
      mounted() {
        axios
          .get('api/products')
          .then(response => (this.info = response.data))
      },
      methods: {
        addTocart(item) {
          this.cart.push(item)
          console.log(this.cart);
          
        }
      }
    }
</script>
