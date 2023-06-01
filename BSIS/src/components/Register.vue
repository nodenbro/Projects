<template>
    <div class="uf-form-signin">
      <div class="text-center">
        <a href="/"><img src="@/assets/img/logo-fb.png" alt="" width="100" height="100"></a>
      <h1 class="text-white h3">Student Registration</h1>
      </div>
      <form class="mt-4" @submit.prevent='addStudent' action="/users">

        <!-- <input type="hidden" v-model="student.index"> -->

        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" class="form-control" placeholder="Student Name" v-model="student.name" required>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-calendar"></span>
          <input type="date" class="form-control" placeholder="Birth Date" v-model="student.birthday" required>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-building"></span>
          <select class="form-control" name="municipality" id="municipality" placeholder="Municipality" v-model="student.city" required>
            <option value="Prishtina">Prishtina</option>
            <option value="Prizren">Prizren</option>
            <option value="Ferizaj">Ferizaj</option>
            <option value="Podujeva">Podujeva</option>
            <option value="Gjilan">Gjilan</option>
          </select>
        </div>
        <!-- <router-link to="/users"> -->
        <div class="d-grid mb-4">
            <button type="submit" class="btn uf-btn-primary btn-lg">Sign Up</button>
        </div>
      <!-- </router-link> -->
      <!-- <router-link to="/users">
        <div class="d-grid mb-4">
            <button class="btn uf-btn-primary btn-lg">Users</button>
        </div>
      </router-link> -->
      </form>
    </div>
</template>

<script>
import router from '../router/index.js'

export default {
  data () {
    return {
      students: JSON.parse(localStorage.getItem('Students')) || [],
      student: {
        index: 0,
        name: '',
        birthday: '',
        city: ''
      }
    }
  },
  methods: {
    addStudent () {
      this.student.index = this.students.length + 1
      this.students.push(this.student)
      localStorage.setItem('Students', JSON.stringify(this.students))
      router.push('/users')
      console.log(this.students.length)
    }
  }
}
</script>
