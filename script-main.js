
	 $(function(){
         // When the toggle areas in your navbar are clicked, toggle them
         $("#search-button, #search-icon").click(function(e){
             e.preventDefault();
             $("#search-button, #search-form").toggle();
         });
      });  

	 var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');