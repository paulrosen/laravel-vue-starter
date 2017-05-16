<template>
	<div class="component-page1">
		Page 1
	</div>
</template>

<script>
	import model from '../model';

	export default {
		name: "page1",
		data() {
			return model;
		}

	}
</script>

<style lang="scss" type="text/scss">
	@import "../../sass/_variables.scss";

	.component-page1 {
		background-color: $page1-bg;
	}

</style>