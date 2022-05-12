function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('image-preview__image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}