$( document ).ready(function() {

var page = 1;
var current_page = 1;
var total_page =0;
var is_ajax_fire = 0;

manageData();

/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: 'getData.php',
        data: {page:page}
    }).done(function(data){
    	total_page = Math.ceil(data.total/10);
    	current_page = page;

    	$('#pagination').twbsPagination({
	        totalPages: total_page,
	        visiblePages: current_page,
	        onPageClick: function (event, pageL) {
	        	page = pageL;
                if(is_ajax_fire != 0){
	        	  getPageData();
                }
	        }
	    });

    	manageRow(data.data);
        is_ajax_fire = 1;

    });

}

/* Get Page Data*/
function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: 'getData.php',
    	data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}


/* Add new Item table row */
function manageRow(data) {
	var rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>'+value.denumire_produs+'</td>';
	  	rows = rows + '<td>'+value.descriere+'</td>';
                rows = rows + '<td>'+value.pret+'</td>';
	  	rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
        rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
        rows = rows + '</td>';
	  	rows = rows + '</tr>';
	});

	$("tbody").html(rows);
}


       
/* Create new Item */
$(".crud-submit").click(function(e){
    var form_action = $("#create-item").find("form").attr("action-data");
    var denumire_produs = $("#create-item").find("input[name='denumire_produs']").val();
    var descriere = $("#create-item").find("textarea[name='descriere']").val();
    var pret = $("#create-item").find("input[name='pret']").val();
    if(denumire_produs!='' && descriere != ''&& pret != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + form_action,
            data:{denumire_produs:denumire_produs,descriere:descriere, pret:pret}
        }).done(function(data){
            $("#create-item").find("input[name='denumire_produs']").val('');
            $("#create-item").find("textarea[name='descriere']").val('');
            $("#create-item").find("input[name='pret']").val('');
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
        });
    }else{
        alert('You are missing  name , details or  price.')
    }

});

/* Remove Item */
 
$("body").on("click",".remove-item",function(){
    if (confirm("are you sure you want to remove the item?")) {
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: 'delete.php',
        data:{id:id}
    }).done(function(data){
        c_obj.remove();
        toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
    });
    }
});




/* Edit Item */
$("body").on("click",".edit-item",function(){

    var id = $(this).parent("td").data('id');
    var denumire_produs = $(this).parent("td").prev("td").prev("td").prev("td").text();
    var descriere = $(this).parent("td").prev("td").prev("td").text();
    var pret = $(this).parent("td").prev("td").text();
    $("#edit-item").find("input[name='denumire_produs']").val(denumire_produs);
    $("#edit-item").find("textarea[name='descriere']").val(descriere);
     $("#edit-item").find("input[name='pret']").val(pret);
    $("#edit-item").find(".edit-id").val(id);

});


/* Updated new Item */
$(".crud-submit-edit").click(function(e){

    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var denumire_produs = $("#edit-item").find("input[name='denumire_produs']").val();
    var descriere = $("#edit-item").find("textarea[name='descriere']").val();
     var pret = $("#edit-item").find("input[name='pret']").val();
    var id = $("#edit-item").find(".edit-id").val();

    if(denumire_produs != '' && descriere != '' && pret != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: form_action,
            data:{denumire_produs:denumire_produs,descriere:descriere ,pret:pret,id:id}
        }).done(function(data){
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
        });
    }else{
        alert('You are missing name  or description or price.')
    }

});
});