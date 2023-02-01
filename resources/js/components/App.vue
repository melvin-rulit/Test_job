<template>

<!--    <div v-if="ifThisRouteHome">-->
<!--&lt;!&ndash;        <HomePageComponent/>&ndash;&gt;-->
<!--    </div>-->

<!--    <div v-if="ifThisRouteRegister">-->
<!--&lt;!&ndash;        <RegisterComponent/>&ndash;&gt;-->
<!--    </div>-->

<!--    <div v-if="ifThisRouteAdmin">-->
<!--        <MenuComponent/>-->
<!--    </div>-->

    <router-view/>

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
