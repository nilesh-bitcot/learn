function Get_total_number_of_days($gyear, $gmonth, $gday){
  $months = $gmonth;  
  $years= $gyear;                                      
  $monthName = date("F", mktime(0, 0, 0, $months));

  $fromdt=date('Y-m-01 ',strtotime("First Day Of  $monthName $years")) ;
  $todt=date('Y-m-d ',strtotime("Last Day of $monthName $years"));

  $num_sundays='';                
  for ($i = 0; $i <= ((strtotime($todt) - strtotime($fromdt)) / 86400); $i++)
  {
      if(date('l',strtotime($fromdt) + ($i * 86400)) == $gday)
      {
            $num_sundays++;
      }
  }
  return $num_sundays;
}

echo Get_total_number_of_days(2020, 2, 'Saturday');
