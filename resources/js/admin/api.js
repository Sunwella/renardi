import axios from 'axios'

let productId;

const BACKEND_API = `${window.location.protocol}//${window.location.host}/api`;
const LOAD_PRODUCTS = BACKEND_API + '/admin/products';
const LOAD_CATEGORIES = BACKEND_API + '/admin/categories';
const LOAD_BRANDS = BACKEND_API + '/admin/brands';

const GET_PRODUCT_INFO = BACKEND_API + '/admin/product/info';

const GET_CATEGORY_INFO = BACKEND_API + `/admin/category/info`;
const GET_BRAND_INFO = BACKEND_API + `/admin/brand/info`;

export async function loadProducts() {
	return (await axios.get(LOAD_PRODUCTS)).data;
}

export async function loadCategories() {
	return (await axios.get(LOAD_CATEGORIES)).data;
}

export async function loadBrands() {
	return (await axios.get(LOAD_BRANDS)).data;
}

export async function getProductInfo(id) {
	const { data } = await axios.get(GET_PRODUCT_INFO, { params: { id } });

	return data;
}

export async function getCategoryInfo(id) {
	const { data } = await axios.get(GET_CATEGORY_INFO, { params: { id } });

	return data;
}

export async function getBrandInfo(id) {
	const { data } = await axios.get(GET_BRAND_INFO, { params: { id } });

	return data;
}