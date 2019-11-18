<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center align-middle">#</th>
                            <th class="text-center align-middle">Image</th>
                            <th class="text-center align-middle">Product</th>
                            <th class="text-center align-middle">Detail</th>
                            <th class="text-center align-middle">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr v-for="c in info"  v-bind:key="c.id">
                            <th class="text-center align-middle" scope="row">{{ c.id }}</th>
                            <td class="text-center"><img :src="'img/product/'+c.type+'s/'+c.img" width="40" :title="c.name"/></td>
                            <td class="align-middle">{{ c.name }}</td>
                            <td class="align-middle">{{ c.detail }}</td>
                            <td class="text-center align-middle"><a :href="'api/products/'+ c.id">{{ c.id }}</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      data () {
        return {
          info: null
        }
      },
      mounted() {
        axios
          .get('api/products')
          .then(response => (this.info = response.data))
      }
    }
</script>
