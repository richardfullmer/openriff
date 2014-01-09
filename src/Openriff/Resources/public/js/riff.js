var openRiffApp = angular.module('openRiffApp', []);

openRiffApp.controller('PlayCtrl', ['$scope', function($scope) {
    $scope.search_results = null;
    $scope.playing = null;
    $scope.sound = null;

    $scope.search = function() {
        SC.get("/tracks", {'q': $scope.q }, function(tracks) {
            $scope.search_results = tracks;
            $scope.$apply();
        });
    };

    $scope.select = function(track) {
        console.log(track);
        if ($scope.sound) {
            $scope.sound.stop();
        }
        $scope.playing = track;
        SC.stream("/tracks/" + track.id, function(sound) {
            if ($scope.sound == null) {
                sound.play();
            }
            $scope.sound = sound;
            $scope.$apply();
        });
    };

    $scope.play = function() {
        $scope.sound.play();
    };

    $scope.pause = function() {
        $scope.sound.pause();
    };
}]);
