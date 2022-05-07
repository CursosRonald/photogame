<template>
    <div class="container-fluid" id="pagina" style="min-height: calc(100vh - 57.6px - 80px);">
        <h1>Home sin logearte</h1>
        <div v-for="campos in listar" :key="campos.id">
            <spam>{{campos.usuario}}</spam>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default{
    name: 'Home-01',
        data (){
        return{
            listar: {}
        }
    },
        created(){
        this.getCategoria()
    },
        methods: {
        getCategoria(){
            axios.get('http://localhost:8888/api/crud/getPost.php',{
                headers: {
                    "Content-Type": "Access-Control-Allow-Origin: *"
                }
            })
            .then(res =>{
                this.listar = res.data
                //window.console.log(res.data);
            })
        }
    },
}
</script>
