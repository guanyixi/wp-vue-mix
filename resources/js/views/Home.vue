<template>
	<div>
		<h1>Home</h1>
		<div>
			<h4>Vuex</h4>
			<ul>
		    	<li>State - message: <b>{{message}}</b></li>
		    	<li>Getter - uppercase: <b>{{upperCaseMessage}}</b></li>
			    <li><button @click="mutateMessage">Mutate Message</button></li>
				<li>
					<p>Fetch data using mutations and actions from API</p>
					<div>data.title: <b>{{test}}</b></div>
					<p><small><i>Data source: <a target="_blank" href="https://jsonplaceholder.typicode.com/todos/1">https://jsonplaceholder.typicode.com/todos/1</a></i></small></p>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>

import { mapActions } from 'vuex'
// import { mapGetters } from 'vuex'
// import { mapMutations } from 'vuex'
// import { mapState } from 'vuex'

export default {
	computed: {
		message() {
			return this.$store.state.message;
		},
		upperCaseMessage(){
			return this.$store.getters.upperCaseMessage;
		},
		test(){
			return this.$store.state.test;
		}
	},
	methods: {
		mutateMessage: function() {
			this.$store.commit("changeMessage");
		},
		// getTestTitle: function(){
		// 	this.$store.dispatch('getTestTitle');
		// },
		//when need to include multiple actions, use mapActions. Import it first. It also works for mutations, getters, and states.
		...mapActions([
			'getTestTitle'
		])
	},
	mounted(){
		this.getTestTitle();
	}
};
</script>