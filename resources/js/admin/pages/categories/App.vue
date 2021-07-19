<template>
	<b-card-body class="text-center px-0">
		<b-card-text>
			<router-link to="/admin/categories/careate">
				<div class="d-flex align-items-center mb-20 container">
					<b-icon icon="plus-circle" scale="2" variant="success"></b-icon>
					<div class="title ml-12">Добавить</div>
				</div>
			</router-link>
			<b-card-group columns>
				<div v-for="category in categories" :key="category.id">
					<Card :title="category.title" :img="category.img" :info-route="`/admin/categories/edit/${category.id}`" />
				</div>
			</b-card-group>
		</b-card-text>
	</b-card-body>
</template>

<script>
	import { loadCategories } from '../../api.js'
	import Card from '../../Card.vue'

	export default {
		components: {
			Card
		},
		data() {
			return {
				categories: [],
			}
		},
		async created() {
			this.categories = await loadCategories();
		},
	}
</script>