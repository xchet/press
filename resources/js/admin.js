// Import the plugins
const Uppy = require('@uppy/core')
const XHRUpload = require('@uppy/xhr-upload')
const Dashboard = require('@uppy/dashboard')

// And their styles (for UI plugins)
// With webpack and `style-loader`, you can require them like this:
require('@uppy/core/dist/style.css')
require('@uppy/dashboard/dist/style.css')

const uppy = new Uppy()
    .use(Dashboard, {
        // trigger: '#uppyUpload',
        // inline: true,
        target: '#uppyUpload'
        // formData: true,
        // fieldName: 'image',
        // headers: {
        //     'Accept': 'application/json'
        // }
    })
    .use(XHRUpload, { 
        endpoint: '/admin/upload/image' 
    })

uppy.on('complete', (result) => {
//     console.log('Upload complete! We’ve uploaded these files:', result.successful)
// })
    if (anchor.attr('refresh-image-list') && result.successful.length > 0) {
        $.get('/admin/images-list', function (html) {
            $('#images-list').html(html);
            // Xblog.init();
            $('#images').imagesLoaded().progress(function () {
                $('#images').masonry();
            });
            $('#images').masonry();
        });
    }
}).run()




// function initCharts() {
//     $("canvas[data-target='chartjs']").each(function () {
//         let title = $(this).attr('chartjs-title') ? $(this).attr('chartjs-title') : '';
//         let type = $(this).attr('chartjs-type') ? $(this).attr('chartjs-type') : 'bar';
//         let labels = JSON.parse($(this).attr('chartjs-labels'));
//         let data = JSON.parse($(this).attr('chartjs-data'));
//         let options = JSON.parse($(this).attr('chartjs-options') ? $(this).attr('chartjs-options') : '{}');
//         let defaultOptions = {
//             scales: {
//                 yAxes: [{
//                     ticks: {
//                         beginAtZero: true,
//                     }
//                 }]
//             }
//         };
//         let config = {
//             type: type,
//             data: {
//                 labels: labels,
//                 datasets: [{
//                     label: title,
//                     data: data,
//                     backgroundColor: 'rgba(82,118,142,0.2)',
//                     borderColor: 'rgba(82,118,142,1)',
//                     borderWidth: 1
//                 }]
//             },
//             options: $.extend(true, {}, defaultOptions, options)
//         };
//         let ctx = this.getContext("2d");
//         new Chart(ctx, config);
//     });
// }

// function initImageUpload() {
//     if ($('.uppyUpload').length === 0) {
//         return;
//     }
//     let anchor = $('.uppyUpload');
//     new Uppy({
//         autoProceed: false,
//         meta: {
//             _token: window.XblogConfig.csrfToken,
//             type: 'xrt'
//         },
//         restrictions: {
//             maxFileSize: 5000000,
//             allowedFileTypes: ['image/*']
//         }
//     }).use(Dashboard, {
//         inline: true,
//         target: '.uppyUpload',
//         replaceTargetContent: true,
//         note: 'Images only, up to 5 MB',
//         proudlyDisplayPoweredByUppy: false,
//         height: anchor.attr('uppy-height') ? parseInt(anchor.attr('uppy-height')) : 360
//     }).use(XHRUpload, {
//         endpoint: '/admin/upload/image',
//         formData: true,
//         fieldName: 'image',
//         headers: {
//             'Accept': 'application/json'
//         }
//     }).on('complete', result => {
//         if (anchor.attr('refresh-image-list') && result.successful.length > 0) {
//             $.get('/admin/images-list', function (html) {
//                 $('#images-list').html(html);
//                 Xblog.init();
//                 $('#images').imagesLoaded().progress(function () {
//                     $('#images').masonry();
//                 });
//                 $('#images').masonry();
//             });
//         }
//     }).run()
// }

// initCharts();
// initImageUpload();