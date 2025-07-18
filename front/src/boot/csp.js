import { useMeta } from 'quasar'
import app from 'src/config/app'

export default () => {
  useMeta({
    meta: {
      csp: {
        'http-equiv': 'Content-Security-Policy',
        content: `
          default-src 'self';
          script-src 'self' 'sha256-ieoeWczDHkReVBsRBqaal5AFMlBtNjMzgwKvLqi/tSU=';
          style-src 'self' 'unsafe-inline';
          img-src 'self';
          font-src 'self';
          connect-src
            'self'
            ${app.isLocal() ? 'ws://localhost:9000' : ''}
            ${app.apiUrl()};
          media-src 'self';
          frame-src 'self';
        `,
      }
    }
  })
}
