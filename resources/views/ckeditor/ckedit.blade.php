<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {!!Html::style('css/app.css')!!}
        <!--    {!!Html::script('js/app.js')!!} -->
        <style type="text/css">
        /*      html, body{
        width: 100%;
        margin: 0 auto;
        
        }*/
        .btn{
        float: right;
        margin: 0px 80px 0 0px;
        }
        </style>
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <!-- <script src="//cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script> -->
        <script src="/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Test Ckedit</h4>
                </div>
                <div class="panel-body">
                    <form action="{{url('insert')}}" method="post">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="editor1" id="editor1" class="form-control"></textarea>
                        </div>
                        <block cond="$allow_fileupload">
                          <include target="/ckeditor/test.php" />
                        </block>
                    </div>
                </div>

            </div>
            <div class="form-group">
                {!! Form::submit('저  장', array('class'=>'btn btn-save'))!!}
                <!-- <input type="submit" name="send" id="send" value="저 장" class="btn btn-success" > -->
                {{ csrf_field() }}
            </div>
        </form>
        <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace(
        'editor1',{
        // toolbar : 'basic',
        // uiColor:'#9ab8f3',
        width : '100%',
        height : '500',
        });
        </script>
    </body>
</html>