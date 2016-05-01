/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* global angular */

var myApp1 = angular.module('myApp1', []);



myApp1.controller("mainController", function($scope)
{
    $scope.first = 1;
    $scope.second = 2;
    
    
    $scope.updateValue = function()
    {
        $scope.calculation = ($scope.first + +$scope.second);
    };
    
    $scope.arrAddedText = 
    [
    ' text1',
    ' text2',
    ' text3',
    ' text4',
    ' text5',
    ' text6',
    ' text7',
    ' text8',
    ' text9'
    ];
    
    $scope.arrLinkedList1 = 
    [
     {item: "item1", grade:"grade1"},
     {item: "item2", grade:"grade2"},
     {item: "item3", grade:"grade3"},
     {item: "item4", grade:"grade4"},
     {item: "item5", grade:"grade5"},
     {item: "item6", grade:"grade6"}
    ];
    

});
