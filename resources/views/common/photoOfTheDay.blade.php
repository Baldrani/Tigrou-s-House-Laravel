<div id='photoOfTheDay'>
    <img v-bind:src=src v-bind:alt=legend />
    <p>@{{legend}}</p>
</div>

<script type="text/javascript">
// app.js
new Vue({
    el: '#photoOfTheDay',
    data: { src: "http://fr.ubergizmo.com/wp-content/uploads/2015/10/nouvelle-mode-japon-sac-chat.png", legend: "Chat Japonais" },
    ready: function() {},
    methods: {}
});

</script>