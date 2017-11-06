  $('.datepicker').pickadate({
  min: new Date(),
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15, // Creates a dropdown of 15 years to control year
  firstDay: 1
});	

var picker = $('#beginDate').pickadate('picker');
picker.set('select', new Date());
var picker = $('#endDate').pickadate('picker');
picker.set('select', new Date());


 $('select').material_select();

