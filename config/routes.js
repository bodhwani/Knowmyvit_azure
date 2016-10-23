module.exports.routes = {


  '/': {
  controller: 'UserController',
    action: 'login'
},
'/logout': {
  controller: 'UserController',
    action: 'logout'
},
'/home': {
  controller: 'HomeController',
    action: 'index'
},

};
