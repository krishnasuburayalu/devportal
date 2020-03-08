<div class="chart-pie-p1 {{ $widget['c1_wrapperClass'] ?? 'col-sm-6 col-md-4' }}" data-labels=
"{{ $widget['c1_data_labels'] ?? '{}' }}" data-series="{{ $widget['c1_data_series'] ?? '{}' }}"
data-id="{{ $widget['chart_id'] ?? 'chart-id' }}">
	<div class="{{ $widget['class'] ?? 'card mb-2' }}">
	  @if (isset($widget['c1_content']['header']))
	  <div class="card-header">{!! $widget['c1_content']['header'] !!}</div>
	  @endif
	  <canvas class="card-body" id="{{ $widget['chart_id'] ?? 'chart-id' }}" height="400"></canvas>
	</div>
</div>
