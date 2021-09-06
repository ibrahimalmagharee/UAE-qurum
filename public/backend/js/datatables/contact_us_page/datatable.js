'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var datatable = $('#contact_us_page_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'contact-us-page',
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
                    field: 'website',
                    title: labels.website,
                },{
                    field: 'phone',
                    title: labels.phone,
                },{
                    field: 'email',
                    title: labels.email,
                },{
                    field: 'location_ar',
                    title: labels.location_ar,
                },{
                    field: 'location_en',
                    title: labels.location_en,
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
						<a href="contact-us-page/'+row.id+'/edit" class="btn btn-sm btn-info btn-icon btn-icon-md" title="'+labels.change+'">\
							<i class="la la-edit"></i>\
						</a>\
						';
						// <a href="contact-us-page/delete/'+row.id+'" data-id="'+row.id+'" id="btn-delete-contact_us_page-'+row.id+'" class="btn btn-sm btn-danger btn-icon btn-icon-md btn-delete-contact_us_page" title="'+labels.delete+'">\
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
