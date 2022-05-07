<template>
  <div id="app">
    <Header v-bind:datos = "datos" @datosUser = "rellenar_nombre"/>
    <router-view />
    <Foot />
  </div>
</template>

<script>
import Header from "@/components/Header.vue";
import Foot from "@/components/Foot.vue";
export default {
    login : false,
  name: "App",
  components: { Header, Foot,},
  data() {
    return {
        login : false,
        DatosUser: {}
    };
  },
  methods: {
    rellenar_nombre (value){
      this.DatosUser = value;
    }
    
  },
};
</script>
<style>

</style>
