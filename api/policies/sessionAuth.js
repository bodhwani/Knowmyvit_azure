// /**
//  * sessionAuth
//  *
//  * @module      :: Policy
//  * @description :: Simple policy to allow any authenticated user
//  *                 Assumes that your login action in one of your controllers sets `req.session.authenticated = true;`
//  * @docs        :: http://sailsjs.org/#!/documentation/concepts/Policies
//  *

module.exports = function(req, res, ok) {

  // User is allowed, proceed to the next policy,
  // or if this is the last policy, the controller
  if (req.session.authenticated) {
    return ok();
  }
  else{
    var requireLoginError = [{name:'requireLogin',message:'You must be signed in'}];
    req.session.flash = {
      err: requireLoginError
    };
    return res.redirect('/');

  }
  // User is not allowed
  // (default res.forbidden() behavior can be overridden in `config/403.js`)
};

//
// module.exports = function(req, res, ok) {
//
//   // User is allowed, proceed to the next policy,
//   // or if this is the last policy, the controller
//   if (req.isAuthenticated()) {
//     return ok();
//   }
//
//   // User is not allowed
//   // (default res.forbidden() behavior can be overridden in `config/403.js`)
//   return res.redirect('/login');
// };
