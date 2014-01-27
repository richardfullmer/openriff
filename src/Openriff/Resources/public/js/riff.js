var openRiffApp = angular.module('openRiffApp', []);

openRiffApp.factory('Routing', function() {
    return Routing;
});

openRiffApp.factory('SC', function() {
    return SC;
});

openRiffApp.factory('pusher', function($window) {
    return $window.pusher;
});

openRiffApp.controller('PlayCtrl', ['$scope', '$http', 'Routing', 'SC', 'pusher', function($scope, $http, Routing, SC, pusher) {

    var channel = pusher.subscribe('queue');
    channel.bind('track_added', function(data) {
        var trackId = data;

        SC.get("/tracks/" + trackId, function(track) {
            console.log(track);
            $scope.queue.push(track);

            if ($scope.queue.length == 1 && $scope.playing == null) {
                $scope.playNext();
            }
        });
    });


    $scope.search_results = null;
    $scope.playing = null;
    $scope.sound = null;

    $scope.queue = [];

    $scope.search = function() {
        SC.get("/tracks", {'q': $scope.q, 'filter': 'streamable'}, function(tracks) {
            $scope.search_results = tracks;
            $scope.$apply();
        });
    };

    $scope.favorites = function() {
        SC.get("/users/" + soundcloud_user_id + "/favorites", function(tracks) {
            $scope.search_results = tracks;
            $scope.$apply();
        });
    };

    $scope.select = function(track) {
        $http.post(Routing.generate('api_track_add'), track);
    };

    $scope.toggleMute = function() {
        $scope.sound.toggleMute();
    };

    $scope.setVolume = function(level) {
        $scope.sound.setVolume(level);
    };

    $scope.voteDown = function(track) {
        console.log('downvote');
        console.log(track);
        if (track == $scope.playing) {
            $scope.playNext();
        } else {
            for (var i = $scope.queue.length; i--;) {
                if ($scope.queue[i] === track) {
                    $scope.queue.splice(i, 1);
                    break;
                }
            }
        }
    };

    $scope.playNext = function() {
        var isMuted;
        var volume;
        if ($scope.sound) {
            isMuted = $scope.sound.muted;
            volume  = $scope.sound.volume;
            $scope.sound.stop();
        }
        if ($scope.queue.length > 0) {
            $scope.playing = $scope.queue.shift();
            console.log($scope.playing);

            SC.stream("/tracks/" + $scope.playing.id, function(sound) {
                sound.play({
                    whileplaying: function() {
                        $scope.$apply();
                    },
                    onfinish: function() {
                        $scope.playNext();
                    }
                });
                $scope.sound = sound;
                if(isMuted == 1){
                    $scope.sound.mute();
                }
                $scope.sound.setVolume(volume);
            });
        }
    }
}]);
