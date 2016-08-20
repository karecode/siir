@extends('backend.layouts.app')

@section('content')
    <div class="space-30"></div>
    <div class="container">


        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Şiir Ekleme Sayfası</h2>
                    </header>
                    <div class="panel-body">
                        <form method="get" role="form">


                            <div class="form-group">
                                <label>Başlık</label>
                                <input type="text" class="form-control" placeholder="Başlık buraya girilecek">
                            </div>

                            <div class="form-group">
                                <label>Açıklama</label>
                                <input type="text" max="15" class="form-control" placeholder="Açıklama kısmı buraya girilecek">
                                <span class="help-block m-b-none">En Fazla 15 Karakterden Oluşmalıdır.</span>
                            </div>

                            <div class="form-group">
                                <label>İçerik</label>
                                <textarea type="text" class="ckeditor" name="icerik" >
                                </textarea>
                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->

@stop

@section('css')

    <link href="/backend/assets/plugins/iCheck/custom.css" rel="stylesheet">

@stop

@section('js')

    <!-- iCheck -->
    <script src="/backend/assets/plugins/iCheck/icheck.min.js"></script>

    <!--ckeditor -->
    <script src="/backend/ckeditor/ckeditor.js"></script>

    <script src="/backend/site/jquery.form.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });


        });

        $(function () {
            $("#blogForm").ajaxForm({

                beforeSend: function () {

                    $("#progress").show();
                    /*clear everything*/
                    $("#bar").width('0%');
                    $("#mesaj").html("");
                    $("#yuzde").html("0%");
                },
                uploadProgress: function (event, position, total, percentComplete) {

                    $("#bar").width(percentComplete + '%');
                    $("#yuzde").html(percentComplete + '%');
                },
                success: function () {

                    $("#bar").width('100%');
                    $("#yuzde").html('100%');
                },
                complete: function (cevap) {
                    returnSuccess(cevap.responseText);
                    swal(
                            cevap.responseText.baslik,
                            cevap.responseText.msg,
                            'success'
                    );
                    alert(cevap.responseText);
                },
                error: function (response) {
                    /*returnError(response);*/
                }
            });
            CKEDITOR.replace('icerik', {
                filebrowserUploadUrl: '{{route('ckeditor.upload',['_token' => csrf_token() ])}}'

            });


        });
    </script>


@endsection