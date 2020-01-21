<?php
function Get_total_number_of_weekdays($gyear, $gmonth){
  $months = $gmonth;
  $years= $gyear;
  $monthName = date("F", mktime(0, 0, 0, $months));

  $fromdt=date('Y-m-01 ',strtotime("First Day Of  $monthName $years")) ;
  $todt=date('Y-m-d ',strtotime("Last Day of $monthName $years"));

  $num_sundays='';
  $num_mondays='';
  $num_tuedays='';
  $num_weddays='';
  $num_thudays='';
  $num_fridays='';
  $num_satdays='';
  $total_days = array();
  for ($i = 0; $i <= ((strtotime($todt) - strtotime($fromdt)) / 86400); $i++)
  {
      if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Sunday')
      {
            $num_sundays++;
      }
      if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Monday')
      {
            $num_mondays++;
      }
      if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Tuesday')
      {
            $num_tuedays++;
      }
      if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Wednesday')
      {
            $num_weddays++;
      }
      if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Thursday')
      {
            $num_thudays++;
      }
      if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Friday')
      {
            $num_fridays++;
      }
      if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Saturday')
      {
            $num_satdays++;
      }
  }
  $total_days['sunday']=$num_sundays;
  $total_days['monday']=$num_mondays;
  $total_days['tueday']=$num_tuedays;
  $total_days['wedday']=$num_weddays;
  $total_days['thuday']=$num_thudays;
  $total_days['friday']=$num_fridays;
  $total_days['satday']=$num_satdays;
  return $total_days;
}

echo "<pre>";
print_r(Get_total_number_of_weekdays(2019, 12));
echo "</pre>";
