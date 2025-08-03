import {api} from 'boot/axios.js'

export default {
  register: async ({
                     name,
                     email,
                     password,
                     passwordConfirmation,
                   }) => {
    return await api.post('/register', {
      name,
      email,
      password,
      password_confirmation: passwordConfirmation,
    })
  }
}
