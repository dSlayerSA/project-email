<template>
    <v-container fluid>
      <v-row class="main-row">
        <v-col cols="12" md="6" class="col-info">
          <img class="main-text-info1" src="@/assets/main-info1.svg" />
          <img class="main-text-info2" src="@/assets/main-info2.svg" />
        </v-col>
        <v-col cols="12" md="6" class="col-form">
          <div class="group56">
            <div class="group56-background"></div>
            <div class="group56-form">
              <img src="@/assets/form-text.svg" class="newsletter-icon" />
              <div class="custom-container">
                <v-text-field id="name" color="white" class="custom-text-field-nome" placeholder="Informe seu nome" required></v-text-field>
              </div>
              <div class="custom-container">
                <v-text-field id="email" color="white" class="custom-text-field" placeholder="Informe seu email" required></v-text-field>
              </div>
              <v-btn class="main-custom-btn">Inscrever-se</v-btn>
              <div>
                <img src="@/assets/main-midia-info.svg" class="main-midia-info" />
              </div>
              <v-col cols="12" md="6" class="col-midia">
                <div class="ellipse-container">
                  <img src="@/assets/ellipse.svg" class="main-ellipse" />
                  <img src="@/assets/instagram.svg" class="image-inside-ellipse" />
                </div>
                <div class="ellipse-container">
                  <img src="@/assets/ellipse.svg" class="main-ellipse" />
                  <img src="@/assets/facebook.svg" class="image-inside-ellipse" />
                </div>
                <div class="ellipse-container">
                  <img src="@/assets/ellipse.svg" class="main-ellipse" />
                  <img src="@/assets/linkedin.svg" class="image-inside-ellipse" />
                </div>
              </v-col>
            </div>
          </div>
        </v-col>
      </v-row>
    </v-container>
  </template>

  <style src="../styles/mainStyle.vue"></style>

<script>
</script>