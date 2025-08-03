export default class Parent {
  constructor(key) {
    if (this.constructor._instance) {
      return this.constructor._instance
    }

    this.cached = null
    this.key = key

    this.constructor._instance = this
  }

  get() {
    if (this.cached !== null) {
      return this.cached;
    }
    const value = localStorage.getItem(this.key)
    this.cached = value;

    return value;
  }

  set(value) {
    this.cached = value;
    localStorage.setItem(this.key, value)
  }
}
