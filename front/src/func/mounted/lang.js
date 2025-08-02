import { useUserStore} from 'stores/user'
import { Device } from '@capacitor/device'

const fallback = 'en';

const supported = ['en', 'ru'];

export default async () => {
  const userStore = useUserStore()

  if (userStore.lang) {
    return;
  }

  let lang;

  try {
    const res = await Device.getLanguageCode();
    lang = res.value;
  } catch {
    lang = navigator.language;
  }

  try {
    lang = lang.split('-')[0];
  } catch {
    lang = fallback
  }

  lang = supported.includes(lang) ? lang : fallback

  userStore.lang = lang;
}
