<template>
  <div>
    <Loader />

    <h1>CONTENT</h1>
  </div>
</template>

<script>
import Loader from './components/template/Loader'
import { debug } from './helpers/debug'

export default {
  name: 'App',
  components: {
    Loader
  },
  created(){
    debug("App loaded")
  }
}
</script>

<style lang="css" scoped>
</style>
