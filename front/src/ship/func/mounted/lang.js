import { useUserStore} from 'src/modules/user/models/user.js'
import { Device } from '@capacitor/device'

const fallback = 'en'

const supported = [fallback, 'ru']

export default async () => {
  const userStore = useUserStore()

  if (userStore.lang) {
    return;
  }

  let lang;

  try {
    const res = await Device.getLanguageCode()
    lang = res?.value
  } catch (e) {
    console.error(e)
  }

  if (!lang) {
    lang = navigator?.language || fallback
  }

  try {
    lang = lang.split('-')[0]
  } catch {
    lang = fallback
  }

  lang = supported.includes(lang) ? lang : fallback

  userStore.lang = lang
}
