<div class="navbar navbar-default">

	<div class="container">

		<div class="navbar-header">
			<a href="{{ $route }}" class="navbar-brand">Sketchpad</a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-main">

			<ul class="nav navbar-nav">
				<li>
					<a href="{{ $route }}:show/new" title="New Controller">New</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<!--
				<li>
					<a href="{{ $route }}:options" title="Options">Options</a>
				</li>
				-->
				<li>
					<a target="_blank" href="{{ $route }}:show/help" title="Help">Help</a>
				</li>
			</ul>

		</div>
	</div>
</div>