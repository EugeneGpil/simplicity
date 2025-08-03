import { api } from 'boot/axios.js'

export default {
  me: async () => {
    return await api.get('/me')
  },
}
