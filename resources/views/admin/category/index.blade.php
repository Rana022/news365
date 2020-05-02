@extends('layouts.backend.app')
@section('title','Category Index')
@push('css')
    
@endpush
@section('content')
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Category</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>

            </div>
        </div>
         <div class="box-content">
         <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">Create Category</a>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Parent id</th>
                      <th>Created at</th>
                      <th>Actions</th>
                  </tr>
              </thead>   
              <tbody>
                  @foreach ($categories as $key=>$row)    
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$row->name}}</td>
                    <td>
                    @if($row->category_id)
                     {{$row->category_id}}
                    @endif
                    </td>
                    <td class="center">{{$row->created_at}}</td>
                    <td class="center">
                    <a class="btn btn-info" href="{{route('admin.category.edit',$row->id)}}">
                            <i class="halflings-icon white edit"></i>  
                        </a>
                        <button type="button" class="btn btn-danger" onclick="deleteCategory({{$row->id}})">
                            <i class="halflings-icon white trash"></i> 
                        </button>
                    </td>
                <form id="delete-form-{{$row->id}}" action="{{route('admin.category.destroy',$row->id)}}" method="post" style="desplay:none">
                @csrf
                @method('DELETE')
                </form>
                </tr>
                @endforeach
              </tbody>
          </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
 function deleteCategory(id){
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    event.preventDefault();
      document.getElementById('delete-form-'+id).submit();
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
 }
</script>
@endpush