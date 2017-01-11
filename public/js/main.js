$(function(){
	slidenav();
	filter();
	search();
	toggleModal();
	apiBtn();
	$('#form').parsley();
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
	var oTable = $('#api-table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
	$('#filter').keyup(function(){
	      oTable.search($(this).val()).draw() ;
	})
}

function toggleModal(){
	$('#add-btn-user').on('click', function(e){
		e.preventDefault();
		// var title = $(this).data('title');
		$("#modalLabel").text('Add User');
		$("#userModal button[type=submit]").text('Add');
	});


	$('#edit-btn-user').on('click', function(e){
		e.preventDefault();
		// var title = $(this).data('title');
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