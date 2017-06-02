var app = angular.module("app", []);
app.service("getJSON", ['$http', function($http) {
    this.data = function(spreadSheetID) {
        return $http.get("http://spreadsheets.google.com/feeds/list/"+spreadSheetID+"/od6/public/values?alt=json");
    }
}]);

app.controller('mainController', ['$scope', '$log', 'getJSON', function($scope, $log, getJSON) {
    getJSON.data("1jzf554WLhpPimIPS2-YK2nPEKB0USgGHRr8IHsnMXlw")
        .then(function(responce) {
            $scope.rxMale = responce.data.feed.entry;
        
        })
        .catch(function(e) {
            $log.error(e);
        })
    getJSON.data("1BGw28ur6SLm40SwDy-MohGHLf4E449cZ7Le9Mj6tAMQ")
        .then(function(responce) {
            $scope.rxFemale = responce.data.feed.entry;
        
        })
        .catch(function(e) {
            $log.error(e);
        })
   
    $scope.setActive = function(tableRow) {
        $scope.selectedRow = tableRow;
    }
}])





