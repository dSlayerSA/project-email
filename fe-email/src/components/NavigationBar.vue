<template>
  <v-app-bar height="100px" color="#F1F4F9" elevation="0" app>
    <v-app-bar-nav-icon class="logo-nav">
      <img width="150%" src="@/assets/logo-lqdi-positivo.svg">
    </v-app-bar-nav-icon>
    <v-spacer></v-spacer>
    <v-toolbar-title class="title-nav">Agende uma reunião conosco</v-toolbar-title>
    <v-btn class="btn-custom-nav" dark color="black" @click="comecar" rounded>Começar</v-btn>
  </v-app-bar>
</template>

<style>
.logo-nav {
  padding-top: 20px;
  padding-left: 90px;
  pointer-events: none;

}

.btn-custom-nav {
  width: 119px;
  height: 42px;
  padding-right: 30px;
  margin-top: 30px;
}

.title-nav {
  font-family: Plus Jakarta Sans;
  font-size: 15px;
  font-weight: 600;
  line-height: 19px;
  letter-spacing: 0em;
  text-align: left;
  padding-right: 10px;
  padding-top: 30px;
}

</style>

<script>
export default {
  methods: {
    comecar() {
      // Implemente aqui a ação do botão "Começar"
    }
  }
}
</script>
