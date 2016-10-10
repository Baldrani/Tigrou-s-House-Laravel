@extends('common.layout')

@section('content')
<div id="tuto">
  <h1>
   <span class="label" :class="'label-'+type"  v-on:mouseover="changeType">@{{type}}</span>
 </h1>
</div>
<script type="text/javascript">
new Vue({
  el: '#tuto',
  data: {
    type: 'primary'
  },
  methods: {
    changeType: function() {
      this.type = (this.type == 'primary') ? 'success' : 'primary';
    }
  }
});
</script>
@endsection
