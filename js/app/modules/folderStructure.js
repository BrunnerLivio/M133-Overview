/* global hljs */
/* global $ */
/* global Vue */
$(function(){
<<<<<<< HEAD
	$.ajax({
		url:"../../partials/structure.html",
		type:"GET",
		success:function(data){
			var folderStructure = new Vue({
				el: '#folderStructure',
				data : {
					files: null,
					selectedFile : null,
					sourceCodeOpen : false,
				},
				created:function(){
					
					Vue.partial('structure', data);
				
					
					this.fetchData();
				},
				methods:{
					fetchData: function (){
						var self = this;
						$.ajax({
							url:"php/service/getFolderStructure.php",
							type:"GET",
							success:function(data){
								self.files = JSON.parse(data);
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
		}
	});
	
=======
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
					url:"/php/service/getFolderStructure.php",
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
				$("#fileViewer").load(encodeURI(this.selectedFile.fullPath));
				$("#codeViewer pre code").text(this.selectedFile.sourceCode);
				$('pre code').each(function(i, block) {
					hljs.highlightBlock(block);
				});
				$("#fileViewer form").submit(function(e){
					e.preventDefault();
				});
			},
			openFolder(e){
				$(e.target).closest(".folder").toggleClass("open");
				$(e.target).closest(".folder").find("#folderList").toggleClass("open");
			},
		}
	});
>>>>>>> f7c3a91dd3c4a21c0322cc84eaa441b518dfffbf
});
