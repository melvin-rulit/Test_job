<template>

    <div class="container-fluid d-flex h-100  align-items-center main_container">

        <div class="row bg-white ">

            <div class="col border rounded p-4 otstup_button">
                <b-button variant="secondary" class="otstup" @click="copyToClipBoard(link)">Копировать ссылку</b-button>
                <b-button variant="secondary" class="otstup" @click="Generate_new_link(link)">Сгенерировать новую</b-button>
                <b-button variant="secondary" class="otstup" @click="DeleteLink()">Деактивировать текущую</b-button>
                <b-button variant="secondary">Im feeling lock</b-button>
            </div>
        </div>

        <div class="row bg-white ">

<div class="col">
    <p>{{returnResponse}}</p>
</div>
        </div>
    </div>

</template>

<script>
import {mapGetters, mapActions} from "vuex";

export default {

    computed: {
        ...mapGetters(['UseLink']),

        link() {
            return this.$route.params.link;
        },

    },

data(){
    return {
        links: 'home/',
        returnResponse: '',
    }
},

    methods: {
        ...mapActions(['GenerateLink']),

        Generate_new_link(link){
            // this.$store.dispatch('GenerateLink', {old_link: this.link})

            axios.get('api/v1/send_value_for_get_new_link').then((response) => {



            });
        },

        DeleteLink(){
            axios.get('api/v1/send_value_for_delete_link').then((response) => {



            });
        },

        copyToClipBoard(link){
            let Link_1 = this.links;
            let Link_2 = this.link;
            let fullLink = Link_1 + Link_2;
            navigator.clipboard.writeText(fullLink);
            this.returnResponse = 'Ссылка скопирована в буфер обмена'
        },
    }
}
</script>

<style lang="scss">

.otstup_button {
    margin-top: 40%;

    .otstup {
        margin-right: 20px;
    }
}
</style>


