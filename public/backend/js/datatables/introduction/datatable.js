'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var datatable = $('#introduction_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'introduction',
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
                    field: 'image',
                    title: labels.image,
                    template: function(row) {
                        let  mediaElement = '<img src="' + row.image + '" alt="photo">';
                        return '<div class="kt-user-card-v2">\
                                    <div class="kt-user-card-v2__pic">\
                                        '+mediaElement+'\
                                    </div>\
							    </div>';
                    }
                },
               {
                    field: 'title_ar',
                    title: labels.title_ar,
                },{
                    field: 'title_en',
                    title: labels.title_en,
                },{
                    field: 'description_ar',
                    title: labels.description_ar,
                },{
                    field: 'description_en',
                    title: labels.description_en,
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
						<a href="introduction/'+row.id+'/edit" class="btn btn-sm btn-info btn-icon btn-icon-md" title="'+labels.change+'">\
							<i class="la la-edit"></i>\
						</a>\
						';
						// <a href="introduction/delete/'+row.id+'" data-id="'+row.id+'" id="btn-delete-introduction-'+row.id+'" class="btn btn-sm btn-danger btn-icon btn-icon-md btn-delete-introduction" title="'+labels.delete+'">\
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
