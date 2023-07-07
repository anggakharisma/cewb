import { reactive } from "vue";
import { Product } from "./types";

interface StoreType {
	cart: Product[] | any;
}
export const store: StoreType = reactive({
	cart: [],
	getCart: () => {
		localStorage.getItem('cart');
	},
	setCart: () => {
		store.cart = localStorage.getItem('cart');
	}
});