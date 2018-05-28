@extends('layout.template')
@section('content')

<div class="wrapper">
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<button id="btn_add" name="btn_add" class="btn btn-primary">
						<i>CREATE</i>
					</button>
				</div>
			</div>
		</div>
			<hr>
		@foreach($datas as $data)
		<div class="col-sm-4">
			    <div class="ui card">
				  <div class="content">
				    <div class="header">{{$data->nama}}</div>
				</div>
			  <div class="content">
			    <h4 class="ui sub header">{{$data->email}}</h4>
			    <div class="ui small feed">
			      <div class="event">
			        <div class="content">
			          <div class="summary" id="hasil_input">
			             <a>Rp. {{$data->deal}}</a> added <a>Jenny Hess</a> to the project
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
			  <div class="extra content">
			  	  <button class="btn btn-flat pink accent-3 waves-effect waves-light white-text"><a href="{{ url('read', $data->id) }}"> Readmore </a> </button>
				  <button class="btn btn-warning btn-detail open_modal" value="{{$data->id}}">Edit</button>
		          <button class="btn btn-danger btn-delete delete_product" onclick="reloadPage()" value="{{$data->id}}">Delete</button>
			  </div>
		</div>
		<br>
 	 </div>
	@endforeach
	</div>
</div>

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">PROJECT</h3>
      </div>
      <div class="modal-body">
        <form id="frmProducts" name="frmProducts" class="" novalidate="">
        	 {!! csrf_field() !!}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">NAME:</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">EMAIL:</label>
            <input type="text" class="form-control" id="email" name="id_email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">DEAL:</label>
            <input type="number" pattern="^[0-9]+(\.[0-9]{1,2})?$" class="form-control" id="deal" name="id_deal">
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="btn-save" value="add" onclick="refreshPage()" data-dismiss="modal" >Save changes</button>
          <input type="hidden" id="id" name="id" value="0">
      </div>
      
     	</form>
    </div>
  </div>
</div>

<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('template/js/ajaxcrud.js')}}"></script>

@endsection

<script type="text/javascript">
	function refreshPage(){
		 window.location = window.location.href;
	}
   		$('#deal').number( true, 0 );
		$('#btn-save').click(function(){
    	$('#hasil_input').text($('#deal').val());

   $(function() {
  $('svg g circle, svg g text').on('click', function() {
    $('svg g.active').removeClass('active');
    $(this).parent('svg g').addClass('active');
  });
});
  
</script>