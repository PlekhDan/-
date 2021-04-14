
<script>
/*// Считаем сдачу кофемашины монетками*/
/*// Рекурсивная функция. Рекурсия
  function getChange(num) {
    if (num >= 10) {
      console.log(10);
      getChange(num - 10);
    } else if (num >= 5){
      console.log(5);
      getChange(num - 5);
    } else if (num >= 2) {
      console.log(2);
      getChange(num - 2);
    } else if (num >= 1) {
      console.log(1);
      getChange(num - 1);
    }
  }
  
    function getChange(num) {
      let change = 0;
      if (num >= 10) change = 10;
      else if (num >= 5) change = 5;
      else if (num >= 2) change = 2;
      else if (num >= 1) change = 1;
      if (change > 0) {
        console.log(change);
        getChange(num - change);
      }
    }
*/
    // Переписать с использованием цикла, без рекурсии
    
    function money(sum) { 
      let rub10 = 0;
      let rub5 = 0;
      let rub2 = 0;
      let rub1 = 0;
      while (sum != 0) {
        if (sum >= 10) {
          sum = sum - 10;
          rub10 = rub10 + 1;
          console.log(rub10 + " = rub10");
        } else if (sum >= 5) {
          sum = sum - 5;
          rub5 = rub5 + 1;
          console.log(rub5 + " = rub5");
        } else if (sum >= 2) {
          sum = sum - 2;
          rub2 = rub2 + 1;
          console.log(rub2 + " = rub2"); 
        } else if (sum >= 1) {
          sum = sum - 1;
          rub1 = rub1 + 1;
          console.log(rub1 + " = rub1"); 
        }
      }
    }
</script>