
var buil_option="";
var floor_option="";
var range_option="";

var room = 1;
function fields() {

  room++;
  var objTo = document.getElementById('fields')
  var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
  divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><label class="control-label">Building Type*</label><select class="form-control form-line" id="builtype" name="builtype[]">' + buil_option +'</select></div></div></div>  <div class="col-sm-3 nopadding"><div class="form-group"><label class="control-label">Floor #*</label><select class="form-control form-line" id="floor" name="floor[]">'+ floor_option +'</select></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><label class="control-label">Unit Type*</label><select class="form-control form-line" id="utype" name="utype[]"><option value="0">Raw</option><option value="1">Shell</option></select></div></div></div>  <div class="col-sm-3 nopadding"><div class="form-group"><label class="control-label">Size*</label><select class="form-control form-line" id="size" name="size[]">'+ range_option +'</select></div></div><div class="col-sm-12 nopadding"><div class="form-group"><label class="control-label">Remarks*</label><textarea class="form-control form-line" id="remarks" name="remarks[]" value="" ></textarea></div><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div><div class="clear"></div>';

  objTo.appendChild(divtest);
}
function remove_fields(rid) {
  $('.removeclass'+rid).remove();

}

function getBuildingType()
{
  $.get(buil_type_url, function (data) {
    $.each(data,function(index,value)
    {
      $('#builtype').append($('<option>', {value:value.id, text:value.description}));
      buil_option+=' <option value="' + value.id +'">' + value.description + '</option>';
    });
  });
}


function getFloor()
{
  $.get(floor_url, function (data) {
    $.each(data,function(index,value)
    {
      $('#floor').append($('<option>', {value:value.number, text:value.number}));
      floor_option+=' <option value="' + value.number + '">' + value.number + '</option>';
    });
    console.log(data);
  });
}


function getRange()
{
  $.get(range_url, function (data) {
    $.each(data,function(index,value)
    {
      $('#size').append($('<option>', {value:value.value, text:value.name}));
      range_option+=' <option value="' + value.value +'">' + value.name + '</option>';
    });
  });
}




//for querying list of city
function getTenaCity()
{
  $.get('/custom/getCity/' + $("#tena_province").val(), function (data) {
    console.log(data);
    $('#tena_city').children('option').remove();
    $.each(data,function(index,value)
    {
      $('#tena_city').append($('<option>', {value:value.id, text:value.description}));
    });
  });
}
function getReprCity()
{
  $.get('/custom/getCity/' + $("#repr_province").val(), function (data) {
    console.log(data);
    $('#repr_city').children('option').remove();
    $.each(data,function(index,value)
    {
      $('#repr_city').append($('<option>', {value:value.id, text:value.description}));
    });
  });
}



$(document).ready(function()
{
 getTenaCity();
 getReprCity();
 getBuildingType();
 getFloor();
 getRange();
 $("#tena_province").change(function(data){
  getTenaCity();
});
 $("#repr_province").change(function(data){
  getReprCity();
});
})
