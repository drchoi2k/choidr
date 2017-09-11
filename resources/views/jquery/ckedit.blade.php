<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
           html, body{
                width: 900px;
                margin: 0 auto;
                padding: 30px;
            }
            .btn2{
               float: right;
               margin: 10px 20px 0 0;
            }
        </style>
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
       <!-- <script src="//cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script> -->
        <script src="/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
               <!--  This is my textarea to be replaced with CKEditor. -->
            </textarea>
               <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
         
           {!! Form::submit('저  장', array('class'=>'btn2 btn-save'))!!}
            <!-- <input class="btn btn-success" type="submit" name="전 송"> -->
        </form>
    </body>
</html>
