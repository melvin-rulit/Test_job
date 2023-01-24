<template>

    <b-table
        hover
        bordered="true"
        :items="UseСlient"
        :fields="fields"
        :no-border-collapse="false"
       >


        <template #cell(index)="data">

            <div class="border border-index-otstup">
                {{ data.index + 1 }}
            </div>

        </template>

        <template v-slot:cell(name)="row">

            <b-form-group>
                <input class="form-control "
                       v-on:keyup.enter="EditInfo(row.item, 'name')"
                       v-model="row.item.name">
            </b-form-group>

        </template>


        <template v-slot:cell(phone_number)="row">

            <b-form-group>
                <input class="form-control "
                       v-on:keyup.enter="EditClient(row.item, 'phone_number')"
                       v-model="row.item.phone_number">
            </b-form-group>

        </template>

        <template v-slot:cell(##########)="row">

            <nav class=" navbar-expand-md">

                <div class="collapse navbar-collapse menu">
                    <ul class="navbar-nav">

                        <li>
                            <i class="fa-solid fa-chevron-down" @click="row.toggleDetails"></i>
                        </li>


                    </ul>
                </div>

            </nav>

        </template>


        <template #row-details="row">

            <b-row>
                <button type="button" class="btn btn-danger"  @click="DeleteClient(row.item)">Yuo want to remove {{ row.item.name}} from DB?</button>

            </b-row>

        </template>

    </b-table>


</template>

<script>
import {mapGetters, mapActions} from "vuex";

export default {

    mounted() {

        this.take_allClients_from_DB()
        this.DeleteLink()

    },

    data() {
        return {
            fields: [
                {
                    key: 'index',
                    label: '№',
                },
                {
                    key: 'name',
                    label: 'name',
                },
                {
                    key: 'phone_number',
                    label: 'phone_number',
                },
                {
                    key: 'created_at',
                    label: 'create_at',
                },                {
                    key: '##########',
                    label: '##########',
                }
            ],
roles:'',

        }
    },

    computed: {
        ...mapGetters(['UseСlient']),

    },

    methods: {
        ...mapActions(['GetAllClients']),

        take_allClients_from_DB() {

            this.GetAllClients()
        },

        //---------------------------------------------- Edit Client -------------------------------------------------------------//

        EditClient(row, row_name) {

            axios.post('api/v1/send_edit_client_value', {
                field_id: row.id,
                field_value_name: row.name,
                field_value_phone_number: row.phone_number,
                row_name: row_name
            }).then((response) => {

                this.GetAllClients()

            });

        },

        DeleteClient(row) {

            axios.post('api/v1/send_value_Delete_client', {
                field_id: row.id,
            }).then((response) => {

                this.GetAllClients()

            });
        },

        DeleteLink(){
            // axios.get('api/v1/send_value_for_delete_link').then(response => this.roles = response.data)
            axios.post('api/v1/send_value_for_delete_link', {
                field_id: 21,
            })
        },
    }
}
</script>

<style lang="scss" scoped>

.border-index-otstup {
    padding-left: 40%;
}
</style>
