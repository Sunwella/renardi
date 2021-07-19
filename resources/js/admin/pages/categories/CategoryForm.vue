<template>
	<b-form>
		<b-form-group
			id="input-group-1"
			label="Название категории:"
			label-for="input-1"
		>
			<b-form-input
				id="input-1"
				placeholder="Введите название категории"
				v-model="currentCategory.title"
				required
			></b-form-input>
		</b-form-group>

		<b-button variant="primary" @click="saveCategory">Сохранить</b-button>
		<router-link to="/admin/categories"><b-button variant="danger">Отмена</b-button></router-link>
	</b-form>
</template>

<script>
	import { getCategoryInfo } from '../../api.js'
	import { loadCategories } from '../../api.js'

	export default {
		data() {
			return {
				currentCategory: null,
			}
		},
		async created() {
			const isEditing = Boolean(this.$route.params.id);
			if (isEditing) {
				this.currentCategory = await getCategoryInfo(this.$route.params.id);
			} else {
				this.currentCategory = {
					id: null,
					title: null,
				};
			}
		},
		methods: {
			saveCategory() {
				let lastId = this.categories[this.categories.lebgth - 1].id;
				this.id = lastId + 1;
				const newCategory = {
					id: this.id,
					title: this.title,
				}
				console.log(newCategory);
			}
		}
	}
</script>