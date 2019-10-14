// JavaScript Document @ TBaze Solutions

//MOBILE SLIDE NAVIGATION
$(document).ready(function() {
  $('#sidebar-toggle').click(function(i) {
    i.preventDefault();
    $('#main-wrapper').toggleClass('toggled');
  $('body').toggleClass('body-out');
    $('#overlay').toggle();
  });

  $('#overlay').click(function() {
    $('#overlay').hide('200');
    $('#main-wrapper').removeClass('toggled');
  $('body').removeClass('body-out');  
});	 

// BOOTSTRAP TOOLTIP
    $('[data-toggle="tooltip"]').tooltip();  
    $('[data-toggle="modal"]').tooltip(); 
    //$('.input_value').val('');

// NOTIFY ELEMENT HIDE
  //$('.notif').fadeOut(20000); //remove after 15 Seconds
  setTimeout(function(){
    $('.notif').fadeOut('slow');
  }, 15000);

  $('#receivedDate').datepicker({
    dateFormat: 'yy-mm-dd',
    minDate: '-30D', // past dates disabled from current date.
    maxDate: 0, // max of 90days from current day
    //autoclose: true,
  });
  $('#deliveryDate').datepicker({
    dateFormat: 'yy-mm-dd',    
    minDate: 0,
    maxDate: '+90D',
  });
  
  $('#eventDate').datepicker({
    dateFormat: 'yy-mm-dd',    
    minDate: 0,
  });
});

//FORM VALIDATE
  $('#form__input').validate({
    rules:{
      username:"required",
      firstName: "required",
      userEmail: "required",
      userPhone:"required",      
      password : {
        required : true,
        minlength : 5,
      },
      v_password : {
        minlength:5,
        equalTo : '[name="password"]'
      },
      newPassword : {
        required : true,
        minlength : 5,
      },
      confirmPassword : {
        minlength:5,
        equalTo : '[name="newPassword"]'
      },
      clientName:"required",
      //clientEmail:"required",
      clientPhone:"required",
      clientLocality:"required",
      clientState:"required",
    }
  });

  //OTHER NAME DELIVERY DISPLAY
  function dispField(elem){
    if(elem.value == 0){
      document.getElementById('deliveredOtherName').style.display = "none";
    }
    else if(elem.value == 1){
      document.getElementById('deliveredOtherName').style.display = "none";
    }
    else if(elem.value == 2){
      document.getElementById('deliveredOtherName').style.display = "none";
    }
    else{
      document.getElementById('deliveredOtherName').style.display = "block";
    }
  }

// FILTER/SEARCH TABLE
function filterFunction(){
  // Declare variables
  var input, filter, table, tr, td, tdL, tdC, i, txtValue, txtValueL, txtValueC;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("userListTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++){
    td = tr[i].getElementsByTagName("td") [2]; // 3rd data in row.
    tdL = tr[i].getElementsByTagName("td") [3];
    tdC = tr[i].getElementsByTagName("td") [4];
    if (td || tdL || tdC){
      txtValue = td.textContent || td.innerText;
      txtValueL = tdL.textContent || tdL.innerText;
      txtValueC = tdC.textContent || tdC.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }
      else if (txtValueL.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }
      else if (txtValueC.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }
      else{
        tr[i].style.display = "none";
      }
    }
  }
}
//ADD COMMA TO DIGIT 1,000,000
$.fn.digits = function(){
  return this.each(function()
  {
    $(this).text($(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  })
}
$(".numbers").digits();


function overlayconfirm(){
// $('.modalBackground').show();
// $( ".alert-title" ).focus();
var del = confirm("Are you sure you want to delete this record?");
if (del == true){
  alert("Record Deleted")
}else{
  alert("Record not deleted")
}
return del;
};