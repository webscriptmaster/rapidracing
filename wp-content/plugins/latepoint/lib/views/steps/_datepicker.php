<div class="step-datepicker-w latepoint-step-content" data-step-name="datepicker"  data-clear-action="clear_step_datepicker">
  <div class="os-dates-w">
    <?php OsCalendarHelper::generate_multiple_months(\LatePoint\Misc\BookingRequest::create_from_booking_model($booking), new OsWpDateTime($calendar_start_date), ['timezone_name' => OsTimeHelper::get_timezone_name_from_session()]); ?>
  </div>
  <div class="time-selector-w <?php echo 'time-system-'.OsTimeHelper::get_time_system(); ?> <?php echo (OsSettingsHelper::is_on('show_booking_end_time')) ? 'with-end-time' : 'without-end-time'; ?> style-<?php echo OsSettingsHelper::get_time_pick_style(); ?>">
    <div class="times-header">
      <div class="th-line"></div>
      <div class="times-header-label">
        <?php _e('Pick a slot for', 'latepoint'); ?> <span></span>
	      <?php do_action('latepoint_step_datepicker_appointment_time_header_label', $booking); ?>
        </div>
      <div class="th-line"></div>
    </div>
    <div class="os-times-w">
      <div class="timeslots"></div>
    </div>
  </div>
  <?php
  echo OsFormHelper::hidden_field('booking[start_date]', $booking->start_date, [ 'class' => 'latepoint_start_date', 'skip_id' => true]);
	echo OsFormHelper::hidden_field('booking[start_time]', $booking->start_time, [ 'class' => 'latepoint_start_time', 'skip_id' => true]);
	echo OsFormHelper::hidden_field('timeshift_minutes', $timeshift_minutes, [ 'class' => 'latepoint_timeshift_minutes', 'skip_id' => true]);
	echo OsFormHelper::hidden_field('timezone_name', $timezone_name, [ 'class' => 'latepoint_timezone_name', 'skip_id' => true]);
  ?>
</div>