import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from "vuex-persistedstate";
import auth from './modules/auth'
Vue.use(Vuex)
export default new Vuex.Store({
    state: {
        theme: false,
        baseUrl: "http://127.0.0.1:8000/api/",
        color: "#009688"
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
    plugins: [createPersistedState()],
    modules: {
        auth
    }
})