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
                            <v-text-field v-model="name" id="name" color="white" class="custom-text-field-nome"
                                placeholder="Informe seu nome" required></v-text-field>
                        </div>
                        <div class="custom-container">
                            <div class="custom-error-message" v-if="status === 'error'">{{ errorMessage }}</div>
                            <v-text-field v-model="email" id="email" color="white" class="custom-text-field"
                                placeholder="Informe seu email" required></v-text-field>
                        </div>
                        <v-btn id="main-btn" class="main-custom-btn" :disabled="!formValid"
                            @click="submitForm">Inscrever-se</v-btn>
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
                <div v-if="status === 'success'" class="success-message">Inscrição realizada com sucesso!</div>

            </v-col>
        </v-row>
    </v-container>
</template>
  
<style src="../styles/mainStyle.vue"></style>
  
<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            email: '',
            status: '',
            formValid: false

        };
    },
    watch: {
        name() {
            this.validateForm()
        },
        email() {
            this.validateForm()
        }
    },
    methods: {
        submitForm() {
            axios.post('http://localhost:8000/api/subscription/store', {
                name: this.name,
                email: this.email
            })
                .then(response => {
                    console.log(response.data.id);
                    this.status = 'success';
                    this.errorMessage = '';
                    this.resetForm();

                    // Envio de e-mail
                    axios.post('http://localhost:8000/api/subscription/sendEmail', {
                        id: response.data.id,
                        name: response.data.name,
                        email: response.data.email
                    })
                        .then(response => {
                            console.log(response.data);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                })
                .catch(error => {
                    console.log(error);
                    if (error.response.status === 422 && error.response.data.errors.email) {
                        this.errorMessage = 'Email já registrado!';
                    } else {
                        this.errorMessage = 'Erro ao realizar a inscrição.';
                    }
                    this.status = 'error';
                });
        },
        validateForm() {
            this.formValid = this.name && this.email
        },
        resetForm() {
            this.name = '';
            this.email = '';
            this.status = '';
            this.formValid = false;
            this.errorMessage = '';
        }
    }
}
</script>