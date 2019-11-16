<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Manage</th>
                  </tr>
              </thead>
              <tbody>
                <tr v-for="c in info"  v-bind:key="c.id">
                  <th scope="row">{{ c.id }}</th>
                  <td>{{ c.name }}</td>
                  <td><a :href="'api/products/'+ c.id">{{ c.id }}</a></td>
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
