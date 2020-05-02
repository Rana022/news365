@extends('layouts.backend.app')
@section('title','Index')
@push('css')
    
@endpush
@section('content')
<div class="row-fluid sortable">
  <div class="box span12">
      <div class="box-header" data-original-title>
          <h2><i class="halflings-icon edit"></i><span class="break"></span>Tag Form</h2>
          <div class="box-icon">
              <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
              <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
              <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
          </div>
      </div>
      <div class="box-content">
          <form class="form-horizontal" action="{{route('admin.tag.store')}}" method="POST">
            @csrf

              <div class="control-group">
                <label class="control-label" for="typeahead">Create Tag </label>
                <div class="controls">
                  <input type="text" class="span6 typeahead" placeholder="Tag" name="name">
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn">Cancel</button>
              </div>
            </fieldset>
          </form>   

      </div>
  </div><!--/span-->

</div><!--/row-->
@endsection
@push('js')
    
@endpush