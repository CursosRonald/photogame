<template>
  <!-- Navbar -->
  <nav
    class="navbar navbar-expand-lg fixed-top shadow-0 border-bottom"
    id="idNavbar"
  >
    <div class="container">
      <a class="navbar-brand" href="#!" id="colorTitulo">PHOTOGAME</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        style="color:white;"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav" style="margin:auto;">
          <li class="nav-item">
            <router-link to="../Guia"><a>Guia </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="../Ranking"><a>Ranking </a></router-link>
          </li>
          <li class="nav-item">
            <router-link to="../Creadores"><a>Creadores </a></router-link>
          </li>
        </ul>

        <div class="d-grid gap-2">
        </div>
        <div class="d-grid gap-2">
                        <!-- boton nombre -->
          <button
            v-if="sesión"
            type="button"
            class="btn btn-sm btn-outline-dark btn-rounded"
            id="button_log"
          >
            <a style="color:#0A0A0A;"
              >Mi nombre</a
            >
          </button>

            <!-- boton de registro -->
          <button
            v-if="!sesión"
            type="button"
            class="btn btn-sm btn-outline-dark btn-rounded"
            id="button_log"
          >
            <a href="/Registro" style="color:#0A0A0A;"
              >Registrarse</a
            >
          </button>
        </div>
        <div class="d-grid gap-2">

            <!-- boton iniciar sesion -->
          <button
          v-if="!sesión"
            type="button"
            class="btn btn-sm btn-outline-dark btn-rounded"
            id="button_log"
          >
            <a href="/IniciarSesion" style="color:#0A0A0A;">Iniciar sesión</a>
          </button>

            <!-- boton cerrar sesion -->
          <button
            v-if="sesión"
            type="button"
            class="btn btn-sm btn-outline-dark btn-rounded"
            id="button_log"
            @click="cerrarSesion()"
          >
            <a v-if="!sesión" style="color:#0A0A0A;">Cerrar sesión</a>
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
//import axios from "axios";
export default {
  name: "login-001",
  data() {
    return {
      login: false,
      sesión: false,
    };
  },
/*   methods: {
    cerrarSesion() {
      const token = JSON.parse(localStorage.getItem("token"));
      axios
        .get("http://localhost:8888/api/loginRegistro/salir.php?token=" + token)
        .then(res => {
          if ((res.data = "success")) {
            localStorage.remove("token");
            this.$router.push("/");
          }
        });
    }
  }, */
};
</script>

<style scoped>
/*Fuente primaria*/
@font-face {
  font-family: "Inter Semibold";
  src: url("../assets/fuente/Inter/Inter-SemiBold.ttf");
  font-weight: normal;
  font-style: normal;
}
#idNavbar {
  position: relative;
  margin-bottom: 25px;
}
a {
  color: #ffff;
  font-family: Inter Semibold;
  font-size: 18px;
  text-align: center;
}
a:hover {
  color: #9bef0b;
  text-decoration: underline;
  text-decoration-color: #ffff;
}
#colorPrimario {
  background-color: #0a0a0a;
}
#colorTitulo {
  color: white;
  font-family: Inter Semibold;
  margin-left: 20px;
  font-size: 30px;
}
#colorTitulo:hover {
  color: #9bef0b;
  font-family: Inter Semibold;
  text-decoration: none;
}
#button_log {
  background-color: #9bef0b;

  font-family: Inter Semibold;
  font-size: 14px;
  color: #0a0a0a;
}
.nav-item {
  margin: auto;
  margin-right: 40px;
  width: 100%;
  text-align: center;
}
#idNavbar {
  background-color: #0a0a0a;
}
</style>
