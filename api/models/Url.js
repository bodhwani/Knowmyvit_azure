

module.exports = {

  autoCreatedAt: false,
  autoUpdatedAt: false,


  attributes: {

    body : {
      type : 'text'
    },

    comments: {
      type: 'string',
    },

    creationDate: {
      columnName: 'cre_dt',
      type: 'datetime',
      defaultsTo: function() {return new Date();}
    },

    updateDate: {
      columnName: 'upd_dt',
      type: 'datetime',
      defaultsTo: function() {return new Date();}
    }



  },

  beforeValidate:function(values,next) {
    values.updateDate= new Date();
    next();
  }
};

