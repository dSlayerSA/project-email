<template>
    <v-container fluid class="home-section-container">
        <v-row class="row-color" align="center">
            <v-col cols="12" md="6">
                <div class="home-section-left">
                    <img class="home-text-img" src="@/assets/home-text.svg" />
                    <h1 class="home-text">Converse com a nossa equipe sobre o seu projeto.</h1>
                    <v-btn class="home-custom-btn" color="#0AB2B7" dark rounded>Começar</v-btn>
                </div>
            </v-col>
            <v-col cols="12" md="6">
                <div class="home-section-right">
                    <div class="image-wrapper">
                        <img src="@/assets/Groupimg.svg" />
                    </div>
                </div>
            </v-col>
        </v-row>
    </v-container>
</template>
  
<style>
.home-custom-btn {
    margin-top: 50px;
    height: 55px !important;
    width: 150px !important;
    margin-left: -320px;
    font-family: 'Plus Jakarta Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;

}

.row-color {
    background: linear-gradient(to bottom, #F1F4F9 80%, #ffffff 30%);
}

.home-text-img {
    padding-left: 15px;

}

.home-text {
    font-family: 'Plus Jakarta Sans';
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    padding-top: 20px;
    color: #08111E;

}

.home-section-left {
    margin-top: -200px;
    margin-left: -410px;
    text-align: center;
    position: relative;
    z-index: 1;
}

.home-section-right {
    padding-right: 100px;
    text-align: center;
    position: relative;
    z-index: 1;
}

.home-section-right img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Para preencher o espaço da div */
}
</style>
  