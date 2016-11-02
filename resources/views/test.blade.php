@extends('common.layout')

@section('content')
<div id="tuto">
  <h1>
    <div id="example">
      @{{ test + 1 }}
    </div>
 </h1>
</div>
<script type="text/javascript">
var vm = new Vue({
  el: '#example',
  data: {test : 1}
})
</script>

@endsection
