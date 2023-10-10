<template>
  <div class="login-component">
    <div class="inner-container">

      <form action="#" @submit="login();" onsubmit="return false">

        <div class="login-content">
          <img class="logo" src="../assets/logo.png" alt="">
          <label>Username</label>
          <input type="text" placeholder="Username" id="username" name="username" v-model="username">

          <label> Password</label>
          <input type="password" placeholder="Password" id="password" name="password" v-model="password">
        </div> <!-- /login-content -->
        <button class="button" type="submit" id="liveToastBtn">Log In</button>
      </form>
    </div> <!-- /login-form -->
  </div> <!-- /hello -->
</template>

<script>
import router from '../router/index.ts'

export default {
	data () {
		return {
			errors: [],
			username: "",
			password: "",
		}
	},
	methods: {
		login () {
			this.errors = []
			if(this.username && this.password) 
			{
				if(this.username === "admin" && this.password === "password") 
				{ setTimeout(() => {
					router.push('users');

				}, 1500);
				this.$bvToast.toast(`Redirecting...`, 
					{
						title: 'Login Successful',
						variant: 'success',
						autoHideDelay: 1000,
						bottomRight:true
						}
        			)

				} 
				else 
				{
					this.$bvToast.toast(`Username or Password is incorrect.`, 
					{
						title: 'Login Failed!',
						variant: 'danger',
						autoHideDelay: 3000,
						bottomRight:true
						}
        			)
				}
			}
			else
				{
					this.$bvToast.toast(`Fields Empty!`, 
					{
						title: 'Login Failed',
						variant: 'danger',
						autoHideDelay: 3000,
						bottomRight:true
						}
        			)
				}

		},
	}


}
</script>



