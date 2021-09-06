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
                        url: 'contact-us-messages',
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
                    field: 'first_name',
                   width: 100,
                    title: labels.first_name,
                },{
                    field: 'last_name',
                    width: 100,
                    title: labels.last_name,
                },{
                    field: 'phone',
                    width: 100,
                    title: labels.phone,
                },{
                    field: 'email',
                    width: 150,
                    title: labels.email,
                },{
                    field: 'message',
                    width: 150,
                    title: labels.message,
                }, {
                    field: 'Actions',
                    title: labels.actions,
                    sortable: false,
                    width: 50,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
						<a href="contact-us-messages/'+row.id+'/show" class="btn btn-sm btn-info btn-icon btn-icon-md btn-show-c-message" title="عرض الرسالة">\
							<i class="la la-eye"></i>\
						</a>\
					';
                    },
                }

                ],

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
