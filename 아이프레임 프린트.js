function pdf_print(url){
	var new_frame = document.createElement("iframe");
	new_frame.setAttribute("id","pdf-print-iframe");
	new_frame.style.width = "0";
	new_frame.style.height = "0";
	new_frame.src = url;

	document.getElementById("page").append(new_frame);
	setTimeout(function(){
		document.getElementById("pdf-print-iframe").contentWindow.print();
	});
}
