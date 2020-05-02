@extends('layouts.backend.app')
@section('title','Index')
@push('css')
    
@endpush
@section('content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
      {{-- article form here --}}
        <div class="box-content">
        <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
                @csrf
                <div class="control-group">
                  <label class="control-label" for="title">Title </label>
                  <div class="controls">
                    <input type="text" class="span6" name="title">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="selectError1">Category:</label>
                  <div class="controls">
                    <select id="selectError1" data-rel="chosen" name="categories" multiple>
                      @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="selectError2">Tags:</label>
                    <div class="controls">
                      <select id="selectError2" data-rel="chosen" name="tags" multiple>
                        @foreach ($tags as $tag)
                      <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    </div>

                   <div class="control-group">
                     <div class="controls">
                      <label class="checkbox inline">
                        <div class="checker">
                          <span class="checked">
                           <input type="checkbox" value="1" name="status">
                           </span>
                        </div>Status
                        </label>
                     </div>
                   </div>

  

                <div class="control-group">
                  <label class="control-label" for="fileInput">File input</label>
                  <div class="controls">
                    <input class="input-file uniform_on" id="fileInput" type="file" name="image">
                  </div>
                </div>

                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea1">Quote:</label>
                  <div class="controls">
                    <textarea id="textarea1" cols="20" rows="3" name="quote" style="resize:none"></textarea>
                  </div>
                </div>

                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Body:</label>
                  <div class="controls">
                    <textarea class="cleditor" id="textarea2" rows="3" name="body"></textarea>
                  </div>
                </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn">Cancel</button>
                </div>
            </form>   
        </div>
      {{-- article form end --}}
    </div><!--/span-->

</div><!--/row-->
@endsection
@push('js')
    
@endpush