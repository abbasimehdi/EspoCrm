define('custom:my-action-handler', ['action-handler'], function (Dep) {

    return Dep.extend({

        actionTest: function (data, e) {
            Espo.Ajax
                .getRequest('Lead/' + this.view.model.id)
                .then(response => {
                    console.log(response);
                });
        },

        initTest: function () {
            this.controlActionVisibility();

            this.view.listenTo(
                this.view.model,
                'change:status',
                this.controlActionVisibility.bind(this)
            );
        },

        controlActionVisibility: function () {
            if (~['Converted', 'Dead', 'Recycled'].indexOf(this.view.model.get('status'))) {
                this.view.hideActionItem('test');

                return;
            }

            this.view.showActionItem('test');
        },
    });
});
