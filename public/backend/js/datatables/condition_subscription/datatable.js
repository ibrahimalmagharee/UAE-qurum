'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var datatable = $('#condition_subscription_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'condition-subscription',
                        // sample custom headers
                        headers: {'Accept-Language': 'ar'},
                        map: function(raw) {
                            // sample data mapping
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;
                            }
                            return dataSet;
                        },
                    },
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                // height: 450, // datatable's body's fixed height
                footer: false, // display/hide footer
            },

            sortable: true,
            pagination: true,

            search: {
                input: $('#generalSearch'),
            },

            // columns definition
            columns: [
               {
                    field: 'title_ar',
                    title: labels.title_ar,
                },{
                    field: 'title_en',
                    title: labels.title_en,
                },{
                    field: 'description1_ar',
                    title: labels.description1_ar,
                },{
                    field: 'description1_en',
                    title: labels.description1_en,
                },{
                    field: 'description2_ar',
                    title: labels.description2_ar,
                },{
                    field: 'description2_en',
                    title: labels.description2_en,
                },{
                    field: 'description3_ar',
                    title: labels.description3_ar,
                },{
                    field: 'description3_en',
                    title: labels.description3_en,
                },{
                    field: 'description4_ar',
                    title: labels.description4_ar,
                },{
                    field: 'description4_en',
                    title: labels.description4_en,
                }
                ,{
                    field: 'Actions',
                    title: labels.actions,
                    sortable: false,
                    width: 110,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
						<a href="condition-subscription/'+row.id+'/edit" class="btn btn-sm btn-info btn-icon btn-icon-md" title="'+labels.change+'">\
							<i class="la la-edit"></i>\
						</a>\
						';
						// <a href="condition-subscription/delete/'+row.id+'" data-id="'+row.id+'" id="btn-delete-condition_subscription-'+row.id+'" class="btn btn-sm btn-danger btn-icon btn-icon-md btn-delete-condition_subscription" title="'+labels.delete+'">\
						// 	<i class="la la-trash"></i>\
						// </a>\

                    },
                }],

        });

    };

    return {
        // Public functions
        init: function() {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableDataLocalDemo.init();
});
