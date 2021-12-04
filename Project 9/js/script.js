var app = angular.module("firstApp",["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "pages/main.html"
    })
    .when("/contact", {
        templateUrl : "pages/contact.html"
    })
    .when("/services", {
        templateUrl : "pages/services.html"
    })
    .when("/calculator", {
        templateUrl : "pages/calculator.html"
    })
});