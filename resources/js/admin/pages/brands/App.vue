<template>
	<b-card-body class="text-center px-0">
		<b-card-text>
			<router-link to="/admin/brands/create">
				<div class="d-flex align-items-center mb-20 container">
					<b-icon icon="plus-circle" scale="2" variant="success"></b-icon>
					<div class="title ml-12">Добавить</div>
				</div>
			</router-link>
			<b-card-group columns>
				<div v-for="brand in brands" :key="brand.id">
					<Card :title="brand.title" :img="brand.img" :info-route="`/admin/brands/edit/${brand.id}`" />
				</div>
			</b-card-group>
		</b-card-text>
	</b-card-body>
</template>

<script>
	import { loadBrands } from '../../api.js'
	import Card from '../../Card.vue'

	export default {
		components: {
			Card
		},
		data() {
			return {
				brands: [],
			}
		},
		async created() {
			this.brands = await loadBrands();
		},
	}
</script>