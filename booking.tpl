{include file="header.tpl" title="Bookings" page_style="style/booking.css"}
		<div class="centralize" id="container">
			<h1>Booking Form</h1>
			<div id="form_wrapper">
				<form method="POST" action="thanks.php">
					<table>
						<tr>
							<td class="tlabel"><b>First Name<span style="color:red;">*</span></b></td>
							<td class="entries"><input type="text" name="first_name" required="required" oninvalid="this.setCustomValidity('First name is required!')" oninput="setCustomValidity('')"></td>
							<td class="tlabel"><b>Requirements<span style="color:red;">*</span></b></td>
							<td class="tlabel"><label>Windows<input class="chk" type="checkbox" name="req[]" value="windows"/></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_windows"}</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Surname<span style="color:red;">*</span></b></td>
							<td class="entries"><input type="text" name="surname" required="required" oninvalid="this.setCustomValidity('Surname is required!')" oninput="setCustomValidity('')"></td>
							<td class="tlabel"></td>
							<td class="tlabel"><label>Doors<input class="chk" type="checkbox" name="req[]" value="doors" /></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_doors"}</</td>
						</tr>
						<tr>
							<td class="tlabel"><b>House Name</b></td>
							<td class="entries"><input type="text" name="house_name"></td>
							<td class="tlabel"></td>
							<td class="tlabel"><label>Conservatories<input class="chk" type="checkbox" name="req[]" value="conservatories" /></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_conservatories"}</</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Address (Line 1)<span style="color:red;">*</span></b></td>
							<td class="entries"><input type="text" name="addr_line1" required="required" oninvalid="this.setCustomValidity('Address is required!')" oninput="setCustomValidity('')"></td>
							<td class="tlabel"></td>
							<td class="tlabel"><label>Soffits<input class="chk" type="checkbox" name="req[]" value="soffits" /></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_soffits"}</</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Address (Line 2)</b></td>
							<td class="entries"><input type="text" name="addr_line2"></td>
							<td class="tlabel"></td>
							<td class="tlabel"><label>Fascias<input class="chk" type="checkbox" name="req[]" value="fascias" /></label></td>
							<td class="color_choices">{include file="color_select.tpl" color_s="color_fascias"}</</td>
						</tr>
						<tr>
							<td class="tlabel"><b>Town/City<span style="color:red;">*</span></b></td>
							<td class="entries"><input type="text" name="town_city" required="required" oninvalid="this.setCustomValidity('Town or city is required!')" oninput="setCustomValidity('')"></td>
						</tr>
						<tr>
							<td class="tlabel"><b>County<span style="color:red;">*</span></b></td>
							<td class="entries"><input type="text" name="county" required="required" oninvalid="this.setCustomValidity('County is required!')" oninput="setCustomValidity('')"></td>
						</tr>
						<tr>
							<td class="tlabel"><b>Postcode<span style="color:red;">*</span></b></td>
							<td class="entries"><input type="text" name="postcode" required="required" oninvalid="this.setCustomValidity('Postcode is required!')" oninput="setCustomValidity('')"></td>
						</tr>
						<tr>
							<td class="tlabel"><b>Phone</b></td>
							<td class="entries"><input type="text" name="phone"></td>
						</tr>
						<tr>
							<td class="tlabel"><b>Mobile<span style="color:red;">*</span></b></td>
							<td class="entries"><input type="text" name="mobile" required="required" oninvalid="this.setCustomValidity('Contact method is required!')" oninput="setCustomValidity('')"></td>
						</tr>
						<tr>
							<td class="tlabel"><b>Email</b></td>
							<td class="entries"><input type="text" name="email"></td>
						</tr>
						<tr id="book_btn_cell">
							<td colspan="5"><input id="book_btn" type="submit" value="Book"></td>
						</tr>
					</table>
					<pre id="form_mandatory"><b><i>Fields marked with '<span style="color:red;">*</span>' are mandatory.</i></b></pre>
				</form>
			</div>
		</div>
{include file="footer.tpl"}