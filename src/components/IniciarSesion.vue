<template>
<div class="container" id="ContainerForm" style="min-height: calc(100vh - 30px - 170px);" >
    <form id="inicioSesion" @submit.prevent="login" autocomplete="off">
    <h5>PHOTOGAME</h5>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" v-model="form.email" class="form-control" required />
    <label class="form-label" for="form2Example1">Introduce tu email</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" v-model="form.password" class="form-control" required pattern="[A-Za-z0-9]{8,15}" />
    <label class="form-label" for="form2Example2">Contraseña</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
    </div>
    <div class="col">
      <!-- Simple link -->
      <a href="#!">Olvidastes la contraseña?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-block mb-4" style="background-color: #9bef0b">Iniciar sesión</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>No estás registrado? <a href="#!">Registrate</a></p>
    <p>Inicia con:</p>
    <button type="button" class="btn btn-floating mx-1" style="background-color: #9bef0b">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-floating mx-1" style="background-color: #9bef0b">
      <i class="fab fa-google"></i>
    </button>
  </div>
</form>
</div>
</template>
<script>
import swal from 'sweetalert'
import axios from 'axios'

export default {
    name: 'login-1',
    data (){
        return{
            msg: '',
            form: {
                password: '',
                email: ''
            }
        }
    },
    methods:{
         login(){
            axios.post('http://localhost:8888/api/login',{
                email: this.form.email,
                password: this.form.password
            })
            .then( (res) =>{
            this.respuesta = res.data
            if (res.data.res == 'success') {
                let FormUsuario = res.data.datos;
                this.$emit("datosUser", this.FormUsuario)
                console.log(FormUsuario);
                localStorage.setItem('token', JSON.stringify(res.data.token))
                localStorage.setItem('login',true)
                // alerta que redirige al usuario a otra vista una vez agotado el timer
                swal({
                    text: 'Has iniciado correctamente',
                    timer: 4000,
                    buttons: false
                }).then(function(){
                    // redirección
                    window.location.href = '/Creadores';
                  //  this.$router.push('../Home')
                });
            } else {
                swal('Usuario y/o contraseña incorrectos')
            }

            })
        }
    },
/*     created(){
        // si existe un token eres direccionado a la vista.
        const token = JSON.parse(this.localStorage.get('token'));
        if(token){
            this.$router.push('../Creadores')
        }
    } */
}
</script>



<style scoped="">
@font-face {
  font-family: "Inter Semibold";
  src: url("../assets/fuente/Inter/Inter-SemiBold.ttf");
  font-weight: normal;
  font-style: normal;
}
#ContainerForm {
  max-width: 600px;
}
#ContainerForm h5 {
  text-align: center;
  font-family: Inter SemiBold;
  font-size: 35px;
  margin-bottom: 25px;
}
</style>
