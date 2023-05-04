<template>
  <v-app>
    <navigation />
    <v-main>
      <homeSection />
      <landing-page></landing-page>
    </v-main>
  </v-app>
</template>

<script>
import LandingPage from '@/views/LandingPage.vue'
import navigation from "./components/NavigationBar.vue";
import homeSection from "./components/HomeSection.vue";

export default {
  name: 'App',
  components: {
    LandingPage,
    navigation,
    homeSection
  }
}
</script>