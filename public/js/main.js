$(function(){
	slidenav();
	filter();
	search();
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