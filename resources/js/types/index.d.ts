export interface User {
	id: number;
	name: string;
	email: string;
	email_verified_at: string;
}

export interface Product {
	id?: number;
	name: string;
	price: number;
	image_path: string;
}

export interface CartItemType {
	name: string;
	quantity: number;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
	auth: {
		user: User;
	};
};

export interface GlobalProps extends PageProps {
	cart: any,
	flash: {
		message: string | null
	}
}
declare module '@heroicons/*';