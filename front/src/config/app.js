export default {
  apiHost() {
    return process.env.API_HOST;
  },
  apiUrl() {
    return `${process.env.API_PROTOCOL}${process.env.API_HOST}`;
  },
  isLocal() {
    return process.env.ENVIRONMENT === 'local';
  },
  host() {
    return process.env.APP_HOST;
  }
}
