<style>

	img{
		max-width: 100%;
	}
	.media_library{
		display: none;
		position: fixed;
		width: 90%;
		height: 90%;
		top: 5%;
		left: 5%;
		background-color: white;
		z-index: 9999;
		box-sizing: border-box;
		box-shadow: 0 0 2px 2px #6ca8e4;
		
		overflow-y: scroll;
		border-radius: 10px;
		padding:20px;
	}
	.media_library h2{
		font-style: oblique;
		color: #a13e9d;
	}
	.actions{
		border-left: 1px solid grey;
		padding:10px;
		position: relative;
		height: 100%;
		
	}
	.close_button{
		margin-top:100px;
		background-color: crimson;
		border: none;
		padding: 10px;
		width: 100%;
		color: white;
		
	}
	#gallery{
		padding:20px;
	}
	.save_button{
		background-color: #a13e9d;
		border: none;
		padding: 10px;
		width: 100%;
		color: white;
		margin-bottom: 15px;
	}
	.upload_button{
		background-color: #3f829d;
		border: none;
		padding: 10px;
		width: 100%;
		color: white;
	}
	#img_col{
		padding:30px 20px;
	}
</style>
<!-- upload -->
<style>
	body {
  font-family: sans-serif;
}
a {
  color: #369;
}
.note {
  width: 500px;
  margin: 50px auto;
  font-size: 1.1em;
  color: #333;
  text-align: justify;
}
#drop-area {
  border: 2px dashed #ccc;
  border-radius: 20px;
  width: 480px;
  margin: 50px auto;
  padding: 20px;
}
#drop-area.highlight {
  border-color: purple;
}
p {
  margin-top: 0;
}
.my-form {
  margin-bottom: 10px;
}
#gallery {
  margin-top: 10px;
}
#gallery img {
  width: 150px;
  margin-bottom: 10px;
  margin-right: 10px;
  vertical-align: middle;
}
.button {
  display: inline-block;
  padding: 10px;
  background: #ccc;
  cursor: pointer;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.button:hover {
  background: #ddd;
}
#fileElem {
  display: none;
}
#upload{
	display: none;
}
</style>
<div class="media_library">
	<h2 id="media_library_title">Media Library</h2>
	<button onclick="switch_media()" class="btn btn-success">Associated Images</button>
	<button onclick="switch_library()" class="btn btn-info">Library</button>
	<button onclick="close_lib()" class="btn btn-danger">Close</button>
	<div id="img_col" class="row">
		
	</div>
	<div id="lib">
		<div class="row">
			<div class="col-md-9">

				<div id="gallery">
					<div class="row" id="collection">

						<?php foreach ($media as $m): ?>
							<div class="col-md-2 img-box">
								<input type="checkbox" 

								<?=in_array($m->id, $mappings)?"checked":""?>
								onclick="add_media(this, <?=$m->id?>)"
								>
								<img src="{{route('img', explode('/',$m->path))}}" 
								alt=""
								>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div class="actions">
					<p>Please choose images for the post, and click save when you are done</p>
					<button class="save_button" onclick="submit_collection(event)">Save</button>
					<p>Or upload your own photos and add them to library</p>
					<button class="upload_button" onclick="open_upload()">Upload</button>
					<button class="close_button" onclick="close_lib()">close</button>
				</div>
			</div>
		</div>
	</div>
	<div id="upload" >
		<div id="drop-area">
			<form class="my-form">
				<p>Upload multiple files with the file dialog or by dragging and dropping images onto the dashed region</p>
				<input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
				<label class="button" for="fileElem">Select some files</label>
			</form>
			<progress id="progress-bar" max=100 value=0></progress>
		</div>
		
	</div>
</div>
<script type="text/javascript">
	switch_media();
	function switch_media(){
		document.getElementById('lib').style.display="none";
		document.getElementById("img_col").style.display="flex";
		document.getElementById("img_col").innerHTML="";
		const images=document.getElementsByClassName("img-box");
		console.log(images);
		for(const imgNode of images){
			if(imgNode.getElementsByTagName("input")[0].checked){
				let img=imgNode.getElementsByTagName("img")[0].cloneNode(true);
				let div=document.createElement("div");
				div.classList.add("col-md-2");
				div.appendChild(img)
				document.getElementById('img_col').appendChild(div);
			
			}
		}
		
	}
	function switch_library(){
		document.getElementById('lib').style.display="block";
		document.getElementById("img_col").style.display="none";
	}

	function close_lib(){
		console.log("here");
		document.getElementsByClassName("media_library")[0].style.display="none";
	}

	var image_collection={}

	function add_media(elem, id){
		document.getElementsByClassName("save_button")[0].innerHTML="Save";
		if(elem.checked){
			image_collection[id]={
				media_id:id,
				master_id:<?=$master_id?>,
				master_table:"<?=$table?>"
			};
		}else{
			delete image_collection[id]
		}

	}

	function submit_collection(event){
		event.preventDefault();
		let save_button=document.getElementsByClassName("save_button")[0];
		save_button.innerHTML="Saving ...";
		fetch("{{route('media_map')}}",{
			method:'POST',
			body:JSON.stringify(image_collection),
			headers: {
				'Content-Type': 'application/json'
			}
		})
		.then(res=>res.json())
		.then(json=>save_button.innerHTML="Saved✅")
		.catch(err=>console.log(err));
	}
	function open_upload(){
		document.getElementById("lib").style.display="none";
		document.getElementById("upload").style.display="block";
	}	
</script>

<!-- Upload -->

<script>
// length of files
var f_length=0;
	// ************************ Drag and drop ***************** //
let dropArea = document.getElementById("drop-area")

// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, preventDefaults, false)   
  document.body.addEventListener(eventName, preventDefaults, false)
})

// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
  dropArea.addEventListener(eventName, highlight, false)
})

;['dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, unhighlight, false)
})

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)

function preventDefaults (e) {
  e.preventDefault()
  e.stopPropagation()
}

function highlight(e) {
  dropArea.classList.add('highlight')
}

function unhighlight(e) {
  dropArea.classList.remove('active')
}

function handleDrop(e) {
  var dt = e.dataTransfer
  var files = dt.files

  handleFiles(files)

}

let uploadProgress = []
let progressBar = document.getElementById('progress-bar')

function initializeProgress(numFiles) {
  progressBar.value = 0
  uploadProgress = []

  for(let i = numFiles; i > 0; i--) {
    uploadProgress.push(0)
  }
}

function updateProgress(fileNumber, percent) {
  uploadProgress[fileNumber] = percent
  let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
  console.debug('update', fileNumber, percent, total)
  progressBar.value = total
  if(fileNumber==f_length-1){
  	document.getElementById("lib").style.display="block";
  	document.getElementById("upload").style.display="none";
  }
}

function handleFiles(files) {
  f_length=0;
  files = [...files]
  f_length=files.length;
  initializeProgress(files.length)
  files.forEach(uploadFile)
  
 
}

function previewFile(file,id) {
  let reader = new FileReader()
  reader.readAsDataURL(file)
  reader.onloadend = function() {
    let div=document.createElement('div')
    div.classList.add("col-md-2");
    div.classList.add("img-box");
    let input=document.createElement('input');
    input.type="checkbox";
    input.onchange=add_media(this, id);
    let img = document.createElement('img')
    img.src = reader.result
    div.appendChild(input);
    div.appendChild(img);
    document.getElementById('collection').appendChild(div)
  }
}

function uploadFile(file, i) {
  var url = "{{route('upload_media')}}"
  var xhr = new XMLHttpRequest()
  var formData = new FormData()
  xhr.open('POST', url, true)
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')

  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
  })

  xhr.addEventListener('readystatechange', function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      updateProgress(i, 100) // <- Add this
      previewFile(file, xhr.responseText)


    }
    else if (xhr.readyState == 4 && xhr.status != 200) {
      // Error. Inform the user
     
    }
  })

  formData.append('upload_preset', 'ujpu6gyk')

  formData.append('file', file)
  xhr.send(formData)
}
</script>

