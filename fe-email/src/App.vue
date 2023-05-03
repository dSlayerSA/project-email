<template>
  <v-container fluid>
    <v-card class="pa-8 black" color="secondary">
      <h2 class="white--text text-center mb-8">
        Receba os nossos artigos de interesse na sua caixa de entrada.
      </h2>
      <v-form @submit.prevent="submit">
        <v-text-field
          v-model="email"
          label="Escreva aqui seu e-mail..."
          type="email"
          color="white"
          outlined
          rounded
          required
        ></v-text-field>
        <v-btn color="primary" type="submit" class="mt-5">Inscreva-se</v-btn>
      </v-form>
    </v-card>
  </v-container>
</template>

<style> 

.container--fluid{
max-width: 600px;
}

.theme--light.v-btn.v-btn--has-bg {
    background-color: brown;
}


h2{
font-family: Plus Jakarta Sans;
font-size: 32px;
font-weight: 600;
line-height: 40px;
letter-spacing: 0em;
text-align: left;
}

v-text-field {
width: 285px;
height: 23px;
left: 845px;
top: 1317px;

font-family: 'Plus Jakarta Sans';
font-style: normal;
font-weight: 500;
font-size: 18px;
line-height: 23px;
/* identical to box height */

display: flex;
align-items: center;
text-align: center;

color: #FFFFFF;
}
</style>

<script>
export default {
  data() {
    return {
      email: '',
    };
  },
  methods: {
    submit() {
      // Adicione aqui a lógica para enviar o e-mail para o servidor
      console.log(`E-mail ${this.email} enviado!`);
      this.email = '';
    },
  },
};
</script>
