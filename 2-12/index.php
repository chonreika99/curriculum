<form action="result.php" method="post">
      お名前：<input type="text" name="my_name" /><br>
      ご希望商品：
      <input type="radio" name="scenic" value="Ａ賞">Ａ賞
      <input type="radio" name="scenic" value="Ｂ賞">Ｂ賞
      <input type="radio" name="scenic" value="Ｃ賞">Ｃ賞
         <br>
    個数：<select name = "num">
        <?php for ($num=1;$num<=10;$num++){?>
            <option value= "<?php echo $num;?>">
                <?php echo $num; ?>
                </option>
             <?php } ?>
          </select>   <br>   
      <input type="submit" value="申込" />
    </form>