<template>
	<footer>
		footer
	</footer>
</template>

<script>
	import model from '../model';

	export default {
		name: 'footer',
		data() {
			return model;
		}
	}
</script>

<style lang="scss" type="text/scss">
	@import "../../sass/_variables.scss";

	footer {
		background-color: $footer-bg;
	}

</style>