'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var datatable = $('#media_center_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'media-center',
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
                    field: 'image1',
                    title: labels.image1,
                    width: 110,
                    template: function(row) {
                        let  mediaElement = '<img src="'+ row.image1 +'" alt="photo">';
                        return '<div class="kt-user-card-v2">\
                                    <div class="kt-user-card-v2__pic">\
                                        '+mediaElement+'\
                                    </div>\
							    </div>';
                    }
                },
                {
                    field: 'image2',
                    title: labels.image2,
                    width: 110,
                    template: function(row) {
                        let  mediaElement = '<img src="' + row.image2 + '" alt="photo">';
                        return '<div class="kt-user-card-v2">\
                                    <div class="kt-user-card-v2__pic">\
                                        '+mediaElement+'\
                                    </div>\
							    </div>';
                    }
                },
                {
                    field: 'image3',
                    title: labels.image3,
                    width: 110,
                    template: function(row) {
                        let  mediaElement = '<img src="' + row.image3 + '" alt="photo">';
                        return '<div class="kt-user-card-v2">\
                                    <div class="kt-user-card-v2__pic">\
                                        '+mediaElement+'\
                                    </div>\
							    </div>';
                    }
                },
                {
                    field: 'image4',
                    title: labels.image4,
                    width: 110,
                    template: function(row) {
                        let  mediaElement = '<img src="' + row.image4 + '" alt="photo">';
                        return '<div class="kt-user-card-v2">\
                                    <div class="kt-user-card-v2__pic">\
                                        '+mediaElement+'\
                                    </div>\
							    </div>';
                    }
                },
                {
                    field: 'image5',
                    title: labels.image5,
                    width: 110,
                    template: function(row) {
                        let  mediaElement = '<img src="' + row.image5 + '" alt="photo">';
                        return '<div class="kt-user-card-v2">\
                                    <div class="kt-user-card-v2__pic">\
                                        '+mediaElement+'\
                                    </div>\
							    </div>';
                    }
                },
                {
                    field: 'image_video_cover',
                    title: labels.image_video_cover,
                    width: 110,
                    template: function(row) {
                        let  mediaElement = '<img src="' + row.image_video_cover + '" alt="photo">';
                        return '<div class="kt-user-card-v2">\
                                    <div class="kt-user-card-v2__pic">\
                                        '+mediaElement+'\
                                    </div>\
							    </div>';
                    }
                },{
                    field: 'Actions',
                    title: labels.actions,
                    sortable: false,
                    width: 110,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row) {
                        return '\
						<a href="media-center/'+row.id+'/edit" class="btn btn-sm btn-info btn-icon btn-icon-md" title="'+labels.change+'">\
							<i class="la la-edit"></i>\
						</a>\
						';
						// <a href="media-center/delete/'+row.id+'" data-id="'+row.id+'" id="btn-delete-media_center-'+row.id+'" class="btn btn-sm btn-danger btn-icon btn-icon-md btn-delete-media_center" title="'+labels.delete+'">\
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
