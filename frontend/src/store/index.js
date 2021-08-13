import Vue from 'vue'
import Vuex from 'vuex'
import auth from './modules/auth'
import createPersistedState from "vuex-persistedstate";


Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        theme: false,
        url: "http://127.0.0.1:8000/api/"
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
    modules: { auth },
    plugins: [createPersistedState()],
})