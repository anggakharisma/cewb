import { reactive } from "vue";
import { Product } from "./types";

interface StoreType {
	cart: Product[]
}
export const store: StoreType = reactive({
	cart: []
});