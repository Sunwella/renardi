<template>
	<b-card
		:title="title"
		:img-src="img"
		:img-alt="title"
		img-top
		tag="article"
		class="mb-2"
	>
		<div class="d-flex justify-content-between align-items-center">
			<router-link :to="infoRoute">
				<b-icon icon="info-circle-fill" scale="2" variant="info"></b-icon>
			</router-link>
			<b-icon icon="x-circle" scale="2" variant="danger"></b-icon>
		</div>
	</b-card>
</template>

<script>
	export default {
		props: ['title', 'img', 'infoRoute'],
	}
</script>

<style>
	img {
		max-height: 250px;
	}
</style>