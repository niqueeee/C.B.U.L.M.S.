
$(document).ready(function()
{ 
  var table = $('#myTable').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: dataurl,
    columns: [
    {data: 'regi_code'},
    {data: 'offer_code'},
    {data: 'name'},
    {data: 'date'},
    {data: 'regi_count'},
    {data: 'action'}
    ]
});
});