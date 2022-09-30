(function ($) {

	Drupal.behaviors.moviesForm = {
    	attach: function(context, settings) {
        var date_input = document.getElementById('edit-field-release-date-0-value-date');
        let currentDate = new Date().toJSON().slice(0, 10);
        date_input.valueAsDate = new Date();

        date_input.onchange = function(){
          if (this.valueAsDate.valueOf() > new Date().valueOf()) {
            this.style.border = 'solid 1px red';
          }
          else {
            this.style.border = null;
          }
        }
     	}
	};
}(jQuery));