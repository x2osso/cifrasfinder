const BASE_URL = "https://localhost/cifras/cifrasfinder";



$("#form_user").submit(function (){

    $.ajax({
      type: "POST",
      url: BASE_URL + "cadastrar/ajax_save_user",
      dataType: json,
      data: $(this).serialize(),//serialize serve pra pegar as info do form e passar em formato q pode ser lido pelo metodo post
      sucess: function(response){
      }
    });

  return false;
})


$("#upload_user_img").change(function(){
  uploadImg($(this),$("#user_img_src"),$("#user_img"));
  $("#logoImg").css({
  display: "none",
  visibility: "hidden"
  });
})

function uploadImg(input_file, img, input_path){
	src_before = img.attr("src");
	img_file = input_file[0].files[0];
	form_data = new FormData();

	//nome definido no meu controler pra img
	form_data.append("image_file", img_file);
	$.ajax({
		url: BASE_URL + "/cadastrar/ajax_import_img",
		dataType: "json",
		cache: false,
		contentType: false,
		processData: false,
		data: form_data,
		type: "POST",
		beforeSend: function(){
		},
		success: function(response){
			if(response["status"]){
				img.attr("src", response["img_path"]);
				input_path.val(response["img_path"]);
			}else{
				img.attr("src", src_before);
				input_path.siblings(".help-block").html(response["error"]);
			}
		},
		error: function(){
			img.attr("src", src_before);
		}
	})
}
