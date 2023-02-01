<template>

{{incominData}}

</template>

<script>

export default {
    components: {

    },
    data() {
        return {
            incominData: "",

        }
    },

    mounted() {

    },

    methods: {

        editKurerModal(item) {
            this.incominData = item
            // this.$bvModal.show('editKurer')

            axios.get('api/v1/send_value_for_get_new_link').then((response) => {



            });

        },

    }
}
</script>

<style lang="scss">

</style>
