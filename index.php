<?php
  include "./php/modules/bundles.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>M133</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <?php bundles::renderStyles(); ?>
    <?php bundles::renderScripts(); ?>
  </head>
  <body>
    <main>
      <div id="container">
        <div id="content">
          <h1> Modul 133 </h1>  
          <div class="wrapper" id="folderStructure">
            <div class="left" >
              <h2> Ordner 
                <a v-on="click: fetchData">
                    <i class="fa fa-refresh" id="refreshFolderStructure" ></i>
                </a>
              </h2>
              <ul id="folderList">
                <li class="folder" v-repeat="folders" >
                  <div class="name" v-on="click: openFolder">
                    {{path}}
                   </div>
                  <ul>
                    <li v-repeat="files" class="file" data-fullPath="{{fullPath}}" v-on="click: openFile">{{name}}</li>
                  </ul>
                </li>  
              </ul> 

            </div><!-- left -->
            <div class="right" id="fileOverview">
              <h2 class="selectedFileName"><span>{{selectedFile.name}}</span> 
              <div id="view-source" v-on="click: sourceCodeOpen = !sourceCodeOpen"> 
                  <span v-if="sourceCodeOpen">Hide </span>
                  <span v-if="!sourceCodeOpen">View</span>
                  Source Code
                </div>
              </h2>
              <div id="fileViewer"  v-show="!sourceCodeOpen"></div>
              <div id="codeViewer" v-show="sourceCodeOpen">
                <pre><code class="php html"></code></pre>
              </div>
            </div><!-- right -->
          </div><!-- wrapper -->
        </div><!-- content -->
      </div><!-- container -->
    </main>
  </body>
</html>