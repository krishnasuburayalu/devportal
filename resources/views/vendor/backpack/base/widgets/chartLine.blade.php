<div class="chart-line-p1 {{ $widget['wrapperClass'] ?? 'col-sm-6 col-md-4' }}" data-labels=
"{{ $widget['data_labels'] ?? '{}' }}" data-series="{{ $widget['data_series'] ?? '{}' }}"
data-id="{{ $widget['chart_id'] ?? 'chart-id' }}">
	<div class="{{ $widget['class'] ?? 'card mb-2' }}">
	  @if (isset($widget['content']['header']))
	  <div class="card-header">{!! $widget['content']['header'] !!}</div>
	  @endif
	  <canvas class="card-body" id="{{ $widget['chart_id'] ?? 'chart-id' }}" height="400"></canvas>
	</div>
</div>
