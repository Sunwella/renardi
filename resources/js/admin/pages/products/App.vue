<template>
	<b-card-body class="text-center px-0">
		<b-card-text>
			<router-link to="/admin/products/create">
				<div class="d-flex align-items-center mb-20 container">
					<b-icon icon="plus-circle" scale="2" variant="success" />
					<div class="title ml-12">Добавить</div>
				</div>
			</router-link>
			<b-card-group columns>
				<div v-for="product in products" :key="product.id">
					<Card :title="product.title" :img="product.img" :info-route="`/admin/products/edit/${product.id}`"  />
				</div>
			</b-card-group>	
		</b-card-text>
	</b-card-body>
</template>

<script>
	import { loadProducts } from '../../api.js'
	import Card from '../../Card.vue'

	export default {
		components: {
			Card
		},
		data() {
			return {
				products: [],
				currentProductId: null,
			}
		},
		async created() {
			this.products = await loadProducts();
		},
		methods: {
			showInfo(id) {
				this.currentProductId = id;
			}
		},
	}
</script>