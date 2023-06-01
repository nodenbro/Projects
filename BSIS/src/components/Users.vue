<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
    <form class="table-test">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h2>Student <b>Details</b></h2></div>
                            <div class="col-sm-4">
                                <div class="search-box">
                                    <i class="material-icons">&#xE8B6;</i>
                                    <input type="text" class="form-control" placeholder="Search" v-model="search">
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Index</th>
                                <th>Name <i class="fa fa-sort" @click="sortName();toggleSortOrder()"></i></th>
                                <th>Date Of Birth <i class="fa fa-sort" @click="sortBirthday();toggleSortOrder()"></i></th>
                                <th>Municipality <i class="fa fa-sort" @click="sortCity();toggleSortOrder()"></i></th>
                                <th>Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="student in filteredPageOfStudents" :key="student.id">
                                <td>{{ student.index }}</td>
                                <td>{{ student.name}}</td>
                                <td>{{ student.birthday}}</td>
                                <td>{{ student.city}}</td>
                                <td>
                                    <a @click="$bvModal.show('view-Modal');viewUser(student)" class="view" title="View" v-b-modal.modal data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                    <a @click="$bvModal.show('edit-Modal');editModal(student)" class="edit" title="Edit" v-b-modal.modal data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a @click="$bvModal.show('delete-Modal');getUser(student)" class="delete" title="Delete" v-b-modal.modal data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Edit User -->
                    <b-modal id="edit-Modal" centered hide-backdrop content-class="shadow" title="Edit Student" @ok="editUser (student, index)">
                      <div>
                      <b-form-group
                        label="Index"
                        label-for="index"
                        >
                        <b-form-input
                          id="index"
                          v-model="student.index"
                          required
                          disabled
                        ></b-form-input>
                      </b-form-group>
                      </div>
                      <div>
                      <b-form-group
                        label="Name"
                        label-for="name-input"
                        >
                        <b-form-input
                          id="name-input"
                          v-model="student.name"
                          required
                        ></b-form-input>
                      </b-form-group>
                      </div>
                      <div>
                      <b-form-group
                        label="Date of Birth"
                        label-for="birthday"
                        >
                        <b-form-input
                          id="birthday"
                          v-model="student.birthday"
                          required
                        ></b-form-input>
                      </b-form-group>
                      </div>
                      <div>
                      <b-form-group
                        label="Municipality"
                        label-for="municipality"
                        >
                        <b-form-select
                        class="form-select"
                        v-model="student.city"
                        :options="cities">
                        </b-form-select>
                      </b-form-group>
                      </div>
                    </b-modal>

                    <!-- View User -->

                    <b-modal id="view-Modal" centered hide-backdrop content-class="shadow" title="View Student" @ok="viewUser(student, index)">
                      <div>
                      <b-form-group
                        label="Index"
                        label-for="index"
                        >
                        <b-form-input
                          id="index"
                          v-model="student.index"
                          required
                          disabled
                        ></b-form-input>
                      </b-form-group>
                      </div>
                      <div>
                      <b-form-group
                        label="Name"
                        label-for="name-input"
                        >
                        <b-form-input
                          id="name-input"
                          v-model="student.name"
                          required
                          disabled
                        ></b-form-input>
                      </b-form-group>
                      </div>
                      <div>
                      <b-form-group
                        label="Date of Birth"
                        label-for="birthday"
                        >
                        <b-form-input
                          id="birthday"
                          v-model="student.birthday"
                          required
                          disabled
                        ></b-form-input>
                      </b-form-group>
                      </div>
                      <div>
                      <b-form-group
                        label="Municipality"
                        label-for="municipality"
                        >
                        <b-form-select
                        class="form-select"
                        v-model="student.city"
                        :options="cities"
                        disabled>
                        </b-form-select>
                      </b-form-group>
                      </div>
                    </b-modal>

                    <!-- Delete User -->

                    <b-modal
                      id="delete-Modal"
                      centered
                      ok-title="Delete"
                      @ok="removeStudent(student, index)"
                      ok-variant="danger"
                      hide-backdrop
                      content-class="shadow"
                      title="Confirmation">
                      <h5 class="my-2">
                        Are you sure you want to proceed?
                      </h5>
                    </b-modal>

                    <div class="clearfix">
                        <div class="hint-text">Showing <b>{{ filteredPageOfStudents.length }}</b> out of <b>{{students.length}}</b> entries</div>
                          <jw-pagination
                              :disableDefaultStyles="true"
                              :labels="customLabels"
                              :maxPages="4"
                              :pageSize="6"
                              :items="students"
                              @changePage="onChangePage"
                            >
                          </jw-pagination>
                    </div>
                    <div class="mr-5">
                        <router-link to="/">
                                <button type="submit" class="btn uf-btn-primary btn-lg" style="margin-right: 20px;">Log Out</button>
                        </router-link>
                        <router-link to="/register">
                                <button type="submit" class="btn uf-btn-primary btn-lg">Create Student</button>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </body>
    </html>
    </template>
<script>

const customLabels = {
  first: '<<',
  last: '>>',
  previous: '<',
  next: '>'
}

export default {
  data () {
    return {
      search: '',
      students: JSON.parse(localStorage.getItem('Students')) || [],
      pageOfStudents: [],
      customLabels,
      sortOrder: 'asc',
      index: null,
      student: {
        index: '',
        name: '',
        birthday: '',
        city: ''
      },
      cities: [
        { value: 'Prishtina', text: 'Prishtina' },
        { value: 'Prizren', text: 'Prizren' },
        { value: 'Ferizaj', text: 'Ferizaj' },
        { value: 'Podujeva', text: 'Podujeva' },
        { value: 'Gjilan', text: 'Gjilan' }
      ]
    }
  },
  computed: {
    filteredPageOfStudents () {
      return this.pageOfStudents.filter(student =>
        student.name.toLowerCase().includes(this.search) ||
        student.city.toLowerCase().includes(this.search) ||
        student.index.toString().toLowerCase().includes(this.search))
    }
  },
  methods: {
    removeStudent (student, index) {
      const id = this.students.map(s => {
        return s.index
      }).indexOf(this.index)
      this.students.splice(id, 1)
      this.students = localStorage.setItem('Students', JSON.stringify(this.students))
      location.reload()
      console.log(index)
    },
    sortName () {
      this.pageOfStudents.sort((a, b) => {
        if (a.name < b.name) {
          return -1
        } else if (a.name > b.name) {
          return 1
        }
        return 0
      })

      if (this.sortOrder === 'desc') {
        this.pageOfStudents.reverse()
      }
      return this.pageOfStudents
    },
    sortBirthday () {
      this.pageOfStudents.sort((a, b) => {
        if (a.birthday < b.birthday) {
          return -1
        } else if (a.birthday > b.birthday) {
          return 1
        }
        return 0
      })

      if (this.sortOrder === 'desc') {
        this.pageOfStudents.reverse()
      }
      return this.pageOfStudents
    },
    sortCity () {
      this.pageOfStudents.sort((a, b) => {
        if (a.city < b.city) {
          return -1
        } else if (a.city > b.city) {
          return 1
        }
        return 0
      })

      if (this.sortOrder === 'desc') {
        this.pageOfStudents.reverse()
      }
      return this.pageOfStudents
    },
    indexTest (student) {
      console.log(student.index)
    },
    onChangePage (pageOfStudents) {
      // update page of items
      this.pageOfStudents = pageOfStudents
    },
    editUser (student, index) {
      const id = this.students.map(s => {
        return s.index
      }).indexOf(index)
      this.students.splice(id, 1, student)
      this.students = localStorage.setItem('Students', JSON.stringify(this.students))
      console.log(index)
      location.reload()
    },
    editModal (student) {
      this.index = student.index
      this.student.index = student.index
      this.student.name = student.name
      this.student.birthday = student.birthday
      this.student.city = student.city
    },
    viewUser (student) {
      this.student.index = student.index
      this.student.name = student.name
      this.student.birthday = student.birthday
      this.student.city = student.city
    },
    getUser (student) {
      this.index = student.index
    },
    toggleSortOrder () {
      this.sortOrder = this.sortOrder === 'asc' ? 'desc' : 'asc'
    }
  }
}
</script>
