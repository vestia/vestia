<!-- Markup for our off-canvas nav -->
<div id="offcanvas-nav" class="navmenu navmenu-inverse navmenu-fixed-left offcanvas" role="navigation">
	<div class="navmenu-header"></div>
	<ul class="nav navmenu-nav">
			<li>
				<a href="{{URL::to('/dash')}}">
					<i class="fa fa-dashboard pull-left"></i>Dashboard
				</a>
			</li>
			<li>
				<a href="{{URL::to('/logout')}}">
					<i class="fa fa-power-off pull-left"></i>Logout
				</a>
			</li>
	</ul>
</div>