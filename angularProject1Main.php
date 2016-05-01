<!DOCTYPE html>
<html ng-app="myApp1">
<head>
    
    <title>My Angular App</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
         
        <script src="jquery/jquery112.js" type="text/javascript"></script>
        
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type = "text/css"/>
        <script ng-app="app1.js"></script>
        <script src="app1.js" type="text/javascript"></script>
 
</head>



<body>
    
    
    
<div class="container">
    <br><br>
    <h2>Bootstrap Angular</h2>
  
        <div class="row"><!--Box3 -->
            <div class="col-md-12" id="custom">

                
                <div ng-controller="mainController">
                    <span>values:</span>
                    <input type="text" ng-model="first" />
                    <input type="text" ng-model="second"/>
                    <button ng-click="updateValue()">sum</button>
                    
                    <br>
                    <br>
                    {{calculation}}
                    

                    <h2>Array Length: {{arrAddedText.length}}</h2>
                    <ul>
                        <li ng-repeat="keys in arrAddedText">
                            {{keys}}
                        </li>
                    </ul>
                    
                    
                    
                <h2>Array Linked Length: {{arrLinkedList1.length}}</h2>
                    <div class="col-md-8">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        language
                                    </th>
                                    <th>
                                        grade
                                    </th>
                                </tr>
                            </thead>
                            <tr ng-repeat="keys in arrLinkedList1">
                                <td>{{keys.item}} </td>
                                <td><input ng-model="keys.item"/></td>
                            </tr>
                            
                            <tr ng-repeat="keys in arrLinkedList1">
                                <td>{{keys.grade}} </td>
                                <td><input ng-model="keys.grade"/></td>
                            </tr>
                        </table>
                    </div>
                
                
                <div class="col-md-4">
                    change first item:
                    <input ng-model="arrLinkedList1[0].item"/>
                </div>
                

                
                
                </div>
                

                
            </div>
        </div>

<br>

</div>
    
    
    
<script>

</script>



</body>



</html>
