<template>
<div class="users">

    <Nav />

    <div class="users-container">
        <div class="search-register-bar">
            <div class="search-box">
                <i class="fa fa-search icon" aria-hidden="true"></i>
                <input type="text" class="search-form" placeholder="Search" v-model="search">
                <p></p>
            </div> <!-- /search-box -->

            <div class="register">
                <button class="register-btn" @click="$bvModal.show('register-Modal');register_modal()">
                    Register New Student
                </button>
            </div><!-- /register -->
        </div> <!-- search-register-bar -->


        <div class="modals-div">


            <!--  Register User Modal  -->
            <b-modal 
            id="register-Modal" 
            content-class="shadow" 
            ok-title="Confirm"
            centered 
            title="Register Student" 
            @ok="addStudent()">
                <form ref="form">

                    <!-- Index Input Field -->
                    <b-form-group
                    label="Index"
                    label-for="index-input"
                    >
                        <b-form-input
                            id="index-input"
                            v-model="student.index"
                            disabled
                        ></b-form-input>
                    </b-form-group>

                    <!-- Name Input Field -->
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

                    <!-- DoB Input Field -->
                    <b-form-group
                    label="Date of Birth"
                    label-for="birthdate-input"
                    >
                        <b-form-input
                            id="birthdate-input"
                            type="date"
                            v-model="student.birthday"
                            required
                        ></b-form-input>
                    </b-form-group>

                    <!-- City Input Field -->
                    <b-form-group
                    label="City"
                    label-for="city-input"
                    >
                        <b-form-select
                        class="form-select"
                        v-model="student.city"
                        :options="cities">
                        </b-form-select>
                    </b-form-group>
                </form>
            </b-modal>
            <!--  End of Register User Modal  -->


            <!-- View User Modal -->
            <b-modal 
            id="view-Modal" 
            content-class="shadow" 
            ok-title="Close"
            ok-only
            ok-variant="secondary"
            centered 
            title="View Student Information" 
            >
                <form ref="form">

                    <!-- Index Input Field -->
                    <b-form-group
                    label="Index"
                    label-for="index-input"
                    >
                        <b-form-input
                            id="index-input"
                            v-model="student.index"
                            disabled
                        ></b-form-input>
                    </b-form-group>

                    <!-- Name Input Field -->
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

                    <!-- DoB Input Field -->
                    <b-form-group
                    label="Date of Birth"
                    label-for="birthdate-input"
                    >
                        <b-form-input
                            id="birthdate-input"
                            type="date"
                            v-model="student.birthday"
                            required
                            disabled
                        ></b-form-input>
                    </b-form-group>

                    <!-- City Input Field -->
                    <b-form-group
                    label="City"
                    label-for="city-input"
                    >
                        <b-form-select
                        class="form-select"
                        disabled
                        v-model="student.city"
                        :options="cities">
                        </b-form-select>
                    </b-form-group>
                </form>
            </b-modal>
            <!-- End of View User Modal -->

             <!-- Edit User Modal -->
             <b-modal 
            id="edit-Modal" 
            content-class="shadow" 
            ok-title="Confirm"
            centered 
            title="Edit Student Information" 
            @ok="editUser(student, index)">
                <form ref="form">

                    <!-- Index Input Field -->
                    <b-form-group
                    label="Index"
                    label-for="index-input"
                    >
                        <b-form-input
                            id="index-input"
                            v-model="student.index"
                            disabled
                        ></b-form-input>
                    </b-form-group>

                    <!-- Name Input Field -->
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

                    <!-- DoB Input Field -->
                    <b-form-group
                    label="Date of Birth"
                    label-for="birthdate-input"
                    >
                        <b-form-input
                            id="birthdate-input"
                            type="date"
                            v-model="student.birthday"
                            required
                        ></b-form-input>
                    </b-form-group>

                    <!-- City Input Field -->
                    <b-form-group
                    label="City"
                    label-for="city-input"
                    >
                        <b-form-select
                        class="form-select"
                        v-model="student.city"
                        :options="cities">
                        </b-form-select>
                    </b-form-group>
                </form>
            </b-modal>
            <!-- End of Edit User Modal -->
            

            <!--  Delete User Modal  -->
            <b-modal
                    id="delete-Modal"
                    centered
                    content-class="shadow"
                    ok-title="Delete"
                    @ok="removeStudent(student, index)"
                    ok-variant="danger"

                    title="Confirmation">
                    <h5 class="my-2">
                        Are you sure you want to proceed?
                    </h5>
                    </b-modal>
            <!--  End of Delete User Modal  -->
        </div> <!-- modals-div -->


        <table class="table">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Name <a href="#"><i class="fa fa-sort" @click="sortName();toggleSortOrder()"></i></a></th>
                    <th>Date Of Birth <a href="#"><i class="fa fa-sort" @click="sortBirthday();toggleSortOrder()"></i></a></th>
                    <th>Municipality <a href="#"><i class="fa fa-sort" @click="sortCity();toggleSortOrder()"></i></a></th>
                    <th>Actions </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="student in filteredPageOfStudents" :key="student.id" class="table-row">
                    <td>{{ student.index }}</td>
                    <td>{{ student.name}}</td>
                    <td>{{ student.birthday}}</td>
                    <td>{{ student.city}}</td>
                    <td class="actions-column">
                        <a @click="$bvModal.show('view-Modal');viewUser(student)" class="view" title="View" v-b-modal.modal data-toggle="tooltip"><i class="material-icons">remove_red_eye</i></a>
                        <a @click="$bvModal.show('edit-Modal');editModal(student)" class="edit" title="Edit" v-b-modal.modal data-toggle="tooltip"><i class="material-icons">edit</i></a>
                        <a @click="$bvModal.show('delete-Modal');getUser(student);viewUser(student)" class="delete"  title="Delete" v-b-modal.modal data-toggle="tooltip"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="pagination">
            <jw-pagination
                :disableDefaultStyles="true"
                :labels="customLabels"
                :maxPages="3"
                :pageSize="9"
                :items="students"
                @changePage="onChangePage"
            >
            </jw-pagination>
        </div> <!-- /pagination-->
    </div> <!-- /users-container -->
</div> <!-- /users -->
</template>

<script>
    import Nav from "../components/Nav.vue"

    const customLabels = {
        first: '<<',
        last: '>>',
        previous: '<',
        next: '>'
    }

    export default {
        components: {
            Nav
        },
        data () {
            return {
                customLabels,
                pageOfStudents: [],
                students: JSON.parse(localStorage.getItem('Students')) || [],
                archives: JSON.parse(localStorage.getItem('Archives')) || [],
                student: {
                    index: 0,
                    name:"",
                    birthday:"",
                    city:""
                },
                sortOrder: 'asc',
                search: "",
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
            onChangePage (pageOfStudents) {
                // update page of items
                this.pageOfStudents = pageOfStudents
            },

            // Register
            register_modal() {
                console.log("Register Button Pressed!");
                this.$bvModal.show("modal-1");
            },

            addStudent () {
                this.student.index = this.students.length + this.archives.length + 1;
                this.students.push(this.student);
                localStorage.setItem('Students', JSON.stringify(this.students));
                console.log(this.students.length);
                location.reload();
            },

            // Remove 
            removeStudent (student, index) {
                const id = this.students.map(s => {
                    return s.index
                }).indexOf(this.index)
                this.students.splice(id, 1)
                this.students = localStorage.setItem('Students', JSON.stringify(this.students))
                this.archives.push(this.student);
                localStorage.setItem('Archives', JSON.stringify(this.archives));
                location.reload()
                console.log(index)
            },

            getUser (student) {
                this.index = student.index
            },

            // View Method 
            viewUser (student) {
                this.student.index = student.index
                this.student.name = student.name
                this.student.birthday = student.birthday
                this.student.city = student.city
            },

            // Edit Methods

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

            // Sort Methods
            
            toggleSortOrder() {
                this.sortOrder = this.sortOrder === 'asc' ? 'desc' : 'asc'
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
        }
    }
    
</script>