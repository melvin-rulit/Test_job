<template>

    <div class="container-fluid d-flex h-100  align-items-center main_container">

        <div class="row bg-white">

            <div class="col border rounded p-4">
                <p><span>Вы пытаетесь удалить ссылку!</span></p>
                <p>Ваша ссылка будет удалена и по ней Вы уже не попадете на главную страницу</p>
                <p>После удаления Вы будете перенаправленны на страницу регистрации</p>
                <div>
                    <b-button variant="secondary" class="otstup" @click="Delete_link()">Удалить ссылку</b-button>

                    <a :href="'/home/' + link" class="otstup">Отменить удаление</a>

                </div>
            </div>
        </div>

    </div>

</template>

<script>

import {mapActions} from "vuex";

export default {

    data(){
        return {

        }
    },

    computed: {

        link() {
            return this.$route.query.link;
        },

    },

    methods: {
        ...mapActions(['DeleteLink']),

        Delete_link(){

            this.$store.dispatch('DeleteLink', {link: this.link});


            this.$router.push({ name: 'Register' });

        },

    }
}
</script>

<style lang="scss">
.otstup {
    margin-right: 90px;
}
</style>


