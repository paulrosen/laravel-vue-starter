<template>
	<div class="component-home">
		Home
	</div>
</template>

<script>
	import model from '../model';

	export default {
		name: "home",
		data() {
			return model;
		}
	}
</script>

<style lang="scss" type="text/scss">
	@import "../../sass/_variables.scss";

	.component-home {
		background-color: $home-bg;
	}
</style>