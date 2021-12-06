
@extends('header')
@section('content')

    {{-- title region --}}
    <div class="container breadcrumb">
    <div class="jumbotron">
        <h1>All Products</h1>
        <a href="#" class="btn btn-primary" id="create" data-toggle="modal"  data-target="#ModalCreate">
        <span style="color: white"></span> Create </a>
    </div>
    </div>
    <br>

    {{-- table  --}}
    <div class=" container index_container">
    <table class="table table-bordered" >
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
             $i = 0;
            @endphp
            {{-- loop --}}
            @foreach ($products as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    {{-- <button type="button" class="btn btn-info" id="edit" data-toggle="modal" data-target="#ModalEdit">
                        <i class="fa fa-edit"></I>
                    </button> --}}
                    <a href="{{ route('products.edit',$item->id)}}" class="btn btn-sm btn-outline-info"> Edit <i class="far fa-edit"></i></a>

                    {{-- <a href="{{route('products.edit',$item->id)}}" data-hover="tooltip"
                    data-placement="top" data-target="#ModalEdit{{ $id }}" data-toggle="modal" id="edit" title="Edit"><i class="fa fa-edit"></I></a> --}}
                    {{-- <a class="btn btn-success" id="edit" data-toggle="modal"  data-target="#ModalEdit" >Edit</a> --}}
                    {{-- href="{{ route('products.index')}} --}}
                </td>
                <td>
                    <a  class="btn btn-primary" href="{{ route('products.show',$item->id)}}">Show</a>
                </td>
                <td>
                    <div class="col-sm">
                        <form action="{{ route('products.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {{ $products->links() }}
    </div>


 @include('products.create')


   <script type="text/javascript">
    $('#create').click(function () {
        $('#ModalCreate').modal('show');
    });


//     $('body').on('click', '#edit', function () {
//       var product_id = $(this).data('id');
//       $.get('products/' + product_id +'/edit', function (data) {
//         // $('#modal-two').html("Edit Software Details");
//         //   $('#btn-save').val("edit-user");
//           $('#ModalEdit').modal('show');
//           $('#pro_id').val(data.id);
//           $('#pro_name').val(data.name);
//           $('#pro_price').val(data.price);
//         //   console.log(data);
//       })
//    });

   </script>
@endsection
