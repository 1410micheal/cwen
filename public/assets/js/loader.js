  var showLoader = function(msg) {
              $.blockUI({ 
                  message: '<i class="icon-spinner4 spinner"></i><br>'+msg,
                  //timeout: 5000, //unblock after 2 seconds
                  overlayCSS: {
                      backgroundColor: '#1b2024',
                      opacity: 0.8,
                      cursor: 'wait'
                  },
                  css: {
                      border: 0,
                      color: '#fff',
                      padding: 0,
                      backgroundColor: 'transparent'
                  }
              });
            }

 var hideLoader = function(){

 	    $.unblockUI();
 }

//autoloading
  var loaderUp = function() {

              $.blockUI({ 
                  message: '<i class="icon-spinner10 icon3x spinner"></i><br>Please wait...',
                  //timeout: 2000, //unblock after 2 seconds
                  overlayCSS: {
                      backgroundColor: '#05204a',
                      opacity: 0.8,
                      cursor: 'progress'
                  },
                  css: {
                      border: 0,
                      color: '#fff',
                      padding: 0,
                      backgroundColor: 'transparent'
                  }
              });
 }

  var blockLoader = function(block,message){

    $(block).block({ 
            message: '<i class="icon-spinner4 spinner"></i><br>'+message,
            //timeout: timeout, //unblock after 2 seconds
            overlayCSS: {
                backgroundColor: '#fff',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                backgroundColor: 'transparent'
            }
        });
  }

  var unBlock = function(elem){
    elem.unblock();
  }


function showAlert(title='Attention',message='',alertType='success'){

  swal({
    title: title,
    text: message,
    type: alertType
   });

}


