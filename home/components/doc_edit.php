
    <style>
        .DocEditorCont {
            width:50%;
            overflow-y:scroll;
            height:100%;
            position: relative;
            margin-left:200px;
            margin-top:50px;
        }    
            .DocEditorCont button {
        text-align: center;
        border:0px;
        margin-top:10px;
        height:30px;
        width:150px;
        border-radius: 5px;
        background:#4FC1E9;
         -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
        color:white;
        transition:background 0.2s;
    }
    .DocEditorCont button:hover {
        background:#3BAFDA;
        transition:background 0.2s;
    }
    .DocEditorCont input {
        width:250px;
        height:40px;
        border-radius: 5px;
        border:0px;
        padding:3px;
        margin-top:5px;
         -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
    }
    .DocEditorCont textarea {
        height:500px;
        margin-bottom:20px;
    }
    </style>
    <div class="DocEditorCont">
                                        <form id="upload" method="post"  class="form-horizontal" action="elements/doc_upload_cloud.php" enctype="multipart/form-data">
            <textarea name="document" id="editor1" rows="10" cols="80">
                
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            <input value="<?= $_SESSION["user"]["id"]; ?>" name="user_id" style="display:none"/>
            <center><input name="name" placeholder="Document Unique name.."/></center>
            <center><button>Post to cloud</button></center>
        </form>
    </div>