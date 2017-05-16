<template>
	<nav>
		<router-link to="/" exact>Home</router-link>
		<router-link to="/page1">Page 1</router-link>
		<router-link to="/page2">Page 2</router-link>
	</nav>
</template>

<script>
	import model from '../model';

	export default {
		name: 'controls',
		data() {
			return model;
		}
	}
</script>

<style lang="scss" type="text/scss">
	@import "../../sass/_variables.scss";

	nav {
		background-color: $nav-bg;
	}
</style>