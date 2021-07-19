<template>
	<div class="container mt-5">
		<b-nav tabs class="mb-20">
			<div v-for="(navItem, index) in navItems" :key="index">
				<b-nav-item :active="chosenNavItem === navItem" @click="choseNavItem(navItem)">{{ navItem }}</b-nav-item>
			</div>
  		</b-nav>

  		<ProductForm 
  			v-if="formAddShown && chosenNavItem === 'Товары'" 
  			:brandsTitle="brandsTitle" 
  			:categoriesTitle="categoriesTitle"
  			:products="products"
  			:categories="categories"
  			:brands="brands"
  			:chosenProductId="currentProductId"
  			@close="close"
  		/>

  		<CategoryForm 
  			v-else-if="formAddShown && chosenNavItem === 'Категории'"
  			:categories="categories"
  			@close="close"
  		/>

  		<BrandForm
  			v-else-if="formAddShown && chosenNavItem === 'Бренды'"
  			:brands="brands"
  			@close="close"
  		/>

  		<div v-else>
			<b-card-body class="text-center px-0">
				<b-card-text>
					<div class="d-flex align-items-center mb-20 container">
						<b-icon icon="plus-circle" scale="2" variant="success" @click="openAddForm"></b-icon>
						<div class="title ml-12" @click="openAddForm">Добавить</div>
					</div>
					<div v-if="chosenNavItem === 'Товары'">
						
						<!-- <b-card-group columns>
							<div v-for="product in products" :key="product.id">
								<Card :data="product" @close="close" @showInfo="showInfo" />
							</div>
						</b-card-group> -->
					</div>
					<div v-else-if="chosenNavItem === 'Категории'">
						<!-- <b-card-group columns>
							<div v-for="category in categories" :key="category.id">
								<Card :data="category" @close="close" />
							</div>
						</b-card-group> -->
					</div>
					<div v-else-if="chosenNavItem === 'Бренды'">
						<!-- <b-card-group columns>
							<div v-for="brand in brands" :key="brand.id">
								<Card :data="brand" @close="close" />
							</div>
						</b-card-group> -->
					</div>
				</b-card-text>
			</b-card-body>
		</div>
	</div>
</template>

<script>
	import { loadBrands } from './api.js'
	import Card from './Card.vue'
	import ProductForm from './ProductForm.vue'
	import CategoryForm from './CategoryForm.vue'
	import BrandForm from './BrandForm.vue'

	export default {
		components: {
			Card,
			ProductForm,
			CategoryForm,
			BrandForm
		},
		data() {
			return {
				formAddShown: false,
				currentProductId: null,
			}
		},
		methods: {
			choseNavItem(navItem) {
				this.chosenNavItem = navItem;
			},
			openAddForm() {
				this.formAddShown = true;
			},
			close() {
				this.formAddShown = false;
			},
			showInfo(id) {
				this.currentProductId = id;
				this.formAddShown = true;
			}
		},
		computed: {
			categoriesTitle() {
				return this.categories.map(item => item.title);
			},
			brandsTitle() {
				return this.brands.map(item => item.title);
			}
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
	}
</style>