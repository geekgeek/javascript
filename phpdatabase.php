<html>
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type = "text/css"/>
  
  <style>
  .mainBox{
    border:solid 1px;
    padding:2px;
    overflow:scroll; 
    height:auto;
    max-width:100%;
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
    <h2>SQL PHP builder</h2>
        <div class="row">
            <div class="col-md-12">
                <form name="calc">

                <div class="form-group">
                  <input class="btn btn-success" type="button" value="Connect" onclick="addCodeSnippet1()">
                  <input class="btn btn-success" type="button" value="sqlOneRow" onclick="addCodeSnippet2()">
                  <input class="btn btn-success" type="button" value="sqlAllRows" onclick="addCodeSnippet3()">
                  
                     <input class="btn btn-success" type="button" value="Check" onclick="addCodeSnippet4()">
                     <input class="btn btn-success" type="button" value="CheckX" onclick="addCodeSnippet5()">
                        
                     <input class="btn btn-success" type="button" value="Multi" onclick="addCodeSnippet6()">
                     <input class="btn btn-success" type="button" value="Multix" onclick="addCodeSnippet7()">
                     
                     <input class="btn btn-success" type="button" value="header" onclick="addCodeSnippet8()">
                     
                     <input class="btn btn-success" type="button" value="br" onclick="addCodeSnippet9()">
                     <input class="btn btn-success" type="button" value="closeConnection" onclick="addCodeSnippet10()">
                     <input class="btn btn-success" type="button" value="finish" onclick="finishOff()">
                     <input class="btn btn-success" type="button" value="show/hide" onclick="showAndHide()">
                     <input class="btn btn-success" type="button" value="DeleteAll" onclick="deleteSnippet()">
					 
					 <input class="btn btn-success" type="button" value="database" onclick="datab1()">
                </div>
            </form>
        </div>
            
            
    <div class="row">
        <div class="col-md-12">
            <div id="mainBoxDiv">
                   <form class="mainBox">
                    
                    
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
 

</div>
<form action="send_post.php" method="post">
    <h3>Author:</h3>
    <input type="text" name="post_author">
    <h3>title:</h3>
    <input type="text" name="post_title">
    <input type="submit">
</form>

<?php
readDatabase("SELECT id, author, title FROM table2");

//Read from database some data
function readDatabase($sqlText = "SELECT id, author, title FROM table2")
{
	//CONNECT TO HOST
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testdb1";
	$dbtable = "table2";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//<END>



	// READ DATA FROM DATABASE
		//Get data
		$sql = $sqlText;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "id: " . $row["id"]. "______" . $row["author"]. "______" . $row["title"]. "<br>";
				
			}
		} else {

		}

	//<END>

	$conn->close();
}

//Write to database some data
function writeDatabase()
{
	//CONNECT TO HOST
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testdb1";
	$dbtable = "table2";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//<END>

	// INSERT DATA INTO DATABASE:
		$sql = "INSERT INTO $dbtable (author, title)
		VALUES ('author3', 'title3')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully<br><hr>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	//<END>
	//CLOSE CONNECTION TO DATABASE
		$conn->close();
	//<END>
}

echo"<br><br><br>";
?> 


<script>
//STARTUP FIRST:
$( document ).ready(function() {
  // Handler for .ready() called.  
  startUpCode();
});

//START CODE:
function startUpCode() {
    //code
    var codeBlock = '  <form><div class="form-group">';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
}
//main program
function sumValue()
{
var getBigText = calc.message.value;
var lengthOfText = getBigText.length; 
    var txt1 = calc.message.value;           
    $('.added').html(txt1); 
};

//Show hide textbox
function showAndHide() {
    //code
    $(".mainBox").toggle( "slow" );
    
}


//DELETE Code Snippets
function deleteSnippet() {
    //code
    $(".added").empty();
    $(".mainBox").empty();
    
    var codeBlock = '  <form><div class="form-group">';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
}


//###################################################################
//###################################################################
//###################################################################
//CODE SNIPPETS START:
function addCodeSnippet1() {
    //code
    
    var codeBlock = '  $servername = "localhost";$username = "root";$password = "";// Create connection$conn = new mysqli($servername, $username, $password);// Check connectionif ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}echo "Connected successfully";';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
}
function addCodeSnippet2() {
    //code
    
    var codeBlock = ' $sql = "SELECT id, author, title FROM $dbtable WHERE id=1";';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
}


function addCodeSnippet3() {
    //code
    
    var codeBlock = ' $sql = "SELECT id, author, title FROM $dbtable";';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
}


function addCodeSnippet4() {
    //code
  
    var codeBlock = '<input type="button" value="Button" onclick="customFunction()"><br>';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
}


function addCodeSnippet5() {
    //code
    
    var codeBlock = '<select name="cars"><option value="volvo">Volvo</option><option value="saab">Saab</option><option value="fiat">Fiat</option><option value="audi">Audi</option></select><br>';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
}


function addCodeSnippet6() {
    //code
    
    var codeBlock = ' <select><optgroup label="Swedish Cars">\
    <option value="volvo">Volvo</option>\
    <option value="saab">Saab</option>\
  </optgroup>\
  <optgroup label="German Cars">\
    <option value="mercedes">Mercedes</option>\
    <option value="audi">Audi</option>\
  </optgroup>\
</select> <br>';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
}


function addCodeSnippet7() {
    //code
    
    var codeBlock = ' Test name:<br><textarea name="message" rows="10" cols="30"></textarea><br><br>';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
}

function addCodeSnippet8() {
    //code
    
    var codeBlock = '<br>';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
}

function addCodeSnippet9() {
    //code
    
    var codeBlock = '<hr>';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");
    
}


function addCodeSnippet10() {
    //code
    var codeBlock = '$conn->close();';
    $(".added").append(codeBlock);
    $(".mainBox").append(escapeHtml(codeBlock)+"<br><br>");

    
}

//Code snippets end
//###################################################################
//###################################################################
//###################################################################

//Finish off code snippet
function finishOff() {
    //code
    var extraCode = '<script>function customFunction(){alert("customFunction speaking")};'+'</'+'script>'
    var codeBlock = '</div></form>';
    $(".added").append(extraCode+codeBlock);
    $(".mainBox").append(escapeHtml(extraCode)+"<br><br>"+escapeHtml(codeBlock)+"<br><br>");

    
}

//Escape HTML
function escapeHtml(text) {
    'use strict';
    return text.replace(/[\"&<>]/g, function (a) {
        return { '"': '&quot;', '&': '&amp;', '<': '&lt;', '>': '&gt;' }[a];
    });
};







</script>

</body>
</html>
