<template>
  <div class="container" id="ContainerForm">
    <form @submit.prevent="registro" id="formRegistro"  autocomplete="off" enctype="multipart/form-data">
      <h5>PHOTOGAME</h5>
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="form-outline mb-4">
        <input type="text" name="usuario" v-model="form.usuario" class="form-control" autofocus required pattern="[A-Za-z]{5,30}"/>
        <label class="form-label" for="form3Example1">Nombre de usuario</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" v-model="form.email" name="email" class="form-control" required/>
        <label class="form-label" for="form3Example3">Email</label>
      </div>

      <!-- Password input -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline mb-4">
            <input type="password" v-model="form.password" name="password" class="form-control"  required pattern="[A-Za-z0-9]{8,15}"/>
            <label class="form-label">Contraseña</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline mb-4">
            <input type="password" v-model="form.ConfirmarPass" class="form-control" required  pattern="[A-Za-z0-9]{8,15}"/>
            <label class="form-label">Confirmar contraseña</label>
          </div>
        </div>
      </div>

      <!-- Submit button -->
      <button
        type="submit"
        class="btn btn-block mb-4"
        style="background-color: #9bef0b"
      >
        REGISTRARSE
      </button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Registrate con:</p>
        <button
          type="button"
          class="btn btn-floating mx-1"
          style="background-color: #9bef0b"
        >
          <i class="fab fa-facebook-f"></i>
        </button>

        <button
          type="button"
          class="btn btn-floating mx-1"
          style="background-color: #9bef0b"
        >
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
    name: 'registro-01',
    data(){
        return {
          form: {
              usuario: '',
              password:'',
              ConfirmarPass: '',
              respuesta: '',
              email: '',
          }
        }
    },
    methods:{
         registro(){
            if (this.password == this.ConfirmarPass) {
               // const form = document.getElementById('formRegistro')
                axios.post('http://localhost:8888/api/registro',{
                      usuario: this.form.usuario,
                      email: this.form.email,
                      password: this.form.password

                })
                .then( (res) =>{
                      if (res.data.res == 'success'){
                        this.respuesta = 'success'
                      }
                   // console.log(res);
                    this.direccionamiento()
                })
                .catch(function(error){
                  console.log(error);
                })
            } else {
                swal('Las contraseñas no coinciden')
            }
        },
        direccionamiento(){
            if (this.respuesta == 'success') {
                this.$router.push('../views/Inicio')
            } else {
                swal('Hay algun problema en el registro')
            }
        },
        validarCorreo(){
            if (this.validEmail(this.email)) {
                const formData = new FormData()
                formData.append('email',this.email)
                axios.post('http://localhost:8888/api/email', formData)
                .then( res =>{
                    this.respuesta = res.data
                    if (res.data == "success") {
                        //this.boton = 'btn blue'
                    } else {
                        swal('Ya existe una cuenta con este correo')
                    }
                })
            } else {
                swal('Escribe el correo de forma correcta')
            }
        },
        validEmail: function (email) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        },
    }

}
</script>
<style>
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
