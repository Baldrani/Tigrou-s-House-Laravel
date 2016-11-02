<style>
#photoOfTheDay{
    background: #fff;
    border: 2px solid grey;
}
figure{
    padding: 20px 70px;
}
figure:before{
    content: "<";
    position: absolute;
    left: 6%;
    top: 40%;
    font-size: 60px;
    cursor: pointer;
}
figure:after{
    content: ">";
    position: absolute;
    right: 6%;
    top: 40%;
    font-size: 60px;
    cursor: pointer;
}
figcaption{
    margin-top: 20px;
}
</style>
<article id='photoOfTheDay'>
    <h3>Photo du jour</h3>
    <figure>
        <img v-bind:src=src v-bind:alt=legend />
        <figcaption>@{{legend}}</figcaption>
    </figure>
</article>
<script type="text/javascript">
// app.js
new Vue({
    el: '#photoOfTheDay',
    data: { src: "http://fr.ubergizmo.com/wp-content/uploads/2015/10/nouvelle-mode-japon-sac-chat.png",
            legend: "Chat Japonais"
    },
    ready: function() { },
    methods: {}
});
</script>
