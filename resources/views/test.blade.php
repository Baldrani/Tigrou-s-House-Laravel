@extends('common.layout')

@section('content')
<div id="tuto">
  <h1>
    
 </h1>
</div>
<script type="text/javascript">
var data = { a: 1 }
var vm = new Vue({
  el: '#example',
  data: data
})
vm.$data === data // -> true
vm.$el === document.getElementById('example') // -> true
// $watch is an instance method
vm.$watch('a', function (newVal, oldVal) {
  // this callback will be called when `vm.a` changes
})
</script>

@endsection
