<template>
    <div></div>
</template>
  
<style>
.ellipse-container {
    position: relative;
    display: inline-block;
}

.main-ellipse {
    width: 100%;
    height: 100%;
}

.image-inside-ellipse {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin-top: -3px;
    height: 20px;
}

.main-row {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    flex-wrap: nowrap;
}

.main-midia-info {
    margin-left: 50px;
    margin-top: 80px;
    height: 100%;
    width: 30%;
}

.col-info {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
}


.col-form {
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: center;
}

.col-midia {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 50px;
}

.main-text-info1 {
    margin: 30px;
    margin-left: 100px;
}

.main-text-info2 {
    margin: 30px;
}

.main-custom-btn {
    border-radius: 50px;
    background-color: #A9A9A9;
    color: #000;
    font-size: 20px;
    width: 150px;
    cursor: pointer;
    margin-top: 15px;
    margin-left: 235px;
}

.custom-text-field {
    background-color: black;
    border: 2px solid #ffffff;
    border-radius: 30px;
    padding: 1px 35px;
    color: white;
    font-weight: 500;
    max-width: 400px;
}

.custom-text-field input {
    color: white !important;
}

.custom-text-field input::placeholder {
    color: #ffffff !important;
    text-align: center;
}

.custom-text-field input {
    width: 100%;
}

.custom-text-field-nome {
    background-color: black;
    border: 2px solid #ffffff;
    border-radius: 30px;
    padding: 1px 35px;
    color: white;
    font-weight: 500;
    max-width: 400px;
}

.custom-text-field-nome input {
    width: 100%;
}

.custom-text-field-nome input::placeholder {
    color: #ffffff !important;
    text-align: center;
}

.custom-text-field-nome input {
    color: white !important;
}

.custom-container {
    border-radius: 30px;
    background-color: #000000;
    display: inline-block;
    margin-top: 25px;
    margin-left: 160px;
    height: 50%;
    width: 70%;
    max-width: 500px;
}

.group56 {
    position: relative;
    display: flex;
    justify-content: center;
    margin: 50px 0;
}

.group56-background {
    position: absolute;
    margin-left: 30px;
    top: 0;
    left: 0;
    width: 550px;
    height: 700px;
    background: black;
    border-radius: 19px;
}

.newsletter-icon {
    margin-top: 20px;
    width: 80%;
    height: 80%;
    margin-left: 60px;
}

.group56-form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
}
.custom-error-message {
        width: 70%;
        color: red;
        height: 70%;
        margin-left: 20px
    }

@media screen and (max-width: 960px) {
    .group56 {
        flex-direction: column;
    }

    .main-text-info1 {
        margin-left: 0;
    }

    .main-custom-btn {
        margin-top: 30px;
        margin-left: 0;
    }

    .group56-form {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .newsletter-icon {
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
    }

    .custom-container {
        margin-left: auto;
        margin-right: auto;
        width: 80%;
    }
}
</style>