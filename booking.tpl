{include file="header.tpl" title="Bookings" page_style="style/booking.css"}
		{literal}<script>
			function isReqChecked() {
				var checks = document.getElementsByClassName('chk');
				var isChecked = false;
				for (var i = 0; i < checks.length; ++i) {
					if (checks[i].checked) {
						isChecked = true;
						break;
					}
				}
				if (!isChecked) {
					$('#booking_form').submit(function(e) { e.preventDefault(); });
					alert("You must select at least one requirement!");
				} else {
					$('#booking_form').unbind('submit').submit();
				}
			}
		</script>{/literal}
		<div class="centralize" id="container">
			<h1>Booking Form</h1>
			<div id="form_wrapper">
				<form id="booking_form" method="POST" action="thanks.php">
					<table>
						<tr>
							<td class="tlabel"><b>First Name<span style="color:red;">*</span></b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="first_name" autofocus required pattern="([A-Z][a-z]{1,25}(\s|-)?){1,5}" onchange="try{setCustomValidity('')}catch(e){}" />{/literal}
							<td class="tlabel"><b>Requirements<span style="color:red;">*</span></b></td>
							<td class="tlabel"><label>Windows<input class="chk" type="checkbox" name="req[]" value="Window"/></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_windows"}</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Surname<span style="color:red;">*</span></b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="surname" required pattern="([A-Z][a-z]{1,25}-?){1,2}" onchange="try{setCustomValidity('')}catch(e){}" />{/literal}</td>
							<td class="tlabel"></td>
							<td class="tlabel"><label>Doors<input class="chk" type="checkbox" name="req[]" value="Door" /></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_doors"}</</td>
						</tr>
						<tr>
							<td class="tlabel"><b>House Name</b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="house_name" pattern="([A-Za-z]\s?-?)+" />{/literal}</td>
							<td class="tlabel"></td>
							<td class="tlabel"><label>Conservatories<input class="chk" type="checkbox" name="req[]" value="Conservatory" /></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_conservatories"}</</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Address (Line 1)<span style="color:red;">*</span></b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="addr_line1" required pattern="^\d+\s([A-Z][a-z]{1,50}\s?){1,}$" onchange="try{setCustomValidity('')}catch(e){}" />{/literal}</td>
							<td class="tlabel"></td>
							<td class="tlabel"><label>Soffits<input class="chk" type="checkbox" name="req[]" value="Soffit" /></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_soffits"}</</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Address (Line 2)</b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="addr_line2" pattern="([A-Za-z]\s?-?)+" />{/literal}</td>
							<td class="tlabel"></td>
							<td class="tlabel"><label>Fascias<input class="chk" type="checkbox" name="req[]" value="Fascia" /></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_fascias"}</</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Town/City<span style="color:red;">*</span></b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="town_city" required="required" pattern="([A-Z][a-z]{1,25}(\s|-)?){1,4}" onchange="try{setCustomValidity('')}catch(e){}" />{/literal}</td>
						</tr>
						<tr>
							<td class="tlabel"><b>County<span style="color:red;">*</span></b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="county" required pattern="([A-Z][a-z]{1,25}\s?){1,3}" onchange="try{setCustomValidity('')}catch(e){}" />{/literal}</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Postcode<span style="color:red;">*</span></b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="postcode" required pattern="^[A-Z]{1,2}\d{1,2}\s\d[A-Z]{2}$" onchange="try{setCustomValidity('')}catch(e){}" />{/literal}</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Phone</b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="phone" pattern="^0\d{2,5}\s?\d{6,8}$" />{/literal}</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Mobile<span style="color:red;">*</span></b></td>
							<td class="entries">{literal}<input class="i_fields" type="text" name="mobile" required pattern="^07\d{3}\s?\d{6}$" onchange="try{this.setCustomValidity('')}catch(e){}" />{/literal}</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Email</b></td>
							<td class="entries"><input class="i_fields" type="email" name="email"></td>
						</tr>
						<tr id="book_btn_cell">
							<td colspan="5"><input id="book_btn" type="submit" value="Book" onclick="isReqChecked();" /></td>
						</tr>
					</table>
					<pre id="form_mandatory"><b><i>Fields marked with '<span style="color:red;">*</span>' are mandatory.</i></b></pre>
				</form>
			</div>
		</div>
{include file="footer.tpl"}