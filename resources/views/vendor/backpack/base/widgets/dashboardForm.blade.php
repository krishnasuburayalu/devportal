<div class="{{ $widget['wrapperClass'] ?? 'col-sm-6 col-md-4' }}">
	<div class="{{ $widget['class'] ?? 'card mb-2' }}">
		<div class="card-body">
<form class="form-inline" method="get" action="{{url()->current()}}">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Category</label>
  <select class="custom-select my-1 mr-sm-3" id="inlineFormCustomSelectPref" name="c">
    <option  value="na">- Select -</option>
		@foreach ( $widget['filter_cat'] as $category )
    	<option @if( $category == $widget["selected_cat"]) selected  @endif
					value="{{$category}}" >{{$category}}</option>
		@endforeach
  </select>
	<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sub-Category</label>
  <select class="custom-select my-1 mr-sm-3" id="inlineFormCustomSelectPref" name="sc">
		<option selected value="na">- Select -</option>
		@foreach ( $widget['filter_subcat'] as $category )
    	<option @if( $category == $widget["selected_subcat"]) selected  @endif value="{{$category}}">{{$category}}</option>
		@endforeach
  </select>
	<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Month</label>
	<select class="custom-select my-1 mr-sm-3" id="inlineFormCustomSelectPref" name="m">
		<option selected value="na">- Select -</option>
    <option @if($widget["selected_month"]==1) selected  @endif value='1'>Janaury</option>
    <option @if($widget["selected_month"]==2) selected  @endif value='2'>February</option>
    <option @if($widget["selected_month"]==3) selected  @endif value='3'>March</option>
    <option @if($widget["selected_month"]==4) selected  @endif value='4'>April</option>
    <option @if($widget["selected_month"]==5) selected  @endif value='5'>May</option>
    <option @if($widget["selected_month"]==6) selected  @endif value='6'>June</option>
    <option @if($widget["selected_month"]==7) selected  @endif value='7'>July</option>
    <option @if($widget["selected_month"]==8) selected  @endif value='8'>August</option>
    <option @if($widget["selected_month"]==9) selected  @endif value='9'>September</option>
    <option @if($widget["selected_month"]==10) selected  @endif value='10'>October</option>
    <option @if($widget["selected_month"]==11) selected  @endif value='11'>November</option>
    <option @if($widget["selected_month"]==12) selected  @endif value='12'>December</option>
	</select>
	<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Year</label>
	<select class="custom-select my-1 mr-sm-3" id="inlineFormCustomSelectPref" name="y">
		<option selected value="2019">2019</option>
	</select>
 <div class="col-auto">
	   <button type="submit" class="btn btn-success my-1">Filter</button>
	<a href="{{url()->current()}}" class="btn btn-default">Clear</a>
</div>
</form>
</div>
</div>
</div>
