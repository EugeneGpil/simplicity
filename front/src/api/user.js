import { api } from 'boot/axios'

export default {
  me: async () => {
    return await api.get('/me')
  },
}
