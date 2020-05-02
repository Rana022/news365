@extends('layouts.backend.app')
@section('title','Edit_Category')
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
        <div class="box-content">
        <form class="form-horizontal" action="{{route('admin.category.update', $category->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="control-group">
                  <label class="control-label" for="selectError1">Parent Category:</label>
                  <div class="controls">
                    <select id="selectError1" data-rel="chosen" name="parentCategory">
                      <option value="">No Category</option>
                      @foreach ($categories as $parentCategory)
                    <option value="{{$parentCategory->id}}"
                      @if($parentCategory->id == $category->category_id)
                      selected
                      @endif
                      >
                      {{$parentCategory->name}}
                    </option>
                      @endforeach
                    </select>
                  </div>
                  </div>


                  {{-- <div class="control-group">
                    <label class="control-label" for="selectError2">Group Select</label>
                    <div class="controls">
                      <select data-placeholder="level 2 child" id="selectError2" data-rel="chosen" name="">
                        <option value=""></option>
                          
                        @foreach ($categories as $parentCategory)
                      <optgroup label="{{$parentCategory->name}}">
                        @if ($parentCategory->childrenCategories->count())
                        @foreach ($parentCategory->childrenCategories as $child)
                          <option value="{{$child->id}}">{{$child->name}}</option>
                        @endforeach
                            
                        @endif
                        </optgroup>
                      @endforeach
                        

                      </select>
                    </div>
                    </div> --}}

                <d1iv class="control-group">
                  <label class="control-label" for="typeahead">Create Category </label>
                  <div class="controls">
                  <input type="text" class="span6 typeahead" placeholder="Category" name="name" value="{{$category->name}}">
                  </div>
                </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Submit</button>
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