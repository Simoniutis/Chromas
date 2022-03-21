
function previewBeforeUpload(id){
    document.querySelector("#"+id).addEventListener("change",function(e){
      if(e.target.files.length == 0){
        return;
      }
      let file = e.target.files[0];
      let url = URL.createObjectURL(file);
      document.querySelector("#"+id+"-preview div").innerText = file.name;
      document.querySelector("#"+id+"-preview img").src = url;
    });
  }
  
  previewBeforeUpload("file-1");
  previewBeforeUpload("file-2");
  previewBeforeUpload("file-3");
  previewBeforeUpload("file-4");
  previewBeforeUpload("file-5");
  previewBeforeUpload("file-6");
  previewBeforeUpload("file-7");
  previewBeforeUpload("file-8");
  previewBeforeUpload("file-9");
  previewBeforeUpload("file-10");
  previewBeforeUpload("file-11");
  previewBeforeUpload("file-12");