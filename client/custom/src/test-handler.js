define('custom:test-handler', [], function () {

    var TestHandler = function (view) {
        this.view = view;
    };

    _.extend(TestHandler.prototype, {

        initTest: function () {
            // called when the list view is loaded

            // here you can remove the action on a specific condition
            // this.view.removeMassAction('test');

            // var acl = this.view.getAcl();
            // var currentUser = this.view.getUser();
        },

        actionTest: function (data) {
            console.log(data); // data to be sent to the back-end

            // here you can show a modal or send ajax request
            // this.view.createView( ... )
            // Espo.Ajax.postReqest( ...)
        },

    });

    return TestHandler;
});
