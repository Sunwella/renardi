<template>
	<b-nav tabs class="mb-20">
		<div v-for="navItem in navItems" :key="navItem.route">
			<b-nav-item :active="isActive(navItem)" :to="navItem.route" @click="chooseNavItem(navItem)">
				{{ navItem.title }}
			</b-nav-item>
		</div>
	</b-nav>
</template>

<script>
	export default {
		data() {
			return {
				navItems: [
					{ title: 'Товары', route: '/admin/products' },
					{ title: 'Категории', route: '/admin/categories' },
					{ title: 'Бренды', route: '/admin/brands' },
				],
			}
		},
		methods: {
			chooseNavItem(navItem) {
				this.chosenNavItem = navItem.title;
			},
			isActive(navItem) {
				return this.$route.path === navItem.route;
			},
		},
	}
</script>