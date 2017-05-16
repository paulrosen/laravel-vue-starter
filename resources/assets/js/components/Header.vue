<template>
	<header>
		header
	</header>
</template>

<script>
	import model from '../model';

	export default {
		name: 'header',
		data() {
			return model;
		}
	}
</script>

<style lang="scss" type="text/scss">
	@import "../../sass/_variables.scss";

	header {
		background-color: $header-bg;
	}
</style>