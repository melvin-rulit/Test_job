export default {

    state: {
        new_link:'',

    },

    getters: {
        UseLink(state){
            return state.new_link
        },

    },

    mutations: {

        getLink(state, link) {
            state.new_link = link

        },

    },

    actions: {

        GenerateLink({commit}, {old_link}) {

            // axios.get(`api/v1/send_value_for_get_new_link`, {old_link: old_link})
            axios.get(`api/v1/send_value_for_get_new_link`)
                .then((response) => {
                    commit('getLink', response.data.data)
                })
        },


    },

}
