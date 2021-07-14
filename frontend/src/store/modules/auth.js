export default {
    namespaced: true,
    state: {
        token: "",
        user: {
            surname: "",
            name: "",
            birthdate: "",
            personal_email: "",
            curp: "",
            rfc: "",
            civil_status: "",
            sexo: "",
            personal_address: "",
            origin: "",
            full_name: "",
            family: "",
            phone: "",
            address_family: "",
            instituciones: "",
            career: "",
            entry: "",
            egress: "",
            experiences: "",
            position: "",
            type_exp: "",
            start: "",
            end: "",
            skill: "",
            level: "",
            institucion: "",
            responsable: "",
            email_res: "",
            tel: "",
            resp: "",
            horario: "",
        },
    },
    mutations: {
        SET_LOGIN({ state }, payload) {
            this.token = payload.token
            this.user = payload.user
        }
    },
    actions: {
        login({ state, rootState, commit }, payload) {
            return new Promise((resolve, reject) => {
                 console.log(payload, "Vuex")
                 axios.post(state.baseUrl + "login", payload)
                 .then(res => {
                     commit("SET_LOGIN", res.data)
                        resolve(res.data)
                     })
                    .catch(error => {
                         reject(error)
                     })
            })
        },
    }
}