$(function() {
  var $input = $('.img-input');
  var $fileInput = $input.children('input[type="file"]');
  var $img = $('.img-view');

  $fileInput.change(function() {
    var file = $(this).prop('files')[0];
    if (file.type.match('image.*')) {
      var fileReader = new FileReader();
      fileReader.onload = function() {
        $img.attr('src', fileReader.result);
      };
      fileReader.readAsDataURL(file);
    }
  });
});
