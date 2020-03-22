<div class="{{ $widget['wrapperClass'] ?? 'col-sm-6 col-md-4' }}" >
	<div class="{{ $widget['class'] ?? 'card mb-2' }}">
	  @if (isset($widget['content']['header']))
	  <div class="card-header">{!! $widget['content']['header'] !!}</div>
	  @endif
	  <div class="card-body">
			<table class="table table-striped table-sm table-hover table-bordered">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">&nbsp;</th>
			      <th scope="col">&nbsp;</th>
						@foreach ($widget['datatable']['m']  as $m)
						 <th class="text-right">{{ date("F", mktime(0, 0, 0, $m, 10)) }}</th>
						@endforeach
			    </tr>
			  </thead>
			  <tbody>
					@foreach ($widget['datatable']['sc']  as $sc)
					<tr >
						<th scope="row" class="text-center" rowspan=3 >{{ $sc }}</th>
					@foreach ($widget['datatable']['y']  as $ky =>  $y)
					@php
						if($ky == 0 ){
								$rw_class= 'table-light';
						}
						if($ky == 1){
								$rw_class= 'table-secondary';
						}
						if($ky == 2){
								$rw_class= 'table-light';
						}
					@endphp
						<td scope="row" class="text-center {{ $rw_class }}"><strong>{{ $y }}</strong></td>
							@foreach ($widget['datatable']['m']  as $m)
							@php
								$k = $y.$m.$sc;
	 						@endphp

								 @if ($widget['datatable']['amt'][$k]['change'] == 'up')
						 	  	<td class="text-right {{ $rw_class }} text-danger">${{ $widget['datatable']['amt'][$k]['amt'] }}	<i class="fa fa-arrow-up"></i> </td>
						 	  @endif
								@if ($widget['datatable']['amt'][$k]['change'] == 'down')
								<td class="text-right {{ $rw_class }} text-success">${{ $widget['datatable']['amt'][$k]['amt'] }}	 <i class="fa fa-arrow-down"></i></td>
							 @endif
							 @if ($widget['datatable']['amt'][$k]['change'] == 'no')
							 <td class="text-right {{ $rw_class }}">${{ $widget['datatable']['amt'][$k]['amt'] }}</td>
							@endif

							@endforeach

				    </tr>
					@endforeach
					<tr><th colspan=14 class="text-right table-light">&nbsp;</th></tr>

					@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>
