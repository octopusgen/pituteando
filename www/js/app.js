var app = (function() {

  var firebaseRef = new Firebase('https://demos.firebaseio.com');

  var showAlert = function() {
    var fn, args = arguments;
    if (navigator && navigator.notification && navigator.notification.alert) {
      fn = navigator.notification.alert(msg);
    } else if (typeof alert === "function") {
      fn = alert;
    } else {
      fn = console.log;
    }
    fn.apply(null, args);
  }

  function init() {}

  function login(provider) {
    firebaseRef.authWithOAuthPopup(provider, function(error, authData) {
      if (error) {
        // an error occurred while attempting login
        var message = 'An error occurred.';
        showAlert(message, function(){}, 'Failure!', 'Close');

      } else {
        // user authenticated with Firebase
        var message = 'User ID: ' + authData.uid + ', Provider: ' + authData.provider;
        showAlert(message, function(){}, 'Success!', 'Close');

        // Log out so we can log in again with a different provider.
        firebaseRef.unauth();
      }
    });
  }

  return {
    init: init,
    login: login
  };
})();
