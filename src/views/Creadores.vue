<template>
  <div class="container-fluid" id="pagina" style="min-height: calc(100vh - 57.6px - 80px);">
    <!-- Contenido del carrousel -->
      <div class="carousel-inner rounded-5 shadow-4-strong">
        <!-- Item -->
        <div class="carousel-item active">
            <img src="../assets/landing.png" class="d-block w-100" alt="" />
        </div>
        <!-- Contenido texto -->
        <div class="carousel-caption d-md-block">
          <h3>Apartado de creadores</h3>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
  </div>
</template>


<script>

  export default{
    name: "creadores-01"
  }
</script>

<style>
@font-face {
  font-family: "Inter Semibold";
  src: url("../assets/fuente/Inter/Inter-SemiBold.ttf");
  font-weight: normal;
  font-style: normal;
}
#tcreadores {
  font-family: "Inter Semibold";
  font-size: 25px;
}
#pagina{
    min-height: calc(100vh -57.6px -80px) !important;
}
</style>
