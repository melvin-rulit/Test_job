<template>


    <div class="container-fluid d-flex h-100  align-items-center main_container">

<!--  ----------------------------------------  Register Page  -->
        <div class="row bg-white shadow-sm">

            <div class="col border rounded p-4">
                <h3 class="text-center mb-4">Register Page</h3>

                    <div class="form-group">
                        <label>Username</label>
                        <input v-model="form.name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
<!--                        <input v-mask="'+(#)-##-###-#####'" label="tel" v-model="form.tel" class="form-control">-->
                        <input v-model="form.phone_number" class="form-control">
                    </div>

                    <button class="btn btn-primary w-100" @click="onRegister">Register</button>

            </div>
        </div>

<!--      ----------------------------------------  Info Block   -->
        <div class="row">

                <div class="info_block">

                    <div v-if="ifClient_create">

                        <div v-if="if_create_client">
                            <p><span>Вы успешно зарегестрированнны</span></p>
                            <p>Ваша ссылка готова. Перейдите по ней на главную страницу</p>
                            <p>Или скопируйте ниже сгененрированную ссылку и вставьте в адресную строку вашего браузера</p>
                            <p>После нажатия на Enter - вы будете перенаправленны на главную страницу</p>

                            <a :href="'/home/' + Get_unicum_link_client">/home/{{Get_unicum_link_client}}</a>

                        </div>

                        <div v-if="wait_create_client" class="regular_class">
                            <Spiner_1/>
                        </div>


                    </div>

                    <div v-else>
                        <p><span>Уважаемый клиент</span></p>
                        <p>После регистрации Вы получите уникальную сгенерированную ссылку,</p>
                        <p>по которой сможете пройти - на главную страницу приложения.</p>
                        <p>По истичении 7 дней - ссылка станет неактуальной.</p>
                        <p>Регистрацию нужно будет пройти снова или на главной странице</p>
                        <p>сгенерировать новую.</p>
                    </div>
                </div>


        </div>
    </div>

</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {

    computed: {
        ...mapGetters(['Get_unicum_link_client']),


    },

        data() {
        return {
            form: {
                name: '',
                phone_number: '',
            },

            ifClient_create: false,
            wait_create_client: true,
            if_create_client: false,

            errors: {}
        };
    },

    methods: {
        ...mapActions(['send_data_for_register_client']),

        onRegister() {

            this.$store.dispatch('send_data_for_register_client', {form: this.form})
            this.clear_data();
            this.block_after_send_data_create_client();
        },

        block_after_send_data_create_client(){

                setTimeout(() => {

                    this.wait_create_client = false
                    this.if_create_client = true

                }, 3400)


        },

        clear_data() {

            this.errors = {};
            this.form = '';
            this.ifClient_create = true;

        },



    }
}

</script>


<style lang="scss">

/* Стиль для блока вывода ошибок */
span {
    color: red;
}
.regular_class {
    margin-left: 10vh;
}

.main_container {
    margin-top: 13%;
    margin-left: 30%;

    .info_block {
        margin-left: 15%;
    }
}

</style>
