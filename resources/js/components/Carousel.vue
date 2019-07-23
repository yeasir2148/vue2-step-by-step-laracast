<template>
	<div class="main-carousel">
		<slot></slot>
	</div>
</template>

<script>
	import Flickity from 'flickity';
	export default {
		props: ['cellAlign','contain','wrapAround','autoPlay'],
		mounted() {
			var elem = document.querySelector(".main-carousel");
			var flickity = new Flickity(elem, {
				"cellAlign": this.cellAlign, 
				"contain": this.contain, 
				"wrapAround": this.wrapAround,
				"autoPlay": this.autoPlay
			});
		},
	};
</script>
