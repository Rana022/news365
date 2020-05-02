@extends('layouts.backend.app')
@section('title','Article Index')
@push('css')
    
@endpush
@section('content')
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Article</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>

            </div>
        </div>
         <div class="box-content">
         <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right">Create Article</a>
         <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Author</th>
                    <th>Created_at</th>
                    <th>Status</th>
                    <th>Is_approve</th>
                    <th>Actions</th>
                </tr>
            </thead>   
            <tbody>
                @foreach ($articles as $key=>$row)
                    
              <tr>
              <td>{{$key + 1}}</td>
                  <td class="center">{{$row->title}}</td>
                  <td class="center">{{\Illuminate\Support\Str::limit(strip_tags($row->body), 15, $end='...')}}</td>
                 <td class="center">{{$row->user->name}}</td>
                  <td class="center">{{$row->created_at}}</td>
                  <td class="center">
                      <span class="label label-success">Active</span>
                  </td>
                  <td class="center">
                      <span class="label label-success">Active</span>
                  </td>
                  <td class="center">
                    <a class="btn btn-info" href="{{route('admin.article.edit',$row->id)}}">
                            <i class="halflings-icon white edit"></i>  
                        </a>
                        <button type="button" class="btn btn-danger" onclick="deleteArticle({{$row->id}})">
                            <i class="halflings-icon white trash"></i> 
                        </button>
                    </td>
                    <form id="delete-form-{{$row->id}}" action="{{route('admin.article.destroy',$row->id)}}" method="post" style="desplay:none">
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
 function deleteArticle(id){
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