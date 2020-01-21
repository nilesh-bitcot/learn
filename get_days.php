<html>
  <body>
    <script>
function sundays(year, month) {

    var day, counter, date;

    day = 1;
    counter = 0;
    date = new Date(year, month, day);
    while (date.getMonth() === month) {
        if (date.getDay() === 0) { // Sun=0, Mon=1, Tue=2, etc.
            counter += 1;
        }
        day += 1;
        date = new Date(year, month, day);
    }
    return counter;
}
console.log(sundays(2020, 0));
    </script>
  </body>
</html>
