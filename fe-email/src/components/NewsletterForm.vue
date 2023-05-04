<template>
  <v-form @submit.prevent="submit">
    <v-text-field
      v-model="name"
      label="Nome"
      required
    />
    <v-text-field
      v-model="email"
      label="Email"
      type="email"
      required
    />
    <v-btn type="submit" color="primary">Inscreva-se</v-btn>
  </v-form>
</template>

<script>
export default {
  data() {
    return {
      name: '',
      email: '',
    }
  },
  methods: {
    submit() {
      // Implemente a lógica para enviar o formulário aqui
      console.log(`Nome: ${this.name}, Email: ${this.email}`)
    },
  },
}
</script>
