import Vue from 'vue'
import Vuex from 'vuex'


Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    theme : ""
  },
  mutations: {
    SET_THEME(state, payload){
      state.theme = payload
    }
  },
  actions: {
    getTheme({state, commit},payload){
     this.commit("SET_THEME",payload)
    }
  },
  modules: {
  }
})
