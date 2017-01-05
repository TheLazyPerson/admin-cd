(function(app) {
  app.AppComponent =
    ng.core.Component({
      selector: 'my-app',
      template: '<main-navigation></main-navigation>'
    })
    .Class({
      constructor: function() {}
    });
})(window.app || (window.app = {}));
