@extends('admin-views.layouts.app')

@section('title','Gallery')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2 class="col-sm-9">{{ucwords($prefix)}}</h2>
            <ol class="breadcrumb pull-right" style="padding-top:2.5%">
                <li class="active">
                    <strong>{{ucwords($prefix)}}</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content">

        @include('admin-views.layouts.partials._alerts')

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title ">
                        <h5 class="m-t-5">Manage {{ucwords($prefix)}}</h5>
                        <div class="ibox-tools">
                            <a href="{{url('admin/gallery/create')}}"><button class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <b>Add</b></button></a>
                        </div>
                    </div>
                    <div class="ibox-content table-responsive">
                        <table class="table table-striped table-bordered table-hover " id="dataTables" width="100%" >
                            <thead>
                            <tr>
                                <th style="width: 7%">No.</th>
                                <th style="width: 8%">Photo</th>
                                <th style="width: 45%">Title</th>
                                <th style="width: 17%">Display Order</th>
                                <th style="width: 7%" >Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            var i = 1;
            var table = $('#dataTables').DataTable({
                processing: true,
                serverSide: true,
                order:[3,"DESC"],
                autoWidth: false,
                // scrollX:true,
                pageLength: 10,
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                ajax: "{{ route('admin.gallery.index') }}",
                columns: [
                    {
                        "render": function() {
                            return i++;
                        }
                    },
                    {
                        render: function ( data, type, row ) {
                            if(row.image_path == "null" || row.image_path === null || row.image_path == ""){
                                return '<img src="../assets/img/no-avtar.jpeg" height=50 width=50>';

                            }else{
                                return '<img src="../uploads/gallery/thumbnails/'+convertImageName(row.image_path)+'" height=50 width=50>';
                            }
                        },
                        className:'text-center', orderable: false, searchable: false
                    },
                    {data: 'title', name: 'title'},
                    {data: 'order', name: 'order'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                language: {
                    processing: "<i class='fa fa-spinner fa-spin fa-lg fa-fw font-bold'></i> Loading...",
                    infoFiltered: ""
                },
            });

            $('#dataTables').on('click', 'a.delete_button', function (e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this record!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "Cancel",
                    closeOnClickOutside: false,
                },function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type : 'POST',
                            url : '{{route("admin.gallery.delete")}}',
                            data : {
                                id:id,
                                _token:$("[name=csrf-token]").attr('content')
                            },
                            dataType:"JSON",
                            success : function(data){
                                if(data.result === true){
                                    swal("Success!", data.message, "success")
                                    $("#dataTables").DataTable().ajax.reload(null, false );
                                }
                                else{
                                    swal("Error!", data.message, "error")
                                }
                            }
                        });
                    }
                });

            });

        });
    </script>
@endsection
