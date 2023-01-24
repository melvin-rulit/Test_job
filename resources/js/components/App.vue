<template>

    <div v-if="ifThisRouteHome">
        <HomePageComponent/>
    </div>

    <div v-if="ifThisRouteRegister">
        <RegisterComponent/>
    </div>

    <div v-if="ifThisRouteAdmin">
        <MenuComponent/>
    </div>


</template>

<script>

export default {

    computed: {

        ifThisRouteRegister() {
            if (this.$route.name === 'Register')
                return true;
        },
        ifThisRouteHome() {
            if (this.$route.name === 'Home')
                return true;
        },
        ifThisRouteAdmin() {
            if (this.$route.name === 'Admin')
                return true;
        },
    },
}
</script>

<style>

</style>
