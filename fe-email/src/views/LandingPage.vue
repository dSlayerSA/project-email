<template>
    <v-container class="my-12">
      <h1 class="display-2 mb-6 text-center">Título da landing page</h1>
      <v-row justify="center">
        <v-col cols="12" sm="8" md="6">
          <newsletter-form></newsletter-form>
        </v-col>
      </v-row>
    </v-container>
  </template>
  
  <script>
  import NewsletterForm from '@/components/NewsletterForm.vue'
  
  export default {
    name: 'LandingPage',
    components: {
      NewsletterForm
    }
  }
  </script>
  