@if(Session::has('info'))
  <div class="alert alert-info alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      Information : <a href="#" class="alert-link">{{ Session::get('info') }} </a>.
  </div>
@endif
@if(Session::has('success'))
  <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      Information : <a href="#" class="alert-link">{{ Session::get('success') }} </a>.
  </div>
@endif
@if(Session::has('danger'))
  <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      Information : <a href="#" class="alert-link">{{ Session::get('danger') }} </a>.
  </div>
@endif
@if(Session::has('warning'))
  <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      Information : <a href="#" class="alert-link">{{ Session::get('warning') }} </a>.
  </div>
@endif
