<template>
	<div>
		<h2 style="text-align: center;">Index</h2>
		<h2 style="text-align: center;">Index</h2>
		<h2 style="text-align: center;">Index</h2>
		<h2 style="text-align: center;">Index</h2>
		<h2 style="text-align: center;">Index</h2>
		<div class="card-body">
            Welcome to Homepage
            <br/>
            <router-link to="/user">Go to User</router-link>
        </div>
	</div>
</template>
<script>
	export default{
		mounted(){
			console.log('index');
		}
	}
</script>