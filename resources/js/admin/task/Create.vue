<template>
	<div>
		<h2 style="text-align: center;">saim</h2>
		<h2 style="text-align: center;">saim</h2>
		<h2 style="text-align: center;">saim</h2>
		<h2 style="text-align: center;">saim</h2>
		<h2 style="text-align: center;">saim</h2>
		<a href="/">Index</a>
		<div class="card-body">
                        Welcome to Homepage
                        <br/>
                        <router-link to="/user">Go to User</router-link>
                    </div>
      <!-- <router-link to="/">Index</router-link> -->

	    <!-- <router-link to="/admin/task/create">Index</router-link> -->
	</div>
</template>
<script>
export default{
	mounted(){
		console.log('create')
	},
}
</script>