<div style="font-size: 16px; margin-bottom: 20px; line-height: 1.6;">
	Hi {{agent_full_name}},
	<br/><br/>
	This is a reminder for your upcoming appointment with {{customer_full_name}}
</div>
<h4 style="margin-bottom: 10px; margin-top: 0px; font-size: 16px; font-weight: bold;">Customer Information</h4>
<ul>
	<li>
		<span>Full Name:</span> <strong>{{customer_full_name}}</strong>
	</li>
	<li>
		<span>Email Address:</span> <strong>{{customer_email}}</strong>
	</li>
	<li>
		<span>Phone:</span> <strong>{{customer_phone}}</strong>
	</li>
	<li>
		<span>Comments:</span> <strong>{{customer_notes}}</strong>
	</li>
</ul>
<h4 style="margin-bottom: 10px; margin-top: 0px; font-size: 16px; font-weight: bold;">Appointment Information</h4>
<ul>
	<li>
		<span>Service:</span> <strong>{{service_name}}</strong>
	</li>
	<li>
		<span>Date, Time:</span> <strong>{{start_date}}, {{start_time}} - {{end_time}}</strong>
	</li>
</ul>
<div style="margin-top: 25px;">
	<a href="{{manage_booking_url_agent}}" style="display: block; text-decoration: none; padding: 10px; border-radius: 6px; text-align: center; font-size: 18px; color: #fff; background-color: #2652E4; font-weight: 700;">Manage This Appointment</a>
</div>