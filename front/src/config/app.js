export default {
  apiUrl() {
    return process.env.API_URL;
  },
  isLocal() {
    return process.env.ENVIRONMENT === 'local';
  },
  host() {
    return process.env.APP_HOST;
  }
}
