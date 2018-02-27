new Vue({
	el: '#app',
	data: {
		exchangecontrol: '',
		
	},
	methods: {
		addProductToCart: function(product){
			let cartItem = this.getCartItem(product)
			//console.log(cartItem)
			if(cartItem == null){
				this.cart.items.push({
				product:product,
				quantity:1
				})
			}
			else{
				cartItem.quantity++
			}
			product.inStock--
		},
		getCartItem: function(product) {
			for(let i=0;i < this.cart.items.length;i++){
				if (this.cart.items[i].product.id === product.id){
					return this.cart.items[i]
				}
			}
			return null
		},
		increase: function(item){
			item.quantity++
			item.product.inStock--
		},
		decrease: function(item){
			item.quantity--
			item.product.inStock++

			let index = this.cart.items.indexOf(item)
			if(item.quantity <= 0){
				if(index !== -1){
					this.cart.items.splice(index,1)
				}
			}	
		}
	},
	computed: {
		cartTotal: function(){
			let total = 0
			this.cart.items.forEach(function(item){
				total += item.quantity * item.product.price
			})
			return total
		},
		filterProducts(){
			return this.products.filter(product=> {
				return product.type.toLowerCase().indexOf(this.filterListing.toLowerCase()) > -1
			})
		}
	},
	filters: {
		currency: function(value) {
			return value.toLocaleString()
		}
	}
})