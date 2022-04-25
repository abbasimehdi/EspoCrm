define('custom:my-action-handler', ['action-handler'], function (Dep) {

    return Dep.extend({

        actionSomeName: function (data, e) {
            Espo.Ajax
                .getRequest('Lead/' + this.view.model.id)
                .then(response => {
                    console.log(response);
                });
        },

        initSomeName: function () {
            this.controlButtonVisibility();

            this.view.listenTo(
                this.view.model,
                'change:status',
                this.controlButtonVisibility.bind(this)
            );
        },

        controlButtonVisibility: function () {
            if (~['Converted', 'Dead', 'Recycled'].indexOf(this.view.model.get('status'))) {
                this.view.hideHeaderActionItem('someName');

                return;
            }

            this.view.showHeaderActionItem('someName');
        },
    });
});