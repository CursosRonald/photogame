<template>
  <footer class="text-center" id="footerP">
    <!-- Grid container -->
    <div class="container-fluid" style="backgroundColor:#262626;">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item" id="footer"><a href="#">Guia</a></li>
            <li class="list-group-item" id="footer"><a href="#">Ranking</a></li>
            <li class="list-group-item" id="footer">
              <a href="#">Creadores</a>
            </li>
          </ul>
        </div>
        <div class="col md-5">
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #dd4b39"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>
          <!-- Instagram -->
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #ac2bac"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>
          <!-- Github -->
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #333333"
            href="#!"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </div>
      </div>
      <div class="row">
        <!-- Copyright -->
        <div
          class="text-center p-2"
          style="background-color: #262626;color:white;"
        >
          © 2022 Copyright:
          <a href="#"> Photogame.com</a>
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
export default {
  name: "foot-er"
}
</script>

<style scoped>
/*Fuente primaria*/
@font-face {
  font-family: "Inter Semibold";
  src: url("../assets/fuente/Inter/Inter-SemiBold.ttf");
  font-weight: normal;
  font-style: normal;
}
#footer a,
a {
  color: #ffff;
  font-family: Inter Semibold;
  font-size: 16px;
}
#footer {
  background-color: #262626;
  text-align: center;
  margin: auto;
  border: none;
}
#footerP{
    width: 100%;
    bottom: 0;
    height: 5em;
    position: 0;

}
</style>
