tinymce.init({
    selector: 'textarea#full-featured-non-premium',
    plugins: 'image code link save',
    tinycomments_author: 'bob',
    toolbar: 'save | undo redo | link image | code | annotate-alpha',
    menubar: 'file edit view insert format tools tc',
    height: 800,
    image_advtab: true,

    /* enable title field in the Image dialog*/
    image_title: true,
    /* enable automatic uploads of images represented by blob or data URIs*/
    automatic_uploads: true,
    /*
      URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
      images_upload_url: 'postAcceptor.php',
      here we add custom filepicker only to Image dialog
    */
   images_upload_url: 'postAccept.php',
    file_picker_types: 'image',
    /* and here's our custom image picker*/
    file_picker_callback: function (cb, value, meta) {
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');
  
      /*
        Note: In modern browsers input[type="file"] is functional without
        even adding it to the DOM, but that might not be the case in some older
        or quirky browsers like IE, so you might want to add it to the DOM
        just in case, and visually hide it. And do not forget do remove it
        once you do not need it anymore.
      */
  
      input.onchange = function () {
        var file = this.files[0];
  
        var reader = new FileReader();
        reader.onload = function () {
          /*
            Note: Now we need to register the blob in TinyMCEs image blob
            registry. In the next release this part hopefully won't be
            necessary, as we are looking to handle it internally.
          */
          var id = 'blobid' + (new Date()).getTime();
          var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
          var base64 = reader.result.split(',')[1];
          var blobInfo = blobCache.create(id, file, base64);
          blobCache.add(blobInfo);
  
          /* call the callback and populate the Title field with the file name */
          cb(blobInfo.blobUri(), { title: file.name });
        };
        reader.readAsDataURL(file);
      };
  
      input.click();
    },
    content_style: '.mce-annotation { background-color: darkgreen; color: white; } ' + 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
    save_onsavecallback: function () { 
        var formData = {
            'content'              : $('textarea[name=full-featured-non-premium]').val()
        };
        $.ajax({   
            type: "POST",
            data : formData,
            cache: false,  
            url: "process.php",   
            success: function(data){
                console.log(data);                       
            }   
        }); 
        console.log('Saved'); 
    },

    setup: function (editor) {
        editor.ui.registry.addButton('annotate-alpha', {
          text: 'Annotate',
          onAction: function() {
            var comment = prompt('Comment with?');
            editor.annotator.annotate('alpha', {
              uid: 'custom-generated-id',
              comment: comment
            });
            editor.focus();
          },
          onSetup: function (btnApi) {
            editor.annotator.annotationChanged('alpha', function (state, name, obj) {
              console.log('Current selection has an annotation: ', state);
              btnApi.setDisabled(state);
            });
          }
        });
    
        editor.on('init', function () {
          editor.annotator.register('alpha', {
            persistent: true,
            decorate: function (uid, data) {
              return {
                attributes: {
                  'data-mce-comment': data.comment ? data.comment : '',
                  'data-mce-author': data.author ? data.author : 'anonymous'
                }
              };
            }
          });
        });
      }
  });