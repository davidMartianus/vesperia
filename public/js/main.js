$(function(){
	slidenav();
	filter();
	search();
	apiBtn();
	$('#form').parsley();
	btnParameter();
	btnSignature();
	$('[id^=phone]').keypress(validateNumber);
	ajaxCrud();
	submit();
	confDelete();
	btnEdit();
});

function slidenav(){
	$('.mobile-nav').click(function(){
		$('.logo-admin').removeClass('visible-img');
		$('.list-style').removeClass('visible-nav');
		$('.mobile-nav').removeClass('btn btn-danger btn-lg');
		$('.hamburger').removeClass('glyphicon glyphicon-menu-hamburger');
		$('.mobile-close').addClass('btn btn-danger btn-lg pull-right');
		$('.closebtn').addClass('glyphicon glyphicon-remove');
	});
	$('.mobile-close').click(function(){
		$('.logo-admin').addClass('visible-img');
		$('.list-style').addClass('visible-nav');
		$('.mobile-nav').addClass('btn btn-danger btn-lg');
		$('.hamburger').addClass('glyphicon glyphicon-menu-hamburger');
		$('.mobile-close').removeClass('btn btn-danger btn-lg pull-right');
		$('.closebtn').removeClass('glyphicon glyphicon-remove');
	});
}

function filter () {
    $('#api-table').DataTable({
    	"dom": '<<t>p>'
    });
}
function search(){
	var oTable = $('#api-table').DataTable();
	$('#filter').keyup(function(){
	      oTable.search($(this).val()).draw() ;
	})
}

function toggleModal(){
	$('#add-btn-user').on('click', function(e){
		e.preventDefault();
		$("#modalLabel").text('Add User');
		$("#userModal button[type=submit]").text('Add');
	});


	$('#edit-btn-user').on('click', function(e){
		e.preventDefault();
		$("#modalLabel").text('Edit User');
		$("#userModal button[type=submit]").text('Update');
	});
}

function apiBtn(){
	$('.btn-api').data('clickCounts', 1).click(function() {
	  var $this = $(this);
	  var $clickCounts = $this.data('clickCounts')
	  if ($clickCounts === 1) {
	    $this.addClass('bg-act-red');
	    $clickCounts += 1;
	  } else if ($clickCounts == 2) {
	    $this.addClass('bg-act-yellow');
	    $this.text('Change to Done');
	    $clickCounts += 1;
	  } else if ($clickCounts == 3) {
	    $this.addClass('bg-act-green');
	    $this.text('Solved');
	    $clickCounts += 1;
	  }  
	  $this.data('clickCounts', $clickCounts);
	});
}


function btnParameter(){
	$('.btn-param').click(function	(){
		
		var yourOblect = { "links": { "self": "http://example.com/articles", "next": "http://example.com/articles?page[offset]=2", "last": "http://example.com/articles?page[offset]=10" }, "data": [{ "type": "articles", "id": "1", "attributes": { "title": "JSON API paints my bikeshed!" }, "relationships": { "author": { "links": { "self": "http://example.com/articles/1/relationships/author", "related": "http://example.com/articles/1/author" }, "data": { "type": "people", "id": "9" } }, "comments": { "links": { "self": "http://example.com/articles/1/relationships/comments", "related": "http://example.com/articles/1/comments" }, "data": [ { "type": "comments", "id": "5" }, { "type": "comments", "id": "12" } ] } }, "links": { "self": "http://example.com/articles/1" } }], "included": [{ "type": "people", "id": "9", "attributes": { "first-name": "Dan", "last-name": "Gebhardt", "twitter": "dgeb" }, "links": { "self": "http://example.com/people/9" } }, { "type": "comments", "id": "5", "attributes": { "body": "First!" }, "relationships": { "author": { "data": { "type": "people", "id": "2" } } }, "links": { "self": "http://example.com/comments/5" } }, { "type": "comments", "id": "12", "attributes": { "body": "I like XML better" }, "relationships": { "author": { "data": { "type": "people", "id": "9" } } }, "links": { "self": "http://example.com/comments/12" } }] };

		var textedJson = JSON.stringify(yourOblect,undefined, 2);
		$('.form-param').html(textedJson);

	});
}

function btnSignature(){
	$('.btn-sign').click(function	(){
		
		var dummy = "tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
					
		$('.form-sign').html(dummy);

	});
}

function validateNumber(event){
	var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
    	return true;
    }
}	

function ajaxCrud(){
    
}

function submit(){
	//open modal add
	$('#add-btn-user').click(function(){
		$("#modalLabel").text('Add User');
        $('#modalSubmit').val("add");
        $('#modalSubmit').html("Add");
        $('#userModal').modal('show');
    });

	var form = $('#modal-form');
	
	form.on("submit", function(e){
		e.preventDefault();
		formData = form.serialize();
		
		var proccedName = true;
		var proccedEmail = true;
		var proccedPhone = true;
		var proccedPass = true;
		var proccedConfPass = true;
		
		var name = $("input[name='nama']");
		var email = $("input[name='mail']");
		var phone = $("input[name='phone']");
		var pass = $("input[name='password']");
		var confirmPass = $("input[name='confirmpassword']");
		
		var errorName = '<i class="fa fa-exclamation"><span>Enter valid name</span></i>';
		var errorEmail = '<i class="fa fa-exclamation"><span>Enter valid email</span></i>';
		var errorPhone = '<i class="fa fa-exclamation"><span>Enter the phone number</span></i>';
		var errorPass = '<i class="fa fa-exclamation"><span>Enter the password</span></i>';
		var errorConfPass = '<i class="fa fa-exclamation"><span>Password Not Match</span></i>';
	
		if(!name.val() == ""){
			proccedName = true;
			name.siblings('.fa').remove();
		}else { 
			proccedName = false;
			name.parent().append(errorName);
		}

		if(!phone.val() == ""){
			proccedPhone = true;
			phone.siblings('.fa').remove();
		}else { 
			proccedPhone = false;
			phone.parent().append(errorPhone);
		}
		
		if(!email.val() == "" && email.val().indexOf(".") >= 0 ){
			proccedEmail = true;		
			email.siblings('.fa').remove();
		}else { 
			email.parent().append(errorEmail);
			proccedEmail = false;
		}
		
		if(!pass.val() == ""){
			proccedPass = true;
			pass.siblings('.fa').remove();
		}else { 
			pass.parent().append(errorPass);
			proccedPass = false;
		}

		if(confirmPass.val() == pass.val()){
			proccedConfPass = true;
			confirmPass.siblings('.fa').remove();
		}else { 
			confirmPass.parent().append(errorConfPass);
			proccedConfPass = false;
		}

		if(proccedName == true && proccedEmail == true && proccedPhone == true && proccedPass == true && proccedConfPass == true ){
			$.ajax({
				type: 'get',
				url: form.attr('action'),
				data: formData
			})
			.done(function(response){
				$('.modal').modal('hide');
				$('.body').append('<div class="alert alert-success alert-dismissible fade in" role="alert">\
										<strong>You have successfuly add new user.</strong>\
									</div>');
				$('.alert').fadeOut(2000);
				setTimeout(function(){
					$('.alert').remove();
				},2000);
				})
			.fail(function(data){
				$('.modal').modal('hide');
				$('.body').append('<div class="alert alert-danger alert-dismissible fade in" role="alert">\
										<strong>Failed to add user.</strong>\
									</div>');
				setTimeout(function(){
					$('.alert').remove();
				},2000);
			});
		}
	});
} 

function confDelete(){
	 //open modal delete
    $('#del-btn-user').click(function(){
        $('.did').text($(this).data('id'));
		$('.dname').html($(this).data('nama'));
        $('#delModal').modal('show');
    });

    $('.delete').click(function(){
    	var proccedDel = true;

    	if (proccedDel == true) {
    		$('.modal').modal('hide');
				$('.body').append('<div class="alert alert-success alert-dismissible fade in" role="alert">\
										<strong>Delete Success</strong>\
									</div>');
				$('.alert').fadeOut(2000);
				setTimeout(function(){
					$('.alert').remove();
				},2000);
    	}else{
    		$('.modal').modal('hide');
    	}
    });
}

function btnEdit(){
	$('#edit-btn-user').click(function(){            
            $("#modalLabel").text('Edit User');
            $('.actionButton').addClass('edit');	        
	        $('#modalSubmit').html("Update");
            $('#userModal').modal('show');
    });  
}