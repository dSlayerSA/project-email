<template>
  <v-app>
    <navigation />
    <v-main>
      <homeSection />
      <mainSection />
    </v-main>
  </v-app>
</template>

<script>
import navigation from "./components/NavigationBar.vue";
import homeSection from "./components/HomeSection.vue";
import mainSection from "./components/MainSection.vue";


export default {
  name: 'App',
  components: {
    navigation,
    homeSection,
    mainSection
  }
}
</script>