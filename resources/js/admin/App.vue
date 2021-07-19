<template>
	<div id="app" class="container mt-5">
		<Navbar />
		<router-view></router-view>
	</div>
</template>

<script>
	import Navbar from './Navbar.vue'

	export default {
		name: 'App',
		components: {
			Navbar
		}
	}
</script>

<style>
	.ml-12 {
		margin-left: 12px;
	}
	.mb-20 {
		margin-bottom: 20px;
	}
	.px-0 {
		padding-left: 0;
		padding-right: 0;
	}
	.title {
		cursor: pointer;
		text-decoration: none;
	}
</style>

