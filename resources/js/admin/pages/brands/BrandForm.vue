<template>
	<b-form>
		<b-form-group
			id="input-group-1"
			label="Название бренда:"
			label-for="input-1"
		>
			<b-form-input
				id="input-1"
				placeholder="Введите название бренда"
				v-model="currentBrand.title"
				required
			></b-form-input>
		</b-form-group>

		<b-form-group 
			id="input-group-2" 
			label="Выберите файл:" 
			label-for="input-2"
		>
			<b-form-file 
				id="input-2"
				v-model="currentBrand.img"
				placeholder="Файл не выбран"
			></b-form-file>
		</b-form-group>

		<b-button variant="primary" @click="saveBrand">Сохранить</b-button>
		<router-link to="/admin/brands"><b-button variant="danger">Отмена</b-button></router-link>
	</b-form>
</template>

<script>
	import { getBrandInfo } from '../../api.js'
	import { loadBrands } from '../../api.js'

	export default {
		data() {
			return {
				currentBrand: null,
			}
		},
		async created() {
			const isEditing = Boolean(this.$route.params.id);
			if (isEditing) {
				this.currentBrand = await getBrandInfo(this.$route.params.id);
			} else {
				this.currentBrand = {
					id: null,
					title: null,
				};
			}
		},
		methods: {
			saveBrand() {
				let lastId = this.brands[this.brands.length - 1].id;
				this.id = lastId + 1;
				const newBrand = {
					id: this.id,
					title: this.title,
					img: this.img.name,
				}
				console.log(newBrand);
			}
		}
	}
</script>