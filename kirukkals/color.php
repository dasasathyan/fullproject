<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<p>Input a color</p>

<div ng-app="" ng-init="bgcolor='lightblue'">

<input style="background-color:{{bgcolor}}" ng-model="bgcolor" >
</div>
</body>
</html>
