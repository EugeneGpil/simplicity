import user from 'src/ship/api/user.js';

export default async () => {
  const me = await user.me()
  console.log('me', me)
}
