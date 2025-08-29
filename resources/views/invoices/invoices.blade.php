@extends('layouts.master')


@section('title')
    قائمة الفواتير



@stop


@section('css')



    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">



@stop

@section('dash')
    لوحة التحكم



@stop

@section('dash1')
    لوحة التحكم



@stop

@section('dash2')
    قائمة الفواتير




@stop





@section('content')



    <div class="container">




        <button type="button" class="mb-3 btn btn-success" data-toggle="modal" data-target="#modal-default">
            اضافة فاتورة
        </button>



        <section class="content">

            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>رقم الفاتورة</th>
                                        <th>نوع المنتج</th>
                                        <th>القسم</th>
                                        <th>حالة الدفع</th>
                                        <th>تاريخ الدفع </th>
                                        <th>ملاحظات</th>
                                        <th>تاريخ الاضافة </th>
                                        <th>المستخدم</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>125487</td>

                                        <td>ورق ابيض</td>
                                        <td> ادوات مكتبية</td>
                                        <td>مدفوعةكاملة</td>
                                        <td>15/08/2025</td>
                                        <td>لا شيئ</td>
                                        <td>22/08/2025</td>
                                        <td>محمد</td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>


    </div>







    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">إضافة فاتورة جديدة</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">

                    <button type="button" class="btn btn-outline-success">حفظ البيانات</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">اغلاق</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
























@endsection




@section('scripts')


    <!-- DataTables -->


    <script src="{{ URL::asset('../../assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>









@endsection
