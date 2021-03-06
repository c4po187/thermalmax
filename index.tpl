{include file="header.tpl" page_style="style/home.css" title="Thermal Max Windows"}
		<!-- Main Body -->
		<script src="script/featurette.js" type="text/javascript"></script>
		<div class="centralize" id="home_content">
			<div id="hc_left">
				<div id="outer_features">
					<div id="inner_features">
						<pre id="feature"></pre>
					</div>
				</div>
				<div id="task_shortcuts">
					<button class="task_button ltask" onclick="location.href='booking.php';">
						<p>Make a booking</p>
					</button>
					<button class="task_button rtask" onclick="location.href='contact.php';">
						<p>Make an appointment</p>
					</button>
				</div>
			</div>
			<div id="hc_right">
				<img src="{$showcase}" alt="{$exq_aes}" id="showcase" title="{$exq_aes}" />
				<img src="{$rosette}" alt="{$r10y}" id="rosette" title="{$r10y}" />
			</div>
		</div>
{include file="footer.tpl"}