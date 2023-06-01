<template>
    <div class="uf-form-signin">
            <div class="text-center ml-4">
                <a href="#"><img src="@/assets/img/logo-fb.png" alt="" width="100" height="100"></a>
                <h1 class="text-white h3">Admin Login</h1>
            </div>
            <div class="d-flex mb-3">
                <div class="dropdown-divider m-auto w-25"></div>
                <div class="dropdown-divider m-auto w-25"></div>
            </div>

        <form class="mt-4 ml-4" @submit="login">
          <div class="text-center ml-4">
              <div class="text-white h3" v-if="errors.length">
                  <b class="text-white h3" v-for="e in errors" :key="e.id"> {{ e }} </b><br><br>
                </div>
            </div>
            <div class="input-group uf-input-group input-group-lg mb-3">
                <span class="input-group-text fa fa-user"></span>
                <input type="text" class="form-control" placeholder="Username" v-model="username">
            </div>
            <div class="input-group uf-input-group input-group-lg mb-3">
                <span class="input-group-text fa fa-lock"></span>
                <input type="password" class="form-control" placeholder="Password" v-model="password">
            </div>
            <div class="d-flex mb-3 justify-content-between">
                <div class="form-check">
                </div>
            </div>
            <div class="d-grid mb-4">
                <button type="submit" class="btn uf-btn-primary btn-lg">Login</button>
            </div>
            <div class="d-flex mb-3">
                <div class="dropdown-divider m-auto w-25"></div>
                <div class="dropdown-divider m-auto w-25"></div>
            </div>
        </form>
    </div>
</template>

<script>
import router from '../router/index.js'

export default {
  data () {
    return {
      errors: [],
      username: null,
      password: null
    }
  },
  methods: {
    login (e) {
      this.errors = []
      if (this.username && this.password) {
        this.errors.push('Incorrect username or password')
        if (this.username === 'admin' && this.password === 'admin') {
          router.push('users')
        }
      }
      if (!this.username && !this.password) {
        this.errors.push('You need to provide an username and password')
      } else if (!this.username) {
        this.errors.push('You need to provide a username')
      } else if (!this.password) {
        this.errors.push('You need to provide a password')
      }
      e.preventDefault()
    }

    // Email Validation Code

    // else if (!this.validEmail(this.email)) {
    //     this.errors.push('You need to provide a valid email')
    //   }
    // validEmail (email) {
    //   const auth = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    //   return auth.test(email)
    // }
  }
}
</script>
