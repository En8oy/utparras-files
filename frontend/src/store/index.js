import Vue from 'vue'
import Vuex from 'vuex'
import auth from './modules/auth'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        baseUrl: "http://127.0.0.1:8000/api/",
        color: "#009688"
    },
    mutations: {},
    actions: {},
    modules: {
        auth
    }
})