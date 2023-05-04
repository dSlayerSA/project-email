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

<style src="../styles/navStyle.vue"></style>

<script>
export default {
  methods: { 
    comecar() {
    }
  }
}
</script>
