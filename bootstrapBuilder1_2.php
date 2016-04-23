<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type = "text/css"/>
  <script src="bootstrap/js/bootstrap.js"></script>
  
  <title>Bootstrap builder</title>
  <style>
   #row12
   {
       border-style: dotted;
   }
   .col-md-11,.col-md-10,.col-md-9, .col-md-8, .col-md-7, .col-md-6, .col-md-5, .col-md-4, .col-md-3, .col-md-2, .col-md-1
   {
       border-style: dotted;
   }
  .mainBox{
    border:solid 1px;
    padding:2px;
    overflow:scroll; 
    height:auto;
    max-width:100%;
    height: 200px;
    position : relative; bottom:0;
  }
  
  .mainBox{
      font-family:"Verdana, Geneva, sans-serif";
  }
  textarea {
    max-width: 99%;
    background-color:white;
    color:black;
  }
  </style>

</head>
<body>
<div class="container">
    <br><br>
    <h2>Bootstrap builder</h2>
        <div class="row">
            <div class="col-md-12">

                <input class="btn btn-success" type="button" value="show/hide" onclick="hideshow2()">
                
                <div id="mainBoxDiv2">
                    <input class="btn btn-success" type="button" value="Get data" onclick="storeHtmlCode()">
                    <form action="includedFiles/formSubmit.php" method="post" >
                        code: <br> <textarea name="code"  rows="5" cols="120" id="code"></textarea><br>
                        <input type="submit" value="Store data">
                    </form>
                    <form action="http://localhost/bootstrapBuilderBasic/includedFiles/test.html">
                        <input type="submit" value="Link">
                    </form>
                    
                </div>
                
                
                <form name="calc">
                <div class="form-group">
                  <input class="btn btn-success" type="button" value="Container" onclick="addCodeSnippet1()">
                  <input id="rowB" class="btn btn-success" type="button" value="Row" onclick="addCodeSnippet2()">
                  <input id="divButton" class="btn btn-success" type="button" value="</div> 0" onclick="addCodeSnippet10()">
                  
                     <input class="btn btn-success" type="button" value="12" onclick="addCodeSnippet3()">
                     <input class="btn btn-success" type="button" value="11" onclick="addCodeSnippet15()">
                     <input class="btn btn-success" type="button" value="10" onclick="addCodeSnippet14()">
                     <input class="btn btn-success" type="button" value="9" onclick="addCodeSnippet13()">
                     <input class="btn btn-success" type="button" value="8" onclick="addCodeSnippet4()">
                     <input class="btn btn-success" type="button" value="7" onclick="addCodeSnippet12()">
                     <input class="btn btn-success" type="button" value="6" onclick="addCodeSnippet5()">
                     <input class="btn btn-success" type="button" value="5" onclick="addCodeSnippet11()">   
                     <input class="btn btn-success" type="button" value="4" onclick="addCodeSnippet6()">
                     <input class="btn btn-success" type="button" value="3" onclick="addCodeSnippet7()">
                     <input class="btn btn-success" type="button" value="2" onclick="addCodeSnippet8()">
                     <input class="btn btn-success" type="button" value="1" onclick="addCodeSnippet9()">
                     
                     
                     
                     
                     <input class="btn btn-success" type="button" value="finish" onclick="finishOff()">
                     <input class="btn btn-success" type="button" value="show/hide" onclick="showAndHide()">
                     <input class="btn btn-success" type="button" value="DeleteAll" onclick="deleteSnippet()">
                     <hr>
                </div>
            </form>
        </div>
    </div>
      
    
    <div class="progress">
        <div id="chart1" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
            
        </div>
    </div>
    
            
    <div class="row">
        <div class="col-md-12">
            <div id="mainBoxDiv">
                   <form class="mainBox" id="mainBoxId">
                    
                    
                   </form>
            </div>
        </div>
    </div>
    
    
      <div class="row">      
              <div class="col-md-12">
                <div class="added" id="addedId">
            </div>
        </div>
    
    
</div>

<br>
</div>


    
    
    
    
<script>
//global var:
var globalCounter = 0;

//STARTUP FIRST:
$( document ).ready(function() {
  // Handler for .ready() called.  
  startUpCode();
});

//START CODE:
function startUpCode() {
    //code
    var stylingOfSite ='<style>   .col-md-11,.col-md-10,.col-md-9, .col-md-8, .col-md-7, .col-md-6, .col-md-5, .col-md-4, .col-md-3, .col-md-2, .col-md-1 { border-style: dotted;}#row12{border-style: dotted;} </style>';
    var codeBlock = '<!DOCTYPE html> <html><head>'+stylingOfSite+' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type = "text/css"/> <title>Bootstrap builder</title></head><body>';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
     $("#mainBoxDiv2").hide();  
}
//main program

//Show hide textbox
function showAndHide() {
    //code
    $(".mainBox").toggle( "slow" );
    
    
}

function hideshow2()
{
  $("#mainBoxDiv2").toggle( "slow" );  
}

//DELETE Code Snippets
function deleteSnippet() {
    //code
    $(".added").empty();
    $(".mainBox").empty();
    
    var stylingOfSite ='<style>   .col-md-11,.col-md-10,.col-md-9, .col-md-8, .col-md-7, .col-md-6, .col-md-5, .col-md-4, .col-md-3, .col-md-2, .col-md-1 { border-style: dotted;}#row12{border-style: dotted;} </style>';
    var codeBlock = '<!DOCTYPE html> <html><head>'+stylingOfSite+' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type = "text/css"/> <title>Bootstrap builder</title></head><body>';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
    globalCountReset();
}


//###################################################################
//###################################################################
//###################################################################
//CODE SNIPPETS START:


function addCodeSnippet1() {
    //code
    
   var codeBlock = ' <?php include 'includedFiles/codeBlock1.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br><br><br>");
    scrollMate();
globalCountPlus();

}

function addCodeSnippet2() {
    //code
    
   var codeBlock = ' <?php include 'includedFiles/codeBlock2.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    globalCountPlus();

}

function addCodeSnippet3() {
    //code
    
   var codeBlock = ' <?php include 'includedFiles/codeBlock3.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet4() {
    //code
  
   var codeBlock = ' <?php include 'includedFiles/codeBlock4.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet5() {
    //code
    
   var codeBlock = ' <?php include 'includedFiles/codeBlock5.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet6() {
    //code
    
   var codeBlock = ' <?php include 'includedFiles/codeBlock6.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet7() {
    //code
    
   var codeBlock = ' <?php include 'includedFiles/codeBlock7.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}

function addCodeSnippet8() {
    //code
    
   var codeBlock = ' <?php include 'includedFiles/codeBlock8.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}

function addCodeSnippet9() {
    //code
    
   var codeBlock = ' <?php include 'includedFiles/codeBlock9.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet10() {
    //code
    globalCountMinus();
   var codeBlock = ' <?php include 'includedFiles/codeBlock10.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br><br><br>");
    scrollMate();
    $("#rowB").css("color", "white");
    
}

function addCodeSnippet11() {
    //code
   var codeBlock = ' <?php include 'includedFiles/codeBlock11.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    
}

function addCodeSnippet12() {
    //code
    var codeBlock = ' <?php include 'includedFiles/codeBlock12.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    
}

function addCodeSnippet13() {
    //code
   var codeBlock = ' <?php include 'includedFiles/codeBlock13.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    
}

function addCodeSnippet14() {
    //code
   var codeBlock = ' <?php include 'includedFiles/codeBlock14.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    
}

function addCodeSnippet15() {
    //code
    var codeBlock = ' <?php include 'includedFiles/codeBlock15.php'; ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}
//Code snippets end
//###################################################################
//###################################################################
//###################################################################

//###################################################################
//###################################################################
//###################################################################
//Special buttons:
function storeHtmlCode()
{
    
    $("#code").val($("#mainBoxDiv").text()); 


}



//Finish off code snippet
function finishOff() {
    //code
    var extraCode = '</body>';
    var codeBlock = '</html>';
    $(".added").append(extraCode+codeBlock);
    $(".mainBox").append(escapeHtml(extraCode)+"<br><br>"+escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}
//End
//###################################################################
//###################################################################
//###################################################################


//###################################################################
//###################################################################
//###################################################################
//Added functionality blocks
//Escape HTML
function escapeHtml(text) {
    'use strict';
    return text.replace(/[\"&<>]/g, function (a) {
        return { '"': '&quot;', '&': '&amp;', '<': '&lt;', '>': '&gt;' }[a];
    });
};

//Scroll automatic
function scrollMate()
{

      var elem = document.getElementById('mainBoxId');
      elem.scrollTop = elem.scrollHeight;
}

function globalCountPlus()
{
    
    
    globalCounter = globalCounter + 1;
    $("#divButton").attr('value', "</div> " + globalCounter);
     
    displayChart();
}

function globalCountMinus()
{
    globalCounter = globalCounter - 1;
    $("#divButton").attr('value', "</div> " + globalCounter);
    
    displayChart();
}

function globalCountReset()
{
    globalCounter = 0;
    $("#divButton").attr('value', "</div> " + globalCounter);
    
    displayChart();
}


function displayChart()
{
     $("#chart1").empty();
     $("#chart1").attr('style', "width:" + globalCounter*5 + "%");
     $("#chart1").val(globalCounter);
     $("#chart1").append(globalCounter);
}
//End
//###################################################################
//###################################################################
//###################################################################



</script>

</body>
</html>
