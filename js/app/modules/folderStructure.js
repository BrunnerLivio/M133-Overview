/* global hljs */
/* global $ */
/* global Vue */
$(function(){
	var folderStructure = new Vue({
		el: '#folderStructure',
		data : {
			folders: null,
			selectedFile : null,
			sourceCodeOpen : false,
		},
		created:function(){
			this.fetchData();
		},
		methods:{
			fetchData: function (){
				var self = this;
				$.ajax({
					url:"php/service/getFolderStructure.php",
					type:"GET",
					success:function(data){
						self.folders = JSON.parse(data);
						console.log(JSON.parse(data));
					}
				});
			},
			openFile(e){
				e.preventDefault();
				this.selectedFile = e.targetVM;
				$("#fileViewer").load(encodeURI(this.selectedFile.fullPath), function(){
					$("#codeViewer pre code").text(this.selectedFile.sourceCode);
					$('pre code').each(function(i, block) {
						hljs.highlightBlock(block);
					});
					$("#fileViewer form").submit(function(e){
						e.preventDefault();
					});
				});
				
			},
			openFolder(e){
				$(e.target).closest(".folder").toggleClass("open");
				$(e.target).closest(".folder").find("#folderList").toggleClass("open");
			},
		}
	});
});
