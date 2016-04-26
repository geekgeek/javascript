<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap builder</title>
        <script src="js/jquery112.js" type="text/javascript"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type = "text/css"/>
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>

        <link rel="stylesheet" href="css/style.css" type = "text/css"/>

</head>
<body>
<div class="container">
    <br><br>
    <h2>Bootstrap builder</h2>
        <div class="row">
            <div class="col-md-12">
                <input class="btn btn-success" type="button" value="show/hide" onclick="showHideT('#mainBoxDiv2')">
                
                <div id="mainBoxDiv2"><!--Box1 -->
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
                <div class="form-group" id="mainNav">
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
                     <input class="btn btn-success" type="button" value="show/hide" onclick="showHideT('.mainBox')">
                     <input class="btn btn-success" type="button" value="DeleteAll" onclick="deleteSnippet()">
                     
                </div>
            </form>
                <hr>
        </div>
    </div>
      
    
    <div class="progress"> <!--CHART1 -->
        <div id="chart1" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            
        </div>
    </div>
    
            
    <div class="row"><!--Box2 -->
        <div class="col-md-12">
            <div id="mainBoxDiv">
                   <form class="mainBox" id="mainBoxId">
                    
                    
                   </form>
            </div>
        </div>
    </div>
    
    
      <div class="row"><!--Box3 -->
              <div class="col-md-12">
                <div class="added" id="addedId">
            </div>
        </div>   
        </div>
    
        <div class="row"><!--Box3 -->
            <div id="custom">

            </div>

        </div>

<br>
</div>

    
    
<script>

//global var:

dataHolder.countNumber = 0;

//###################################
//###################################
//STARTUP FIRST:
$( document ).ready(function() 
{
  // Handler for .ready() called.  
  startUpCode();
  
  readJsonFile("includedFiles/pictures.json");
  
  
});




//START CODE:
function startUpCode() 
{
    //code
    var stylingOfSite = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['styling'];  ?>';
    var codeBlock = '<!DOCTYPE html> <html><head>'+stylingOfSite+' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type = "text/css"/> <title>Bootstrap builder</title></head><body>';
    
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    $("#mainBoxDiv2").hide();  
}






//End
//###################################
//###################################


//###################################
//###################################
//SHOW HIDE


//Show hide textbox
function showHideT(divIdClass)
{
    //".mainBox"
    $(divIdClass).toggle( "slow" );
}
//End
//###################################
//###################################


//###################################################################
//###################################################################
//###################################################################
//CODE SNIPPETS START:


function addCodeSnippet1() 
{
    //code
    
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['container'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br><br><br>");
    scrollMate();
globalCountPlus();

}

function addCodeSnippet2() 
{
    //code
    
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['row'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    globalCountPlus();

}

function addCodeSnippet3() 
{
    //code
    
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md12'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet4()
{
    //code
  
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md8'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet5() 
{
    //code
    
  var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md6'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet6() 
{
    //code
    
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md4'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet7() 
{
    //code
    
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md3'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}

function addCodeSnippet8() 
{
    //code
    
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md2'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}

function addCodeSnippet9() 
{
    //code
    
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md1'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
}


function addCodeSnippet10() 
{
    //code
    globalCountMinus();
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['closeDiv'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br><br><br>");
    scrollMate();
    
}

function addCodeSnippet11() 
{
    //code
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md5'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    
}

function addCodeSnippet12() 
{
    //code
    var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md7'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    
}

function addCodeSnippet13() 
{
    //code
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md9'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    
}

function addCodeSnippet14() 
{
    //code
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md10'];  ?>';
    $(".added").append(codeBlock); 
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    scrollMate();
    
}

function addCodeSnippet15() 
{
    //code
   var codeBlock = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['md11'];  ?>';
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

//DELETE Code Snippets
function deleteSnippet() 
{
    //code
    $(".added").empty();
    $(".mainBox").empty();
    
    var stylingOfSite = ' <?php include "includedFiles/codeBlockArray.php"; print $arrBootstrap['styling'];  ?>';
    var codeBlock = '<!DOCTYPE html> <html><head>'+stylingOfSite+' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type = "text/css"/> <title>Bootstrap builder</title></head><body>';
    
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
    globalCountReset();
}

//Copies html code to inside textbox
function storeHtmlCode()
{
    
    $("#code").val($("#mainBoxDiv").text()); 


}



//Finish off code snippet
function finishOff() 
{
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
function escapeHtml(text) 
{
    'use strict';
    return text.replace(/[\"&<>]/g, function (a) {
        return { '"': '&quot;', '&': '&amp;', '<': '&lt;', '>': '&gt;' }[a];
    });
};

//Scroll automatic downward
function scrollMate()
{

      var elem = document.getElementById('mainBoxId');
      elem.scrollTop = elem.scrollHeight;
}

//Global Counters:
//Stores the counter value
function dataHolder()
{
    this.countNumber;
}



//COUNT +1
function globalCountPlus()
{
    
    
    dataHolder.countNumber = dataHolder.countNumber + 1;
    $("#divButton").attr('value', "</div> " + dataHolder.countNumber);
     
    displayChart("#chart1");
}


//COUNT -1
function globalCountMinus()
{
    dataHolder.countNumber = dataHolder.countNumber - 1;
    $("#divButton").attr('value', "</div> " + dataHolder.countNumber);
    
    displayChart("#chart1");
}

//COUNT = 0
function globalCountReset()
{
    dataHolder.countNumber = 0;
    $("#divButton").attr('value', "</div> " + dataHolder.countNumber);
    
    displayChart("#chart1");
}
//</End>





//CHART
function displayChart(divVal)
{
    
     $(divVal).empty();
     $(divVal).attr('style', "width:" + dataHolder.countNumber*5 + "%");
     $(divVal).val(dataHolder.countNumber);
     $(divVal).append(dataHolder.countNumber);
}

//read textfile from server
function readTextFile(locationOfFile)
{
    //"includedFiles/textfile.txt"
    $(".mainBox").load(locationOfFile);
}

//read json file from server
function readJsonFile(locationOfFile)
{
    $.getJSON( locationOfFile, function( data ) {
      var items = [];
      $.each( data, function( key, val ) {
        items.push( "<li id='" + key + "'>" + val + "</li>" );
      });

      $( "<ul/>", {
        "class": "my-new-list",
        html: items.join( "" )
      }).appendTo( "body" );
    });

}

function testJSON()
{
    var employees = [
        {
        "firstName":"John",
        "lastName":"Doe"
        }, 
        {
        "firstName":"Anna",
        "lastName":"Smith"
        },
        {
        "firstName":"Peter",
        "lastName":"Jones"
        }
    ];
    
        var jobDescriptions = [
        {
        "type":"developer",
        "description":"do some diverse code"
        }, 
        {
        "type":"web developer",
        "description":"do some php"
        },
        {
        "type":"java developer",
        "description":"do some java code"
        }
    ];
    
    alert(employees[0].lastName);
    alert(jobDescriptions[1].type);
}

//Example class
function counterClass()
{
    this.propertyNumber = 5;
   

        this.setValue = function setValue(x)
        {
            this.propertyNumber = x;

        },

        this.getValue = function getValue()
        {
            return this.propertyNumber;
        };
    
}



//BUTTONS START
//add button last
function addButtonLast(buttonName, addedFunction)
{
$("#mainNav").append('<input class="btn btn-success" type="button" value="'+buttonName+'" onclick=' + addedFunction +'>');

}

//add button first
function addButtonFirst(buttonName, addedFunction)
{
$("#mainNav").prepend('<input class="btn btn-success" type="button" value="'+buttonName+'" onclick=' + addedFunction +'>');

}

//add button before
function addButtonBefore(buttonName, addedFunction)
{
$("#mainNav").before('<input class="btn btn-success" type="button" value="'+buttonName+'" onclick=' + addedFunction +'>');

}

//add button after
function addButtonAfter(buttonName, addedFunction)
{
$("#mainNav").after('<input class="btn btn-success" type="button" value="'+buttonName+'" onclick=' + addedFunction +'>');

}

//list of buttons
function listOfButtons()
{
    var lengthOfArray;
    var i;
    
    var selectedButtons = [
    '<input class="btn btn-success" type="button" value="1a" onclick="addCodeSnippet1()">',
    '<input class="btn btn-success" type="button" value="2a" onclick="addCodeSnippet1()">',
    '<input class="btn btn-success" type="button" value="6a" onclick="addCodeSnippet1()">'
    ];
    
    selectedButtons.push('<input class="btn btn-success" type="button" value="7a" onclick="addCodeSnippet1()">');



    lengthOfArray = selectedButtons.length;

    //loop throug array
    for (i = 0; i < lengthOfArray; i++) 
    {
       $("#mainNav").append(selectedButtons[i]);
    } 
    

}
//</END>
//End
//###################################################################
//###################################################################
//###################################################################




</script>

</body>
</html>
