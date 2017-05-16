<template>
	<div>
		<headx></headx>
		<controls></controls>
		<main>
			<router-view></router-view>
		</main>
		<footx></footx>
	</div>
</template>

<script>
	import Headx from './components/Header'
	import Controls from './components/Controls'
	import Footx from './components/Footer'
	import model from './model'
	import "font-awesome/css/font-awesome.min.css";

	export default {
		name: 'app',
		components: {
			Headx,
			Controls,
			Footx
		},
		data() {
			return model;
		}

	}
</script>

<style lang="scss" type="text/scss">
	@import "../sass/_variables.scss";

</style>
