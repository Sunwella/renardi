<template>
	<div>
		<div v-if="!currentProduct">Загружаем данные</div>

		<b-form v-else>
			<div class="row">
				<div class="col-3">
					<b-form-group
						id="input-group-1"
						label="Название:"
						label-for="input-1"
					>
						<b-form-input
							id="input-1"
							v-model="currentProduct.title"
							placeholder="Введите название товара"
							required
						/>
					</b-form-group>
				</div>

				<div class="col-3">
					<b-form-group
						id="input-group-2"
						label="Калорийность:"
						label-for="input-2"
					>
						<b-form-input
							id="input-2"
							v-model="currentProduct.calories"
							placeholder="Например: 561.8"
							required
						/>
					</b-form-group>
				</div>

				<div class="col-3">
					<b-form-group
						id="input-group-3"
						label="Срок годности:"
						label-for="input-3"
					>
						<b-form-input
							id="input-3"
							v-model="currentProduct.self_life"
							placeholder="Например: 5"
							required
						/>
					</b-form-group>
				</div>

				<div class="col-3">
					<b-form-group
						id="input-group-4"
						label="Цена:"
						label-for="input-4"
					>
						<b-form-input
							id="input-4"
							v-model="currentProduct.price"
							placeholder="Например: 1 500"
							required
						/>
					</b-form-group>
				</div>
			</div>

			<div class="row">
				<div class="col-3">
					<b-form-group
						id="input-group-5"
						label="Вес в граммах:"
						label-for="input-5"
					>
						<b-form-input
							id="input-5"
							v-model="currentProduct.weight_in_grams"
							placeholder="Например: 1 250"
							required
						/>
					</b-form-group>
				</div>

				<div class="col-3">
					<b-form-group 
						id="input-group-6" 
						label="Наличие:" 
						label-for="input-6"
					>
						<b-form-input
							id="input-6"
							v-model="currentProduct.availability"
							placeholder="Введите наличие товара"
							required
						/>
					</b-form-group>
				</div>

				<div class="col-3">
					<b-form-group 
						id="input-group-7" 
						label="Бренд:" 
						label-for="input-7"
					>
						<b-form-select
							id="input-7"
							v-model="currentProduct.brand_id"
							:options="brandsTitle"
							required
						/>
					</b-form-group>
				</div>

				<div class="col-3">
					<b-form-group 
						id="input-group-8" 
						label="Категория:" 
						label-for="input-8"
					>
						<b-form-select
							id="input-8"
							v-model="currentProduct.category_id"
							:options="categoriesTitle"
							required
						/>
					</b-form-group>
				</div>
			</div>

			<b-form-group 
				id="input-group-9" 
				label="Описание:" 
				label-for="input-9"
			>
				<b-form-textarea
					id="input-9"
					v-model="currentProduct.description"
					placeholder="Введите описание товара"
				/>
			</b-form-group>

			<b-form-group 
				id="input-group-10" 
				label="Выберите файл:" 
				label-for="input-10"
			>
				<b-form-file 
					id="input-10"
					v-model="img"
					placeholder="Файл не выбран"
				/>
			</b-form-group>

			<b-button variant="primary" @click="saveProduct">Сохранить</b-button>
			<router-link to="/admin/products"><b-button variant="danger">Отмена</b-button></router-link>
		</b-form>
	</div>
</template>

<script>
	import { getProductInfo } from '../../api.js'
	import { loadCategories } from '../../api.js'
	import { loadBrands } from '../../api.js'

	export default {
		data() {
			return {
				currentProduct: null,
				categories: null,
				brands: null,
			}
		},
		async created() {
			this.categories = await loadCategories();
			this.brands = await loadBrands();
			const isEditing = Boolean(this.$route.params.id);
			if (isEditing) {
				this.currentProduct = await getProductInfo(this.$route.params.id);
			} else {
				this.currentProduct = {
					id: null,
					title: null,
					brand: null,
					category: null,
					category_id: null,
					brand_id: null,
					weight_in_grams: null,
					price: null,
					self_life: null,
					calories: null,
					availability: null,
					description: null,
					img: null,
				};
			}
		},
		methods: {
			saveProduct() {
				this.currentProduct = {
					//id: this.id,
					title: this.title,
					brand_id: this.brand_id,
					category_id: this.category_id,
					weight_in_grams: this.weight_in_grams,
					price: this.price,
					self_life: this.self_life,
					calories: this.calories,
					availability: this.availability,
					description: this.description,
					img: this.img.name,
				}
			},
		},
		computed: {
			categoriesTitle() {
				return this.categories.map(item => item.title);
			},
			brandsTitle() {
				return this.brands.map(item => item.title);
			},
		}
	}
</script>