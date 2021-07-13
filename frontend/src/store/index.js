import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from "vuex-persistedstate";



Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        theme: false
    },
    mutations: {
        SET_THEME(state, payload) {
            state.theme = payload
        }
    },
    actions: {
        getTheme({ state, commit }, payload) {
            this.commit("SET_THEME", payload)
        }
    },
    modules: {},
    plugins: [createPersistedState()],
})