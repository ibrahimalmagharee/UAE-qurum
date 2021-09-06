'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var datatable = $('#social_link_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'social-link',
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
                    field: 'name_ar',
                    title: labels.social_name_ar,
                },{
                    field: 'name_en',
                    title: labels.social_name_en,
                },{
                    field: 'link',
                    title: labels.social_link,
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
						<a href="social-link/'+row.id+'/edit" class="btn btn-sm btn-info btn-icon btn-icon-md" title="'+labels.change+'">\
							<i class="la la-edit"></i>\
						</a>\
						';
						// <a href="social-link/delete/'+row.id+'" data-id="'+row.id+'" id="btn-delete-social_link-'+row.id+'" class="btn btn-sm btn-danger btn-icon btn-icon-md btn-delete-social_link" title="'+labels.delete+'">\
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
