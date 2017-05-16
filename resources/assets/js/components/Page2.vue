<template>
	<div class="component-page2">
		Page 2
	</div>
</template>

<script>
	import model from '../model';

	export default {
		name: "page2",
		data() {
			return model;
		}
	}
</script>

<style lang="scss" type="text/scss">
	@import "../../sass/_variables.scss";

	.component-page2 {
		background-color: $page2-bg;
	}
</style>